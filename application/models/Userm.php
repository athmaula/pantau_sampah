<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class userm extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function getId()
	{	
		$user_id =  $this->session->userdata('id');
		$this->db->where('id', $user_id);
		$query = $this->db->get('user'); //get all data from user_profiles table that belong to the respective user
		return $query->row(); //return the data
	}

	public function updatemodel($id ,$data)
	{
		$this->db->where('id', $id);
  		$this->db->update('user', $data);
	}

	public function insertsampah($data)
	{
		return $this->db->insert('data_sampah_user', $data);
	}

	public function view()
	{
		$id_user = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('data_sampah_user');
		$this->db->join('user', 'user.id = data_sampah_user.user_id', 'left');
		$this->db->where('data_sampah_user.user_id', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	public function editsampah($a)
	{
		$d = $this->db->get_where('data_sampah_user', array('id_data' => $a))->row();
 		return $d;
	}

	public function updatesampah($id)
	{
	    $inputsampah 		= $this->input->post('inputsampah');
	    $satuan  			= $this->input->post('satuan');
	    $action  			= $this->input->post('action');
	    $jenis_sampah    	= $this->input->post('jenis_sampah');
	    $tanggal    		= $this->input->post('tanggal');
	    $edit	 			= $this->input->post('now()');
	   
		$data = array(
			'input_sampah'		=> $inputsampah,
			'satuan' 			=> $satuan, 
			'action' 			=> $action,
	        'jenis_sampah'    	=> $jenis_sampah,
	        'tanggal'		  	=> $tanggal,
	        'edit_at'		  	=> $edit

			);

      	$this->db->where('id_data', $id);
  		$this->db->update('data_sampah_user', $data);
	}

	public function deletesampah($id)
    {
    	$this->db->where('id_data', $id);
    	return $this->db->delete('data_sampah_user');
    }
}