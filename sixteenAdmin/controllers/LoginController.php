<?php

class LoginController extends Controller 
{
	private $login;

	public function __construct(){

		$this->login = new LoginModel();

	}

    public function login($id){//va récupérer l'identifiant et le mdp
        return $this->login->getAdmin($id)->fetchAll();
    }

	public function index($param=NULL)
	{
		$this->render('login', compact('param'));
	} 
}
