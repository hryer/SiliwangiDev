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
			$this->load->view("admin/login.php");
		}

		public function loginSubmit(){

			$this->form_validation->set_rules('username', 'Username', 'required',array('required'=>'Please Fill Username'));
	 		$this->form_validation->set_rules('pass', 'Password', 'required',array('required'=>'Please Fill Password'));
	 		

	 		if($this->form_validation->run()==false){
	 			$this->load->view("fail");
	 		}else{
	 		// $_POST["username"]=="admin" && $_POST["pass"]=="123"
	 			if($this->Admin_mod->checkAdmin($_POST["username"],$_POST["pass"])>0){
	 				$this->session->set_userdata("username",$_POST["username"]);
	 				redirect(base_url() . "AdminMain");
	 			}else{
	 				$data["loginerror"]="Username & Password wrong";
	 				$this->load->view("admin/login",$data);
	 			}
	 		}
		}

		public function logOut(){
	 		$this->session->sess_destroy();
	 		$this->load->view("admin/login.php");
	 	}
	}
 ?>