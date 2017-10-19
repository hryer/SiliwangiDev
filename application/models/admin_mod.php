<?php 
	

	class Admin_mod extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function checkAdmin($username,$password){
			$sql = "SELECT * FROM admin_tbl WHERE username='" . $username . "'and password='" . md5($password) . "'";
			$result = $this->db->query($sql);

			return ($result->num_rows());
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

		public function getAdmin($limit=0){
			if($limit>0){
				$sql="SELECT * FROM admin_tbl ORDER BY id DESC LIMIT " . $limit;
			}else{
			$sql = "SELECT * FROM admin_tbl ORDER BY id DESC";
			}
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		

	}
 ?>