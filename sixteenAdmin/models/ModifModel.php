<?php

class ModifModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getTattoo($id) {
	
        return $this->db->query('SELECT * FROM tattoo WHERE id=?',[$id]);
    }

	public function modifTattoo($id, $artiste, $date, $alt){

		$this->db->query('UPDATE tattoo SET artiste=?, date=?, alt=? WHERE id=?',[$artiste, $date, $alt, $id]);

	}
}