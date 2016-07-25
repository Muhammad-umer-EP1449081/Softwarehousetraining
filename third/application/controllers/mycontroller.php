<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycontroller extends CI_Controller
{


	public function __construct()
{
	parent::__construct();
	
	$this->load->model('thirdmodel');
}


public function index()
{

 $this->load->view('thirdview');


}

public function submit()
{

$this->thirdmodel->fun();

redirect('Mycontroller/viewuser','refresh');
}


public function viewuser()
{

$user['information']= $this->thirdmodel->getuser();

$this->load->view('showuser',$user);

}

public function edit($Id)
{

$userid['information'] = $this->thirdmodel->edituser();

$this->load


}




}