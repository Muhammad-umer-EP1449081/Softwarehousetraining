<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C1 extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}
	public function eg()
	{
		$this->load->view('form1');
	}
}
