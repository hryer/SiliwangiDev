<?php 

class Blog extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Blog_mod');
	}

	public function index(){
		$data['posts'] = $this->Blog_mod->get_posts();
		$this->load->view('blog/index',$data);
	}

	public function detail($slug){
		$data['posts'] = $this->Blog_mod->get_post_by_slug($slug);
		$this->load->view('blog/detail',$data);
	}

} 

?>