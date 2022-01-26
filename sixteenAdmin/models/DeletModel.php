<?php

class DeletModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getDelet($id) {//Supprime la ligne demander
	
        return $this->db->query('DELETE FROM `tattoo` WHERE id=?',[$id]);
    }

}