<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$a = $this->session->userdata('idd');
		if(!$a){
			return redirect('login_controller');
		}
	}

	function index()
	{	
		$this->load->view('admin/index');
	}

	function logout()
	{
	$this->session->unset_userdata('idd');
	return redirect('login_controller');
	}
}