<?php
class Nav extends CI_Controller{
	
	public function home_page(){
		$this->load->helper('url');
		
		//$this->load->view('includes/header');
		//$this->load->view('views/home');
		//$this->load->view('includes/footer');
	} //Ends Home_page Function
	
	public function signin_page(){
		$this->load->helper('url');
		$this->load->view('includes/header');
		echo base_url('views/signin_page');
		$this->load->view('signin_page');
		$this->load->view('includes/footer');
		$this->load->helper('form');
		echo "header on nav";
		
	} //Ends Signin_page Function
	
	public function register_page(){
		$this->load->helper('url');
		$this->load->view('includes/header');
		echo base_url('views/register_page');
		$this->load->view('includes/footer');
		$this->load->view('register_page');
		
	} //Ends Register_page Function
	
	public function order_page(){
		$this->load->helper('url');
		$this->load->view('includes/header');
		$this->load->view('order_page');
		$this->load->view('includes/footer');
	} //Ends orders_page Function
	
	public function login_page(){
		$this->load->helper('url');
		$this->load->view('includes/header');
		$this->load->view('login_form');
		$this->load->view('includes/footer');
	}
} //Ends Nav class
?>
