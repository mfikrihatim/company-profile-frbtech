<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("admin"));
		}
	}

	function index(){
		$this->load->view('user/index');
	}
}