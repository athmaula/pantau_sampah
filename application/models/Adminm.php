<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class adminm extends CI_Model
{
	
	function __construct()
	{
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

	public function insert_tips($data)
	{
		return $this->db->insert('data_tips', $data);
	}

	public function view_data()
	{
		$user_id =  $this->session->userdata('id');
		$this->db->where('id_user', $user_id);
		$query = $this->db->get('data_tips');
		return $query->result();
	}

	public function edit_tips_landingpage($a)
	{
		$d = $this->db->get_where('data_tips', array('id' => $a))->row();
 		return $d;
	}

	public function update_tips_landingpage($id)
	{
		$title 		= $this->input->post('title');
	    $content	= $this->input->post('content');
	    $edit		= $this->input->post('now()');
	   
		$data = array(
			'title'				=> $title,
			'content' 			=> $content,
	        'edit_at'		  	=> $edit

			);

      	$this->db->where('id', $id);
  		$this->db->update('data_tips', $data);
	}

	public function delete_tips_landingpage($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('data_tips');
	}

	public function insert_tips_homepage($data)
	{
		return $this->db->insert('data_tips_homepage', $data);
	}

	public function view_data_tips_homepage()
	{
		$user_id =  $this->session->userdata('id');
		$this->db->where('id_user', $user_id);
		$query = $this->db->get('data_tips_homepage');
		return $query->result();
	}

	public function edit_tips_homepage($a)
	{
		$d = $this->db->get_where('data_tips_homepage', array('id' => $a))->row();
 		return $d;
	}

	public function update_tips_homepage($id)
	{
		$title 		= $this->input->post('title');
	    $content	= $this->input->post('content');
	    $edit		= $this->input->post('now()');
	   
		$data = array(
			'title'				=> $title,
			'content' 			=> $content,
	        'edit_at'		  	=> $edit
			);

      	$this->db->where('id', $id);
  		$this->db->update('data_tips_homepage', $data);
	}

	public function delete_tips_homepage($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('data_tips_homepage');
	}

	public function getdata_max()
    {
    	$this->db->select_max('input_sampah');
    	$this->db->from('data_sampah_user');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_min()
    {
    	$this->db->select_min('input_sampah');
    	$this->db->from('data_sampah_user');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_avg()
    {
    	$this->db->select_avg('input_sampah');
    	$this->db->from('data_sampah_user');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind1()
    {
    	$this->db->select('COUNT(jenis_sampah) as plastic');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '1');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind2()
    {
    	$this->db->select('COUNT(jenis_sampah) as paper');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '2');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind3()
    {
    	$this->db->select('COUNT(jenis_sampah) as glass');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '3');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind4()
    {
    	$this->db->select('COUNT(jenis_sampah) as logam');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '4');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind5()
    {
    	$this->db->select('COUNT(jenis_sampah) as sisa');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '5');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_kind6()
    {
    	$this->db->select('COUNT(jenis_sampah) as other');
    	$this->db->from('data_sampah_user');
    	$this->db->where('jenis_sampah', '6');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_act1()
    {
    	$this->db->select('COUNT(action) as burnt');
    	$this->db->from('data_sampah_user');
    	$this->db->where('action', '1');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_act2()
    {
    	$this->db->select('COUNT(action) as landfill');
    	$this->db->from('data_sampah_user');
    	$this->db->where('action', '2');
    	$query = $this->db->get();
    	return $query->row();
    }
    public function getdata_act3()
    {
    	$this->db->select('COUNT(action) as discarded');
    	$this->db->from('data_sampah_user');
    	$this->db->where('action', '3');
    	$query = $this->db->get();
    	return $query->row();
    }
    public function getdata_act4()
    {
    	$this->db->select('COUNT(action) as other');
    	$this->db->from('data_sampah_user');
    	$this->db->where('action', '4');
    	$query = $this->db->get();
    	return $query->row();
    }
}