<?php

class DeletController extends Controller 
{
	private $delet;

	public function __construct(){

		$this->delet = new DeletModel();

	}

	public function delet($id){

		return $this->delet->getDelet($id);

	}

}
