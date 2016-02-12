<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Crudmodel extends CI_Model
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

	public function edit_m($data)
	{
      $this->db->where($data);
      $edit=$this->db->get('user');
      return $edit->result();
    }
    public function update_m($data, $id)
    {
      $this->db->where('id',$id);
      $this->db->update('user', $data);
      return true;
    }

    public function delete($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('user');
    }

}