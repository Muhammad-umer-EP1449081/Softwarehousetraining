<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tem extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function test()
	{
		print_r($this->session->all_userdata());
	}
}
