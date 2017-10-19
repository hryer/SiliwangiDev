<?php 
	
	class Projects_mod extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
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
	}

 ?>