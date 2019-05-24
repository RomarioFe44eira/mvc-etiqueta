<?php

class User extends Controller {

	public function __construct(){
		parent::__construct();
		Session::init();
	}
	
	public function isLogged(){
		$logged = Session::get('loggedIn');
		$role = Session::get('role');
		
		if ($logged == false || $role != 'owner') {
			Session::destroy();
			header('location: '.URL.'login');
			exit;
		}
	}
	
	public function index(){
		$this->isLogged();
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');
	}
	
	public function add(){
		$this->view->render('user/add');
	}
	
	public function create(){
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		$this->view->render('user/sucess');
	}
	
	public function edit($id){
		$this->isLogged();
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/edit');
	}
	
	public function editSave($id){
		$this->isLogged();
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
		header('location: ' . URL . 'user');
	}
	
	public function delete($id){
		$this->isLogged();
		$this->model->delete($id);
		header('location: ' . URL . 'user');
	}
}