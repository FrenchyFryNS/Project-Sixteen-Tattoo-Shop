<?php

class ShopController extends Controller 
{

	private $shop;

	function __construct(){

		$this->shop = new ShopModel();

	}

	private function listeTousLesProduits($nb, $offset){//demande la liste de tout les produits

		return $this->shop->getTousLesProduits($nb, $offset)->fetchAll();

	}

	public function detailsProduit($id){//demande les infos concernant un produit
		$info=$this->shop->getProduit($id)->fetchAll();
		$random = $this->shop->getRandomProd($id)->fetchAll();
		$this->render('shopDetails',compact('info','random'));
	}

	private function produitByCat($id_cat, $nb, $offset){//demande la liste des produits appartenant à la catégorie en question

		return $this->shop->getProduitByCat($id_cat, $nb, $offset)->fetchAll();
		
	}

	private function listeCat(){//demande la liste des catégories

		return $this->shop->getCategorie()->fetchAll();

	}

	private function CountProduit() {//Compte le nombre de produits 

		return $this->shop->getCountProduit()->fetchColumn();

	}

	private function CountProduitByCat($id_cat) {//Compte le nombre de produits lié à la catégorie en question

		return $this->shop->getCountProduitByCat($id_cat)->fetchColumn();

	}

	public function index($id_cat=NULL, $action_url=NULL)
	{

		if(isset($_GET['p']) && !empty($_GET['p'])){//détermine sur quelle page on se trouve
			$currentPage = (int) strip_tags($_GET['p']);
		}else{
			$currentPage = 1;
		}
		
		if ($id_cat!=NULL) {//Si $id_cat n'est pas null alors ont compte le nb de produit de la catégorie
			$nb_produit = (int)$this->CountProduitByCat($id_cat);
		}else{//sinon ont veux le nb de produit, toute catégorie confondus
			$nb_produit = (int)$this->CountProduit();
		}
		$offset = 12;//nb d'articles par page
		
		$pages = ceil($nb_produit / $offset);//calcul la page
		
		$nb = ($currentPage * $offset) - $offset;

		if($id_cat!=NULL){
			$produit=$this->produitByCat($id_cat, $nb, $offset);
		}else{
			$produit=$this->listeTousLesProduits($nb, $offset);
		}
		$categories=$this->listeCat();

		$this->render('shop',compact('produit','categories','id_cat','action_url','pages','currentPage'));
	} 
}