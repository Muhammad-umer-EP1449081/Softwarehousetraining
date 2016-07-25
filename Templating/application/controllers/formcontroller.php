<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formcontroller extends CI_Controller {

    public function __construct()
    {
    	parent:: __construct();
    	$this->load->model('datacontrol');
    	$is_login = $this->session->userdata('is_login');
    	if(!$is_login)
    	{
    		redirect('logincontroller','refresh');
    	}
    }
	public function index()
	{
		$this->getdata();
		// $this->load->view('form');

	}
	public function submit()
	{
		$this->datacontrol->insert();
		redirect('Formcontroller/getdata','refresh');
	}
	public function getdata()
	{
		$data['list'] = $this->datacontrol->showdata();
		$this->load->view('form',$data);
	}
	public function deluser($ID)
	{
		$this->datacontrol->delete($ID);
		redirect('Formcontroller/getdata','refresh');
	}
	public function updater($ID)
	{
		$data['lists'] = $this->datacontrol->getdata($ID);
		$this->load->view('updateform',$data);
	}
	public function submitupdated($ID)
	{
     		$this->datacontrol->update($ID);
		  
		redirect('Formcontroller/getdata','refresh');
	}
	public function test()
	{
		print_r($this->session->all_userdata());
	}
	function getUser($id){
		 $user = $this->datacontrol->get_user($id);
		  $data = array('firstName' => $user[0]->firstname, 'lastName' => $user[0]->lastname, 'id' => $user[0]->ID );
		  echo json_encode($data);
	}
}