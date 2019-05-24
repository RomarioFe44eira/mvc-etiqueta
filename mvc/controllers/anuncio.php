<?php

class Anuncio extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('anuncio/index');
		
	}
	
	function p() {
		$this->view->render('anuncio/p');
	}
	
}