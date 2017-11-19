<?php 

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mess_mod');
		$this->load->model('Project_mod');
	}
		
	public function index(){
		$data["project_data"]=$this->project_mod->getProjects(6);
		$this->load->view('index',$data);
	}

	public function submitForm(){
		$this->form_validation->set_rules('fname', 'Fullname', 'required',array('required'=>'Please Fill Your name'));
	 	$this->form_validation->set_rules('femail', 'Email', 'required',array('required'=>'Please Fill Email'));
	 	$this->form_validation->set_rules('fphone', 'Phone', 'required',array('required'=>'Please Fill Phone'));
	 	$this->form_validation->set_rules('fmessage', 'Message', 'required',array('required'=>'Please Fill Message'));

	 	if($this->form_validation->run()==false){
	 		$this->load->view("fail");
	 	}else{

	 		$name = $this->input->post('fname');
            $email = $this->input->post('femail');
            $phone = $this->input->post('fphone');
            $message = $this->input->post('fmessage');

            $data = array(
                        'name' => $name,
                    	'email' => $email,
                    	'phone' => $phone,
                    	'description' => $message  
                    );

            $this->Mess_mod->insert_message($data,'message_tbl');

	 		$this->load->view("thanks");
	 	}

	}
	

}
 ?>
