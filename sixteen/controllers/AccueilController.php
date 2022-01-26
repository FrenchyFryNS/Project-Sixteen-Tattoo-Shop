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

	private function randomCategorie(){

		return $this->home->getRandomCategories()->fetchAll();

	}

	public function index()
	{
		$tattoo = $this->toutTattoo();//$tattoo appelle la fonction public toutTattoo
		$categorie = $this->randomCategorie();//$categorie va appeller la fonction randomCategorie
		$this->render('home', compact('tattoo', 'categorie'));
	} 
}
