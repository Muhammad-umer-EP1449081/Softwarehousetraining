<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datacontrol extends CI_Model {
	
	public function insert()
	{
		$this->db->insert('user',$_POST);
	}	
	public function showdata()
	{
		return $this->db->get('user')->result();
	}
	public function delete($ID)
	{
		$this->db->where('ID',$ID);
  	$this->db->delete('user');
	}
	public function getdata($ID)
	{
		$this->db->where('ID',$ID);
   return $this->db->get('user')->result();
	}
	public function update($ID)
	{
      $this->db->where('ID',$ID);
     $this->db->update('user',$_POST);
	}
	public function loginconditions()
	{
		$where = array('username' => $_POST['username'], 'password' => $_POST['password'] );
		$this->db->where($where);
		return $this->db->get('login');
	}
	public function insertaccount()
	{
		$this->db->insert('login',$_POST);
	}
	function get_user($id){
		$this->db->where('ID',$id);
		return $this->db->get('user')->result();
		
	}

}