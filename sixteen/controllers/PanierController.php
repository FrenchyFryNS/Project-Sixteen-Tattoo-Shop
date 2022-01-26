<?php

class PanierController extends Controller 
{
	private $panier;

	function __construct(){
	
		$this->panier = new PanierModel();

	}

	public function creationPanier(){

		if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
			$_SESSION['panier']['idProduit'] = array();
			$_SESSION['panier']['nomProduit'] = array();
			$_SESSION['panier']['imgProduit'] = array();
			$_SESSION['panier']['qteProduit'] = array();
			$_SESSION['panier']['prixProduit'] = array();
			$_SESSION['panier']['verrou'] = false;
        }
		
	}

	public function add($param1_url){
		$produit = $this->SelectProduit(htmlspecialchars($param1_url));
		$this->creationPanier();
		$id = (int)$produit[0]->id;

		$positionProduit = array_search($id, $_SESSION['panier']['idProduit']);

		if ($positionProduit !== false) {//si oui, ont rajoute seulement l'article une seconde fois dans le panier
			$_SESSION['panier']['qteProduit'][$positionProduit]+=1;

		}else {
			array_push($_SESSION['panier']['idProduit'],$produit[0]->id);
			array_push($_SESSION['panier']['nomProduit'],$produit[0]->nom);
			array_push($_SESSION['panier']['imgProduit'],$produit[0]->image);
			array_push($_SESSION['panier']['qteProduit'],1);
			array_push($_SESSION['panier']['prixProduit'],$produit[0]->prix);
		}
	}

	public function delet($param1_url){
		if (ctype_digit($param1_url))
		{
		   //Nous allons passer par un panier temporaire
		   $tmp=array();
		   $tmp['idProduit'] = array();
		   $tmp['nomProduit'] = array();
		   $tmp['imgProduit'] = array();
		   $tmp['qteProduit'] = array();
		   $tmp['prixProduit'] = array();
		   $tmp['verrou'] = $_SESSION['panier']['verrou'];
	 
		   for($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++)
		   {
			  if ($_SESSION['panier']['idProduit'][$i] !== $param1_url)
			  {
				 array_push( $tmp['idProduit'],$_SESSION['panier']['idProduit'][$i]);
				 array_push( $tmp['nomProduit'],$_SESSION['panier']['nomProduit'][$i]);
				 array_push( $tmp['imgProduit'],$_SESSION['panier']['imgProduit'][$i]);
				 array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
				 array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
			  }
	 
		   }
		   //On remplace le panier en session par notre panier temporaire à jour
		   $_SESSION['panier'] =  $tmp;
		   //On efface notre panier temporaire
		   unset($tmp);
		}else{
		echo "Un problème est survenu veuillez contacter l'administrateur du site.";
		}
	}

	public function selectProduit($id){
		
		return $this->panier->getSelectProduit($id)->fetchAll();

	}
	
	public function isVerrouille(){
		if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
		return true;
		else
		return false;
	}
	 


	public function index()
	{
		$this->creationPanier();
		$this->render('panier');
	} 

}
