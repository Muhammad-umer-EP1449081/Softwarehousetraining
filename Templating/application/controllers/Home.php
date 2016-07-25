<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

public function index()
{
	if($this->session->userdata('is_login')== TRUE)
	{
		redirect('formcontroller','refresh');
	}
	else
	{}
	$this->load->view('login');
}
	
	
}