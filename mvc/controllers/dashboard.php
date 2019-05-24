<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
		$this->view->js = array('dashboard/js/default.js');
	}
	
	function index(){
		$this->view->render('dashboard/index');
	}
	
	function anuncios(){
			$this->view->render('dashboard/anuncios');
	}
	
	function planos(){
		$this->view->render('dashboard/planos');
	}
	
	function conta(){
		$this->view->render('dashboard/conta');
	}
	
	function logout(){
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	
	function xhrInsert(){
		$this->model->xhrInsert();
	}
	
	function xhrGetListings(){
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing(){
		$this->model->xhrDeleteListing();
	}

}