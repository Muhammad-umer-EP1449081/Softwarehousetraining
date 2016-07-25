<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logform extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}
	public function index()
	{
		$this->load->view('login');
	}
	
	public function submit()
	{
		$check = $this->users->ulogin();
		if($check->num_rows > 0)
		{
			$user = $check->result();
			$sessionData = array('logged_in' => TRUE ,'user' => $user );
			$this->session->set_userdata($sessionData);
			redirect('logform/admin','refresh');
		}
		else
		{
			echo "Wrog username or password";
			$this->load->view('login');		}
	}

	/*public function submit()
	{
		$check = $this->users->userlogin();
		if($check->num_rows > 0) 
		{
			$user = $check->result();
			$sessionData = array('is_logged_in' => TRUE, 'user' => $user);
			$this->session->set_userdata($sessionData);
			redirect('logform/admin','refresh');	
		}
		else
		{
			echo "Wrog username or password";
			$this->load->view('login');

		}
	}*/
	public function insertuser()
	{
		$this->load->view('insert');

	}
	public function saveuser()
	{
		$this->users->saveuser();
		echo "data save"; 
		$this->load->view('adminhome');		
	}
	public function showuser()
	{
		$users['getuser'] = $this->users->getuser();
		$this->load->view('show',$users);
	}
	public function edituser($id)
	{
		$user['setuser'] = $this->users->editusers($id);
		$this->load->view('edit',$user);
	}
	public function setuser($id)
	{
		$use = $this->users->setdata($id);
		echo "Data updated";
		$this->load->view('adminhome');		


	}
	public function deleteuser($id)
	{
		$this->users->deluser($id);
		echo "User deleted";
		$this->load->view('adminhome');		
	}
	function test()
	{
		print_r($this->session->all_userdata());
	}
	function admin()
	{
		$login_check = $this->session->userdata('logged_in');
		if($login_check)
		{
			$this->load->view('adminhome');
		}
		else
		{
			redirect('logform','refresh');
		}
		
	}/*
	function logout(){
		$this->session->sess_destroy();
			redirect('logform','refresh');
	}*/
}
