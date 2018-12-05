<?php 

class Blog_mod extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_posts(){
		return $this->db->get('blog_tbl')->result();
	}

	public function get_post_by_slug($slug){
		return $this->db->get_where('blog_tbl',array('slug' => $slug))->row();
	}

} 

?>