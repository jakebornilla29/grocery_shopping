<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	function logout()
	{
	$this->session->unset_userdata('idd');
	return redirect('login_controller');
	}
}