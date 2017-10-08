<?php 
	
	class mess_mod extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getMessage($limit=0){
			if($limit>0){
				$sql = "SELECT * FROM message_tbl ORDER BY id DESC LIMIT " . $limit;
			}else{
				$sql = "SELECT * FROM message_tbl ORDER BY id DESC";
			}

			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function readMessage(){
			return $this->db->get('user');
		}

		function insert_message($data,$table){
        	$this->db->insert($table,$data);
    	}

	}
 ?>