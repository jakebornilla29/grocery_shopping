<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller
 {
 function login_next()
	{
		$this->form_validation->set_rules('Login','Login','required');	
		$this->form_validation->set_rules('Password','Password','required|min_length[6]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
				$this->load->view('admin/adminn/login');
			}
     }
}
