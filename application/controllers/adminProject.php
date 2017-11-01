<?php 
 class AdminProject extends CI_Controller {

	 public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("project_mod"); 
		$uploadconfig["upload_path"]="./images/projects/";
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
	 	
			// echo $gambar;
	 	// 	exit(0);

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->data('file_name'); 
	 		// echo $gambar;
	 		// exit(0);
	 		$this->project_mod->insert_project($title,$category,$author,$description,$gambar,$link);
	 		
	 	}else{
	 		$this->project_mod->insert_project($title,$category,$author,$description,$gambar,$link);
	 	}

	 	

	 	redirect(base_url() . "AdminProject");
	 }
	 
	 public function editProject() {
	 	if($_POST['chk']>0){
	 		$chk = $_POST['chk'];
			$chkcount = count($chk);

			$data["content_page"]="edit_form";
			//echo $chkcount;
			for($i = 0 ; $i < $chkcount ; $i++){
				$id = $chk[$i];			
				$data["data_project"][]=$this->project_mod->getProjectDetail($id);
				
				
			}
			// echo count($data["data_project"]);
			// print_r($data["data_project"]);
			// 	exit();
			
			$this->load->view("admin/page",$data); 
	 	}else {
			print_r($_POST['chk']) ;
		}
	 }

	 public function editProjectSingle($id=0){
	 	if($id>0){
	 		$data["content_page"]="edit_form_single";
	 		$data["data_project"]=$this->project_mod->getProjectDetail($id);
	 		$this->load->view("admin/page",$data);
	 	}else{
	 		echo "DATA TIDAK ADA";
	 	}
	 }

	 public function editProjectSingleSubmit(){
	 	$id = $_POST['id'];
	 	$title = $_POST["title"];
	 	$category = $_POST["category"];
	 	$author = $_POST["author"];
	 	$description = $_POST["description"];
	 	$link = $_POST["link"];
	 	$gambar = $_POST["gambar_old"];
	 	$gambar_old = "./images/projects/" . $_POST["gambar_old"];

	 	if($this->upload->do_upload("gambar")){
	 		$gambar=$this->upload->file_name;
	 		if(file_exists($gambar_old)){
	 			unlink($gambar_old);
	 		}
	 	}

	 	$sql ="UPDATE projects_tbl SET title='" . $title . "',
	 									category='" . $category . "', 
	 									author='" . $author . "', 
	 									description='" . $description . "', 
	 									image='" . $gambar . "', 
	 									link='" . $link . "'  
	 									 WHERE id =" . $id ;



	 	$query = $this->db->query($sql);

	 	

	 	redirect(base_url() . "adminProject");
	 }

	

	 function delete_mul(){
	 	error_reporting(0);

	 	$chk = $_POST['chk'];
	 	$chkcount = count($chk);

	 	if(!isset($chk)){
	 		?>
	 		<script>
	 			alert('At least one checkbox Must be Selected !!!');
	 			windows.location.href = '<?php echo base_url(); ?>adminProject';
	 		</script>
	 		<?php 
	 	}else{
	 		


	 		for($i=0;$i<$chkcount;$i++){

	 			$del = $chk[$i];

	 			$gambar=$this->project_mod->getGambarProject($del);
	 			$gambar="./images/projects/" . $gambar;
	 			

	 			if(file_exists($gambar)){
	 				unlink($gambar);
	 			}

	 			$sql = "DELETE FROM projects_tbl WHERE id=".$del;
	 			$this->db->query($sql);
	 		}
	 	}

	 	if($sql)
		{
			?>
			<script>
			alert('<?php echo $chkcount; ?> Records Was Deleted !!!');
			window.location.href='<?php echo base_url(); ?>adminProject';
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Error while Deleting , TRY AGAIN');
			window.location.href='<?php echo base_url(); ?>adminProject';
			</script>
			<?php
		}
	 }


	 public function editProjectSubmit(){

		$id = $_POST['id'];
	 	$title = $_POST["title"];
	 	$category = $_POST["category"];
	 	$author = $_POST["author"];
	 	$description = $_POST["description"];
	 	$link = $_POST["link"];
	 	$gambar = $_POST["gambar_old"];
		$chkcount = count($id);

		
		echo "<br> id";
		print_r($id);
		echo "<br> title ";
		print_r($title);
		echo " <br> cate";
		print_r($category);
		echo "<br>aut ";
		print_r($author);
		echo "<br> desc ";
		print_r($description);
		echo "<br>link ";
		print_r($link);
		echo "<br>gambar ";
		print_r($gambar);
		echo "<br>chk ";
		print_r($chkcount);
		
	 	for($i=0; $i<$chkcount; $i++){

	 		if($this->upload->do_upload("gambar[]")){
	 			echo "if";
	 			$gambar[$i]=$this->upload->data('file_name'); 
	 			$this->project_mod->editProject($title[$i],$category[$i],$author[$i],$description[$i],$gambar[$i],$link[$i],$id[$i]);
	 	// 		echo $title[$i] . $category[$i] . $author[$i] . $description[$i] . $gambar[$i] . $link . $id[$i] ;
			// exit();
	 		}else{
	 			echo "else";
	 			$gambar[$i] = "Ampas.png";
	 			$this->project_mod->editProject($title[$i],$category[$i],$author[$i],$description[$i],$gambar[$i],$link[$i],$id[$i]);
	 		}

	 	}		

	 	echo "<br> id";
		print_r($id);
		echo "<br> title ";
		print_r($title);
		echo " <br> cate";
		print_r($category);
		echo "<br>aut ";
		print_r($author);
		echo "<br> desc ";
		print_r($description);
		echo "<br>link ";
		print_r($link);
		echo "<br>gambar ";
		print_r($gambar);
		echo "<br>chk ";
		print_r($chkcount);
		
		exit();
			
		
	 	redirect(base_url() . "adminProject");
	 	
	 }

	 


 }