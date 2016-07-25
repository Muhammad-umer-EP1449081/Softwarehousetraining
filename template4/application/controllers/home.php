<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		if($this->session->userdata('islogin')==TRUE)
		{
			redirect('tem','refresh');
		}

	else
	{
		$this->load->view('login');
	}

	}

public function index1()
	{
		
		$this->load->view('login');
	
	}

}

