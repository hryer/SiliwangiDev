<?php 
	

	class Admin_mod extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function checkAdmin($username,$password){
			$sql = "SELECT * FROM admin_tbl WHERE username='" . $username . "'and password='" . $password;
			$result = $this->db->query($sql);

			return ($result->num_rows());
		}

	}
 ?>