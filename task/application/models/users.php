<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model
{
	public function ulogin()
	{
		$Email= $_POST['Email'];
		$Password= $_POST['Password'];

		$array="Email='$Email' AND Password='$Password'";
		
		$this->db->where($array);
		return $this->db->get('table');
	}
	/*public function userlogin()
	{
		$array = array('iuser' => $_POST['name'] ,'ipass' => $_POST['pass']);
		$this->db->where($array);
		return $this->db->get('users');
	}*/
	public function saveuser()
	{
		$this->db->insert('users',$_POST);
	}
	public function getuser()
	{
		return	$this->db->get('users')->result();
	}
	public function editusers($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('users')->result();
	}
	public function setdata($id)
	{
		$this->db->where('id',$id);
	 $this->db->update('users',$_POST);	
	}
	public function deluser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
	}

}