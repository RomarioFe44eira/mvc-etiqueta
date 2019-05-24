<?php

class Plano extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('plano/index');
	}
	
	function details() {
		//$this->view->render('index/index');
	}
	
}