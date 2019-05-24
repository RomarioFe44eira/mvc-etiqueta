<?php

class Configuracao extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('configuracao/index');
	}
	
	function details() {
		//$this->view->render('index/index');
	}
	
}