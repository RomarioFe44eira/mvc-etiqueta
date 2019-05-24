<?php

class Graficos extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('graficos/index');
	}
	
	function details() {
		//$this->view->render('index/index');
	}
	
}