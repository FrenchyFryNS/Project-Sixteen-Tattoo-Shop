<?php

class AccueilModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getToutTattoo() {//Pour le carousel dans la view home
		
        return $this->db->query('SELECT id, image, alt FROM tattoo ORDER BY date DESC LIMIT 6'); //ont demande à la BDD de selectionner l'id, image, alt de la table tattoo trier du plus récent et limiter le nombre de résultats à 6
    }

	public function getRandomCategories() {//categories pour la page home

		return $this->db->query('SELECT * FROM `categories` ORDER BY RAND() LIMIT 3');//selectionne tout dans la table categorie trier au hasard et limiter le nombre de résultats par 3
		
	}
}