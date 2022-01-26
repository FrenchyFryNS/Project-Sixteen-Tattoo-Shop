<?php

class ModifController extends Controller 
{
	private $modif;

	public function __construct(){

		$this->modif = new ModifModel();

	}

	public function tattoo($id){

		return $this->modif->getTattoo($id)->fetchAll();

	}

    public function modif($id, $artiste, $date, $alt){

        $this->modif->modifTattoo($id, $artiste, $date, $alt);

    }

	public function index($id)
	{
		$tattoo = $this->tattoo($id);
		$this->render('modif', compact('tattoo'));
	} 
}
