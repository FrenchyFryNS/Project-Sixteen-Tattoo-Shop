<?php

class PanierModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getSelectProduit($id)//selectionner les infos demander dans la table produits
	{
		return $this->db->query('SELECT id, nom, image, prix FROM produits WHERE id=?',[$id]);
	}
}