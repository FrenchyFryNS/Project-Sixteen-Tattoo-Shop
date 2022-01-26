<?php

class AddModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function addTattoo($image, $artiste, $date, $alt) {
	
        return $this->db->query('INSERT INTO tattoo SET image=?, artiste=?, date=?, alt=?',[$image, $artiste, $date, $alt]);
    }

}