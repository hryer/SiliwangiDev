<?php 

class Blog_mod extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_blog(){
		return $this->db->get('blog_tbl')->result();
	}

} 

?>