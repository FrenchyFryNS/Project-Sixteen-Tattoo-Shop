<?php

class AddController extends Controller 
{
	private $add;

	public function __construct(){

		$this->add = new AddModel();

	}

    public function add($image, $artiste, $date, $alt){

        $this->add->addTattoo($image, $artiste, $date, $alt);

    }

	public function index($error=NULL)
	{
        
		$this->render('add',compact('error'));
	} 
}
