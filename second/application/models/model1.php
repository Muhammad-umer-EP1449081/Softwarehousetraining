<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model1 extends CI_Model
 {


public function fun()
{
	
	$this->db->insert('table',$_POST);
}

public function getuser()
	{

		return $this->db->get('table')->result();
	}

public function getuniq($ID)
	{

		$this->db->where('ID',$ID);
        return $this->db->get('table')->result();
	}




}

