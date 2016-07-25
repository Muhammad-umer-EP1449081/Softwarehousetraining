<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logincontroller extends CI_Controller 
{

public function __construct()
{
	parent:: __construct();
	$this->load->model('mymodel');
}
	public function index()
	{
		$this->load->view('login');
	}


	public function login()
	{
		$data = $this->mymodel->checkin();
		if($data->num_rows()>0)
		{
                   $user= $data->result();
                   $logdata = array('userdata'=> $user,'islogin'=> TRUE );
                   $this->session->set_userdata($logdata);
                    redirect('tem','refresh');
		}
		else
		{
			echo "invalid username and password";
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		redirect('logincontroller','refresh');
	}



}