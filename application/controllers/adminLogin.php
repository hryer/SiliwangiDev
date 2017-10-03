<?php 
	

	class AdminLogin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Admin_mod');
		}

		public function index(){
			$this->load->view("admin/LoginAdmin.php");
		}
	}
 ?>