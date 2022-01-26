<?php

require '../app/Autoloader.php';
require '../app/Database.php';

Autoloader::register();


$url=($_GET['url'])??null;

$url=explode("-",filter_var($url,FILTER_SANITIZE_URL));


$ctrl_url=$url[0]??null;//premier mot clé de l'url
$action_url=($url[1])??'index';//second mot clé de l'url
$param1_url=($url[2])??null;//3ème mot clée de l'url


if($ctrl_url=="shop"){

	$controller= new ShopController();
	
	if(ctype_digit($action_url)){
		$controller->detailsProduit((int)$action_url);
		
	}
	elseif(ctype_digit($param1_url)){
		$controller->index($param1_url, $action_url);

	}
	else{
		$controller->index();
	}

}
elseif ($ctrl_url=="panier") {
	
	$controller = new PanierController();
	session_start();

	if ($action_url=="add") {
		$controller->add($param1_url);
		$controller->index();
	}
	elseif ($action_url=="delet") {
		$controller->delet($param1_url);
		$controller->index();
	}
	else{
		$controller->index();
	}

}
elseif($ctrl_url=="artistes"){

	$controller= new ArtisteController();
	$controller->index();

}
elseif($ctrl_url=="galerie"){

	$controller= new GalerieController();
	$controller->index();

}
elseif($ctrl_url=="contact"){

	$controller= new ContactController();
	if (isset($_POST['mail']) && isset($_POST['nomEntier']) && isset($_POST['sujet'])) {
		$sujet= htmlspecialchars($_POST['nomEntier'])." vous contacte via le site web Sixteen Tattoo Shop";
		$nom= 'From : '.htmlspecialchars($_POST['nomEntier']);
		$header= "From: ".htmlspecialchars($_POST['mail']);
		$message= htmlspecialchars($_POST['sujet']);
		$retour = mail('enzo.langet@gmail.com', $sujet, $message, $header);
		var_dump($retour);
		die();
		$controller->index();
	}else {
		$controller->index();
	}

}
else{
	$controller= new Accueilcontroller();
	$controller->index();
}

?>