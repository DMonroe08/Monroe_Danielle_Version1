<?php
class Main extends CI_Controller{
	
	public function index(){
		$this->load->helper('url');
		echo "-->" . base_url();
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
		} //Ends index function
		
	public function signin_page(){
		$this->load->view('includes/header');
		$this->load->view('signin');
		$this->load->view('includes/footer');
		} //Ends signin_page function
		
		public function header(){
			
		} //Ends Header Function
	
} //Ends Main Class
?>



<?php
	
?>