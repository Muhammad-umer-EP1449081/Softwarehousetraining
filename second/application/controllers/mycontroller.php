<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mycontroller extends CI_Controller {

	
public function __construct()
{
	parent::__construct();
	
	$this->load->model('model1');
}



public function index() 
{

$this->load->view('user');
}


public function submit()
{

$this->model1->fun();
redirect('Mycontroller/viewsingle','refresh');
}


public function viewsingle()
{

$data['new1']= $this->model1->getuser();

$this->load->view('viewfile',$data);

}

public function viewsingle2($ID)
{

$data['new2']= $this->model1->getuniq($ID);

$this->load->view('viewfile2',$data);

}






}