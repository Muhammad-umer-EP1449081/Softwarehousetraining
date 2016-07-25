<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templatemodel extends CI_Model 
{


public function insertdata()
{

$this->db->insert('table',$_POST);

}

public function viewdata()
{

return $this->db->get('table')->result();


}

public function viewdatasingle($Id)
{

$this->db->where('Id','$Id');
return $this->db->get('table')->result();

}

public function updatedata()
{

	$this->db->where('Id','$Id');
return $this->db->update('table',$_POST);
}

public function deletedata()
{

	$this->db->where('Id','$Id');
return $this->db->delete('table');
}

}
