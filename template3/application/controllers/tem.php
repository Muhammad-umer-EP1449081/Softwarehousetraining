<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tem extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('templatemodel');
	}


	public function index()
	{
		$this->load->view('general');
	}
	function form()
	{
		$this->load->view('general');
	}

	function insertuser()
	{
		$this->load->view('insert');
	}

function insertuserdata()
	{
		$this->templatemodel->insertdata();
	}


	function viewusers()
	{
		$data['new'] = $this->templatemodel->viewdata();
		$this->load->view('viewtable',$data);
	}

	function updateuser()
	{
		$this->load->view('update');
	}

     function deleteuser()
	{
		$this->load->view('delete');
	}

}
