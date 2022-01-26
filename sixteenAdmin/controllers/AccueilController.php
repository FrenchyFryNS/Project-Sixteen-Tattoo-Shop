<?php

class AccueilController extends Controller 
{
	private $home;

	public function __construct(){

		$this->home = new AccueilModel();

	}

	private function toutTattoo(){

		return $this->home->getToutTattoo()->fetchAll();

	}


	public function index()
	{
		$tattoo = $this->toutTattoo();
		$this->render('home', compact('tattoo'));
	} 
}
