<?php 
	
	class Project_mod extends CI_Model{
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function remove_checked_project(){
			$action = $this->input->post('action');
			if($action == "delete"){
				$delete = $this->input->post('msg');
				for($i=0;$i<count($delete);$i++){
					$this->db->where('id',$delete[$i]);
					$this->db->delete('projects_tbl');
				}
			}
		}

		public function insert_project($title,$category,$author,$description,$image,$link){
			$sql = "INSERT INTO projects_tbl(title,category,author,description,image,link) 
	 	        VALUES('" . $title . "','" . $category . "','" . $author . "','" . $description . "','" . $image . "','" . $link . "')" ;

	 		$query = $this->db->query($sql);
		}

		public function getProjects($limit=0){
			if($limit>0){
				$sql="SELECT * FROM projects_tbl ORDER BY id DESC LIMIT " . $limit;
			}else{
			$sql = "SELECT * FROM projects_tbl ORDER BY id DESC";
			}
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function getProjectDetail($id){
			$sql = "SELECT * FROM projects_tbl WHERE id = " . $id;
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function getTotalProjects(){
			$sql = "SELECT * FROM projects_tbl";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function getProjectsPage($start=0,$limit=0){
			if($limit>0){
				$sql = "SELECT * FROM projects_tbl ORDER BY id DESC LIMIT " . $start . "," . $limit;
				$query = $this->db->query($sql);
				return $query->result_array();
			}else{
				return NULL;
			}
		}

		public function getGambarProject($id=0){
			$result="";
			if($id>0){
				$sql="SELECT image FROM projects_tbl WHERE id=" . $id;
				$query = $this->db->query($sql);
				$rows=$query->row();
				$result=$rows->gambar;
			}
			return $result;
		}

		public function editProject($name,$category,$author,$description,$gambar,$id){
			$sql = "UPDATE project_tbl SET name='" . $name . "',
	 									category='" . $category . "', 
	 									author='" . $author . "', 
	 									description='" . $description . "', 
	 									image='" . $gambar . "' 
	 									WHERE id =" . $id ;



	 	  $query = $this->db->query($sql);

	 	  redirect(base_url() . "AdminProject");

		}
	}

 ?>