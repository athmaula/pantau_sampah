<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class user extends CI_Controller
{
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('role') != '2'){ //cek apakah user memiliki 'role_id' == 2
      $this->session->set_flashdata('error','Sorry Youre not Logged in!');
      redirect('login');
      }
    }

	public function index()
	{
		# code...
		$this->load->view('templateuser/dashboard');
	}
}