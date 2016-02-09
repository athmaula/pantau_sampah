<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Mfile extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    function get_user_all()
    {
        $query=$this->db->query("SELECT role_id FROM user limit 1");
        return $query->result();
    }

    public function checkvalid()
    {
      $username = set_value('username');  
      $password = set_value('password');

      $hasil = $this->db->where('username',$username) //mengambil data dari database untuk di cocokan dengan inputan
                ->where('password',$password)
                ->limit(1)
                ->get('users');
      if ($hasil->num_rows()>0)
      {
        return $hasil->row();
      }
      else
      {
        return array();
      }
  }

  public function register()
  {
    $data=array(
        'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
        'gender'=>$this->input->post('gender')

      );
      $this->db->insert('users',$data);
      return true;
  }

} 
