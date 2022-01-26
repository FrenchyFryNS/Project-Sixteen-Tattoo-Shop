<?php

class GalerieModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getJayTattoo() {
		
        return $this->db->query("SELECT id, image, alt FROM tattoo WHERE artiste = 'jay' ORDER BY date DESC LIMIT 0, 20");

    }

    public function getOctoTattoo() {
		
        return $this->db->query("SELECT id, image, alt FROM tattoo WHERE artiste = 'octo' ORDER BY date DESC LIMIT 0, 20");

    }
}