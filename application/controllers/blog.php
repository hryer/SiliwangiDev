<?php 

class Blog extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_mod');
	}

	public function index(){
		$data['posts'] = $this->blog_mod->get_blog();
		$this->load->view('blog/index',$data);
	}

} 

?>