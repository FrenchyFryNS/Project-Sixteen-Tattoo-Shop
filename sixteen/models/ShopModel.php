<?php

class ShopModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}
	
	public function getTousLesProduits($nb,$offset)//selectionner les infos demander dans la table produits
	{
		return $this->db->query("SELECT id, nom, image, prix FROM produits ORDER BY date DESC LIMIT $nb,$offset");
	}

	public function getProduit($id)//idem mais seulement les infos du produit demander
    {
		return $this->db->query('SELECT * FROM produits WHERE id=?',[$id]);
	}

	public function getCountProduit()//compte le nb de produits toute catégorie confondue
	{
		return $this->db->query('SELECT COUNT(*) FROM produits');
	}

	public function getRandomProd($id)//selectionne des produits au hasard en excluant le produit déjà selectionner
	{
		return $this->db->query("SELECT id, nom, image, prix FROM produits WHERE id NOT IN($id) ORDER BY RAND() LIMIT 4");
	}

	public function getProduitByCat($id_cat,$nb,$offset)//demande les produits pour la categorie demandé
	{
		return $this->db->query("SELECT id, nom, image, prix FROM produits WHERE id_categorie=$id_cat ORDER BY date DESC LIMIT $nb,$offset");
	}
	
	public function getCountProduitByCat($id_cat)//compte le nb de produits pour la catégorie selectionner
	{
		return $this->db->query('SELECT COUNT(*) FROM produits WHERE id_categorie=?',[$id_cat]);
	}

	public function getCategorie()//rassemble les categorie
	{
		return $this->db->query('SELECT id, categorie FROM categories');
	}

}
?>