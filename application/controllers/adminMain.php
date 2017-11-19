<?php 
 class AdminMain extends CI_Controller {

	 public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("Admin_mod"); 
		$uploadconfig["upload_path"]="./images/product/";
		$uploadconfig["allowed_types"]="gif|jpg|png";
		$uploadconfig["max_size"]=10240;
		$this->load->library("upload",$uploadconfig);


	 }
	 
	 public function index() {
		$data["projects_data"]=$this->Admin_mod->getProjects(5);
		$data["admins_data"]=$this->Admin_mod->getAdmin(5);
		$this->load->view("admin/index",$data); 
	 }

	 public function message(){
	 	$this->load->model("Mess_mod");
	 	$data["messages_data"]=$this->Mess_mod->getMessage(10);
		$this->load->view("admin/messages",$data); 
	 }

	  function delete_mul(){
	 	error_reporting(0);

	 	$chk = $_POST['chk'];
	 	$chkcount = count($chk);

	 	if(!isset($chk)){
	 		?>
	 		<script>
	 			alert('At least one checkbox Must be Selected !!!');
	 			windows.location.href = '<?php echo base_url(); ?>AdminMain/message';
	 		</script>
	 		<?php 
	 	}else{
	 		


	 		for($i=0;$i<$chkcount;$i++){

	 			$del = $chk[$i];

	 			$sql = "DELETE FROM message_tbl WHERE id=".$del;
	 			$this->db->query($sql);
	 		}
	 	}

	 	if($sql)
		{
			?>
			<script>
			alert('<?php echo $chkcount; ?> Records Was Deleted !!!');
			window.location.href='<?php echo base_url(); ?>AdminProject';
			</script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('Error while Deleting , TRY AGAIN');
			window.location.href='<?php echo base_url(); ?>AdminProject';
			</script>
			<?php
		}
	 }

	


 }