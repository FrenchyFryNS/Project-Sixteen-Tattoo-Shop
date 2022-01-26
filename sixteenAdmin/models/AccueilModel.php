<?php

class AccueilModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getToutTattoo() {
		
        return $this->db->query('SELECT * FROM tattoo ORDER BY date DESC');
    }

}