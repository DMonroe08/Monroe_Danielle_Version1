<?php
class Dashboard extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		
		//load the default database class for use
		$this->load->database();
		
		//load inventory model
		$this->load->model("inventory_m");
		
	} //Ends contruct function
	
	public function index(){
		$this->listing();
	} //Ends index function
	
	public function listing(){
		
		
	} //Ends listing function
	
} //Ends Dashboard controller
	
?>