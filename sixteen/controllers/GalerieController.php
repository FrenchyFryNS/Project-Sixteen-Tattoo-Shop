<?php

class GalerieController extends Controller 
{

	private $galerie;

	function __construct(){

		$this->galerie = new GalerieModel();

	}

	private function tattooJay(){

		return $this->galerie->getJayTattoo();
		
	}	

	private function tattooOcto(){

		return $this->galerie->getOctoTattoo();

	}

	public function index()
	{
		$jay = $this->tattooJay();
		$octo = $this->tattooOcto();
		$this->render('galerie', compact('jay', 'octo'));
	} 
}
