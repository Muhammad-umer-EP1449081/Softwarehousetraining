<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model 
{


public function checkin()
{
 $where = array('Email' => $_POST['Email'] , 'Password' => $_POST['Password']);
 $this->db->where($where);
 return $this->db->get('table');


}

}