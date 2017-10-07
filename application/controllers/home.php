<?php 

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
		
	public function index(){
		$this->load->view('index');
	}

	public function submitForm(){
		$this->form_validation->set_rules('fname', 'Fullname', 'required',array('required'=>'Please Fill Your name'));
	 	$this->form_validation->set_rules('femail', 'Email', 'required',array('required'=>'Please Fill Email'));
	 	$this->form_validation->set_rules('fphone', 'Phone', 'required',array('required'=>'Please Fill Phone'));
	 	$this->form_validation->set_rules('fmessage', 'Message', 'required',array('required'=>'Please Fill Message'));

	 	if($this->form_validation->run()==false){
	 		$this->load->view("fail");
	 	}else{
	 		$this->load->view("thanks");
	 	}

	}
	

}
 ?>
