<?php
session_start();
require '../app/Autoloader.php';
require '../app/Database.php';

Autoloader::register();



$url=($_GET['url'])??null;

$url=explode("-",filter_var($url,FILTER_SANITIZE_URL));


$ctrl_url=$url[0]??null;
$action_url=($url[1])??'index';
$param1_url=($url[2])??null;



if($ctrl_url=="home"){
	
	if(isset($_POST['login']) && isset($_POST['password'])){//Si ont a envoyer les infos via la page login..
		$controller=new LoginController();//ont appelle LoginController
		$admin = $controller->login($_POST['login']);//et ont demande de récupérer les l'id et mdp dans la BDD

		$hash = $admin[0]->mdp;
		$id = $admin[0]->identifiant;

		if ($_POST['login'] !== $id){//si le login dans le form n'est pas le même que celui dans la BDD...
			$controller->index($param="identifiant");//ont renvoie sur la page login avec le param égal a "identifiant" pour indiquer que le problème vient de l'identifiant, soit mauvais, sois inexistant
		}
		else{
			$correctPassword = password_verify($_POST['password'], $hash);//verifie si le mdp entrer via le formulaire correspond a celui hasher dans la BDD, si oui, renvoie TRUE
			if ($correctPassword) {//si le mdp est le bon, ont lance la session et ont charge la page admin
				$_SESSION['id'] = $id;
				
				$controller= new AccueilController();
				$controller->index();
			}
			else {//sinon ont renvoie sur login avec la param mdp pour indiquer que le mdp n'est pas bon
				$controller->index($param="mdp");
			}
		}
	} elseif ($action_url == "deco") {//quand ont se déconnecte, ont supprime la session ainsi que les valeurs dans la superglobal puis ont renvoie sur la page login avec la param deco pour indiquer la déconnexion
		$_SESSION = array();
		session_destroy();
		$controller=new LoginController();
		$controller->index($param="deco");
	} elseif(isset($_SESSION['id'])){//quand ont recharge la page, pour que la session reste active
		$controller=new AccueilController();
		$controller->index();
	} else {//si ont tape home dans l'url sans avoir entrer l'id et mdp admin, la page redirige vers rien, donc, si ont tente de taper l'url, si la session na pas été lancé, cela redirigera toujours vers la page login
		$controller=new LoginController();
		$controller->index();
	}
}
elseif($ctrl_url == "modif"){
	if (ctype_digit($action_url)) {//si l'action_url est un nombre...
		$controller = new ModifController();
		if ($param1_url == "done") {//si le param url est définie comme "done"...
			
			$controller->modif($_POST['id'],$_POST['artiste'],$_POST['date'],$_POST['alt']);//modifier la ligne dans ma BDD avec ceux entrer dans mon form

			$controller= new AccueilController();//ensuite retour a la page d'accueil pour admirer le résultat
			$controller->index();
		}else {//sinon ont a pas encore accéder au form, dans ce cas on le charge en récupérant la ligne concerner dans ma BDD
			$controller->index($action_url);
		}	
	}elseif (isset($_SESSION['id'])) {//Si je n'ai que le ctrl_url et que l'action_url n'est pas un nombre mais que ma session est toujours valide, retour à l'accueil
		$controller = new AccueilController();
		$controller->index();
	}
	else {//sinon, je n'ai pas ma session d'active et je ramène vers la page de login
		$controller= new LoginController();
		$controller->index();
	}
	
}
elseif($ctrl_url == "add"){
	if (isset($_POST['artiste']) && isset($_POST['date'])) {
		$target_dir = "../../Sixteen/public/img/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$controller = new AddController();
				$controller->add($_FILES["fileToUpload"]["name"], $_POST['artiste'], $_POST['date'], $_POST['alt']);
			  	$controller = new AccueilController();
			  	$controller->index();
			} else {
				$error = "errorUpload";
				$controller = new AddController();
				$controller->index($error);
			}
	}
	elseif (isset($_SESSION['id'])) {
		$controller = new AddController();
		$controller->index();
	}else {
		$controller = new LoginController();
		$controller->index();
	}
}
elseif($ctrl_url == "delet"){

	if (isset($_SESSION['id'])) {
		$controller = new DeletController();
		$controller->delet($action_url);
		
		$controller = new AccueilController();
		$controller->index();
	}
	else{
		$controller = new LoginController();
		$controller->index();
	}

}
else{
	if (isset($_SESSION['id'])) {
		$controller = new AccueilController();
		$controller->index();
	}else {
		$controller= new Logincontroller();
		$controller->index();
	}
}

?>