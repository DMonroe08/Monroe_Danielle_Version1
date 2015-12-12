<?php
class Signin extends CI_Controller{
	
	public function validate_credentials(){
		$this->load->view('signin_page');
		$this->load->library('form_validation');
		$query = $this->login_form->validate();
		
		if($query) 
		{
			$data = array(
				'username' =>$this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
		}
		
	} //Ends Validate Credentials Function
	
	public function check_if_username_exists($requested_username){ 
		$this->load->model('users');
		$username_available = $this->users->check_if_username_exists($requested_username);
		if ($username_available){
			return TRUE;
		}else{
			return FALSE;
		}
	} //Ends Check If Username Exists Function
	
	
	
} //Ends Signin Controller
?>