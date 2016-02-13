<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class crudmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function add($data)
	{
		return $this->db->insert('user', $data);
	}

	public function view() 
	{
		$query = $this->db->get('user');
		return $query->result();
	}

	public function edit_m($a)
	{
       	$d = $this->db->get_where('user', array('id' => $a))->row();
 		return $d;
    }
    public function update_m($id)
    {
	    $nama 		= $this->input->post('nama');
	    $username  	= $this->input->post('username');
	    $password  	= $this->input->post('password');
	    $email     	= $this->input->post('email');
	    $gender    	= $this->input->post('gender');
	    $role     	= $this->input->post('role');
	    $edit	 	= $this->input->post('now()');
	   
		$data = array(
			'nama'		=> $nama,
			'username' => $username, 
			'password' => $password,
	        'email'    => $email,
	        'gender'	=> $gender,
	        'role_id' 	=> $role,
	        'edit_at'	=> $edit

			);

      	$this->db->where('id', $id);
  		$this->db->update('user', $data);
      
    }

    public function delete($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('user');
    }

}