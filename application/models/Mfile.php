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
                ->get('user');
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
    $nama      = set_value('nama');
    $username  = set_value('username');
    $password  = set_value('password');
    $email     = set_value('email');
    $gender    = set_value('gender');
    $role      = set_value('', '2');
    $create_at = set_value('create_at');
    
    $data['nama']       = $nama;
    $data['username']   = $username;
    $data['password']   = $password;
    $data['email']      = $email;
    $data['gender']     = $gender;
    $data['role_id']    = $role;
    $data['create_at']  = $create_at;

    $this->db->insert('user', $data);
    
  }

} 
