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
      return $nama;//->result();
    }
  }

?>
