<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller
 {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('idd')){
			return redirect('admin_controller');
		}
	}		
	function index()
	{
		$this->load->view('admin/adminn/login');
	}

	function login_next()
	{
		$this->form_validation->set_rules('Login','Login','required');	
		$this->form_validation->set_rules('Password','Password','required|min_length[6]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
				$this->load->view('admin/adminn/login');
			}
			else 
			{
				$login = $this->input->post('Login');
				$password = $this->input->post('Password');

				$this->load->model('login_model');
				$outcome = $this->login_model->admin_login($login,$password);

				if ($outcome) {
				$this->session->set_userdata('idd',$outcome);
				 	return redirect ('admin_controller');
				 }
				else {
				 	$this->session->set_flashdata('error_login','Invalid Username or Password Please Try Again.'); 
				 	return redirect ('login_controller');
				 }
			}

	}
}
	