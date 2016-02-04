<?php
  class Mfile extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    function Mnama()
    {
      $data['role_id']=$this->db->get('user');
      //return $username->result();
    }

    function get_user_all()
    {
        $query=$this->db->query("SELECT role_id FROM user limit 1");
        return $query->result();
    }
  }

?>
