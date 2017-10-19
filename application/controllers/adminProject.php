<?php 
 class AdminProject extends CI_Controller {

	 public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("project_mod"); 
		$uploadconfig["upload_path"]="./images/product/";
		$uploadconfig["allowed_types"]="gif|jpg|png";
		$uploadconfig["max_size"]=10240;
		$this->load->library("upload",$uploadconfig);


	 }
	 
	 public function index() {
		$data["projects_data"]=$this->project_mod->getProjects(0);
		$this->load->view("admin/pages",$data); 
	 }
	 
	 public function addProject() {
		$data["content_page"]="add_form";
		$this->load->view("admin/page",$data); 
	 }

	 public function addProjectSubmit(){
	 	$title = $_POST["title"];
	 	$category = $_POST["category"];
	 	$author = $_POST["author"];
	 	$description = $_POST["description"];
	 	$link = $_POST["link"];
	 	$gambar = "";

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->file_name;
	 	}

	 	$sql = "INSERT INTO project_tbl(title,category,author,description,image,link) 
	 	        VALUES('" . $title . "','" . $category . "','" . $author . "','" . $description . "','" . $gambar . "','" . $link . "')" ;

	 	$query = $this->db->query($sql);

	 	redirect(base_url() . "AdminProject");
	 }
	 
	 public function editProject($id=0) {
	 	if($id>0){
			$data["content_page"]="edit_form";
			$data["data_product"]=$this->project_mod->getProjectDetail($id);
			$this->load->view("admin/page",$data); 
	 	}else {
			echo "DATA TIDAK ADA";
		}
	 }

	 public function deleteProject($id){
	 	$gambar=$this->project_mod->getGambarProject($id);
	 	$gambar="./images/product/" . $gambar;

	 	if(file_exists($gambar)){
	 		unlink($gambar);
	 	}

	 	$sql = "DELETE FROM project_tbl WHERE id=" . $id;
	 	$query = $this->db->query($sql);

	 	redirect(base_url() . "adminProject");

	 }

	 function delete_multiple(){
	 	$this->project_mod->remove_checked_project();
	 	redirect(base_url() . "adminProject");
	 }


	 public function editProjectSubmit(){
	 	$title = $_POST["title"];
	 	$category = $_POST["category"];
	 	$author = $_POST["author"];
	 	$description = $_POST["description"];
	 	$link = $_POST["link"];
	 	$gambar = $_POST["gambar_old"];
	 	$gambar_old = "./images/project/" . $_POST["gambar_old"];

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->file_name;
	 		if(file_exists($gambar_old)){
	 			unlink($gambar_old);
	 		}
	 	}

	 	$this->project_mod->editProject($name,$category,$author,$description,$gambar,$id);

	 	redirect(base_url() . "adminProject");
	 	
	 }
 }