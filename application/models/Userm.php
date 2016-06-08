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

	public function viewjenis()
	{
        $tanggal = date('d');
		$id_user = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('data_sampah_user');
		$this->db->join('jenis_sampah', 'jenis_sampah.id = data_sampah_user.jenis_sampah');
		$this->db->join('pembuangan_sampah', 'pembuangan_sampah.id = data_sampah_user.action');
		$this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->order_by('Date(tanggal) DESC', $tanggal);
		$query = $this->db->get();
		return $query->result();
	}

	public function editsampah($a)
	{
		$d = $this->db->get_where('data_sampah_user', array('id_data' => $a))->row();
 		return $d;
	}

	public function updatesampah($id_data, $data)
	{
      	$this->db->where('id_data', $id_data);
  		return $this->db->update('data_sampah_user', $data);
	}

	public function deletesampah($id)
    {
    	$this->db->where('id_data', $id);
    	return $this->db->delete('data_sampah_user');
    }


    public function view_data_landingpage()
    {
		$query = $this->db->get('data_tips');
		return $query->result();
    }

    public function get_data_total()
    {
    	$id_user = $this->session->userdata('id');
		$this->db->select_sum('input_sampah');
		$this->db->from('data_sampah_user');
		$this->db->where('data_sampah_user.user_id', $id_user);
		$query = $this->db->get();
		return $query->row();
    }

    public function get_data_max()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select_max('input_sampah');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_min()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select_min('input_sampah');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_input()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('input_sampah');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$query = $this->db->get();
    	return $query->result();
    }

    public function get_data_avg()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select_avg('input_sampah');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$query = $this->db->get();
    	return $query->row();
    }
    public function get_data_cnt1()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as plastic');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '1');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_cnt2()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as paper');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '2');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_cnt3()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as glass');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '3');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_cnt4()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as logam');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '4');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_cnt5()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as leftover');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '5');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_cnt6()
    {
    	$id_user = $this->session->userdata('id');
    	$this->db->select('COUNT(jenis_sampah) as other');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('jenis_sampah', '6');
    	$query = $this->db->get();
    	return $query->row();
    }

    public function getdata_monthly()
    {
    	$bln = date('m');
    	$id_user = $this->session->userdata('id');
    	$this->db->select_sum('input_sampah');
    	$this->db->from('data_sampah_user');
    	$this->db->where('data_sampah_user.user_id', $id_user);
    	$this->db->where('Month(tanggal)', $bln);
    	$query = $this->db->get();
    	return $query->row();
    }

    public function get_data_action1()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('action', '1');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_action2()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('action', '2');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_action3()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('action', '3');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_action4()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('action', '4');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind1()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '1');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind2()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '2');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind3()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '3');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind4()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '4');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind5()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '5');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_data_totkind6()
    {
        $id_user = $this->session->userdata('id');
        $this->db->select_sum('input_sampah');
        $this->db->from('data_sampah_user');
        $this->db->where('data_sampah_user.user_id', $id_user);
        $this->db->where('jenis_sampah', '6');
        $query = $this->db->get();
        return $query->row();
    }
}