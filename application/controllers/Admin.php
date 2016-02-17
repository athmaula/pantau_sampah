<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class admin extends CI_Controller
{
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('role') != '1'){ //cek apakah user yg masuk memiliki 'role_id' == 1
      $this->session->set_flashdata('error','Sorry Youre not Logged in!');
      redirect('login');
      }
    }

	public function index()
	{
		# code...
		$this->load->view('templateadmin/dashboard');
	}
}