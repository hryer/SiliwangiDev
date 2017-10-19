<?php 
 class AdminMain extends CI_Controller {

	 public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("admin_mod"); 
		$uploadconfig["upload_path"]="./images/product/";
		$uploadconfig["allowed_types"]="gif|jpg|png";
		$uploadconfig["max_size"]=10240;
		$this->load->library("upload",$uploadconfig);


	 }
	 
	 public function index() {
		$data["projects_data"]=$this->admin_mod->getProjects(5);
		$data["admins_data"]=$this->admin_mod->getAdmin(5);
		$this->load->view("admin/index",$data); 
	 }

	 public function message(){
	 	$this->load->model("mess_mod");
	 	$data["messages_data"]=$this->mess_mod->getMessage(10);
		$this->load->view("admin/messages",$data); 
	 }
 }