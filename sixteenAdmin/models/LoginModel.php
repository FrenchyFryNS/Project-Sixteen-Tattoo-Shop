<?php

class LoginModel{
	
	private $db;
	
	public function __construct()
	{
		$this->db=new Database();
	}

    public function getToutTattoo() {
		
        return $this->db->query('SELECT * FROM tattoo ORDER BY date DESC');
    }

    public function getAdmin($id) {
        return $this->db->query('SELECT * FROM admin WHERE identifiant=?',[$id]);
    }

    // public function adduser($id, $mdp){
	// 	return $this->db->query('INSERT INTO admin (identifiant, mdp) VALUES (?,?)',[$id, $mdp]);
	// }
}