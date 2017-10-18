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
		$data["content_page"]="home_list"; 
		$data["products_data"]=$this->ProductsModel->getProducts(0);
		$this->load->view("admin/admin_index",$data); 
	 }
	 
	 public function addProduct() {
		$data["content_page"]="add_form";
		$this->load->view("admin/admin_index",$data); 
	 }

	 public function addProductSubmit(){
	 	$product_name = $_POST["product_name"];
	 	$price = $_POST["price"];
	 	$stock = $_POST["stock"];
	 	$product_description = $_POST["product_description"];
	 	$brand = $_POST["brand"];
	 	$gambar = "";

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->file_name;
	 	}

	 	$sql = "INSERT INTO product_tbl(product_name,price,stock,product_description,brand,gambar) 
	 	        VALUES('" . $product_name . "'," . $price . "," . $stock . ",'" . $product_description . "','" . $brand . "','" . $gambar . "')" ;

	 	$query = $this->db->query($sql);

	 	redirect(base_url() . "AdminMain");
	 }
	 
	 public function editProduct($product_id=0) {
	 	if($product_id>0){
			$data["content_page"]="edit_form";
			$data["data_product"]=$this->ProductsModel->getProductDetail($product_id);
			$this->load->view("admin/admin_index",$data); 
	 	}else {
			echo "DATA TIDAK ADA";
		}
	 }

	 public function deleteProduct($product_id){
	 	$gambar=$this->ProductsModel->getGambarProduct($product_id);
	 	$gambar="./images/product/" . $gambar;

	 	if(file_exists($gambar)){
	 		unlink($gambar);
	 	}

	 	$sql = "DELETE FROM product_tbl WHERE product_id=" . $product_id;
	 	$query = $this->db->query($sql);

	 	redirect(base_url() . "AdminMain");

	 }

	 public function editProductSubmit(){
	 	$product_id = $_POST["product_id"];
	 	$product_name = $_POST["product_name"];
	 	$price = $_POST["price"];
	 	$stock = $_POST["stock"];
	 	$product_description = $_POST["product_description"];
	 	$brand = $_POST["brand"];
	 	$gambar = $_POST["gambar_old"];
	 	$gambar_old = "./images/product/" . $_POST["gambar_old"];

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->file_name;
	 		if(file_exists($gambar_old)){
	 			unlink($gambar_old);
	 		}
	 	}

	 	$sql = "UPDATE product_tbl SET product_name='" . $product_name . "',
	 									price=" . $price . ", 
	 									stock=" . $stock . ", 
	 									brand='" . $brand . "',
	 									gambar='" . $gambar . "' 
	 									WHERE product_id =" . $product_id ;



	 	  $query = $this->db->query($sql);

	 	  redirect(base_url() . "AdminMain");
	 }
 }