<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thirdmodel extends CI_Model 
{

public function fun ()
{


$this->db->insert('table',$_POST);

}


public function getuser()
{


return $this->db->get('table')->result();

}

public function edituser($Id)
{

	$this->db->where('Id',$Id);
	return $this->db->get('table')->result();
}




}