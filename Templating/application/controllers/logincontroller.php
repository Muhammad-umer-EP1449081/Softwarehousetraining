<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

    public function __construct()
    {
    	parent:: __construct();
    	$this->load->model('datacontrol');

    }
    public function index()
    {
    	$this->load->view('login');
    }

	public function login()
	{

		$data = $this->datacontrol->loginconditions();
		if($data->num_rows()>0)
		{
			$user = $data->result();
			$logdata = array('userdata' => $user, 'is_login' => TRUE);
			$this->session->set_userdata($logdata);
			redirect('Formcontroller','refresh');
		}
		else
		{
			$data = array('error' => "Invalid Username And Password!");
			$this->load->view('login',$data);
		}



	}
	public function submit()
		{
			$this->datacontrol->insertaccount();
			// redirect('Logincontroller','refresh');

			echo "user submitted";
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Home','refresh');
		}
}
