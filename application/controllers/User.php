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
      $this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry</strong> Your not logged in</div>');
      redirect('login');
      }
    }

	public function index()
	{
		# code...
		$this->load->view('templateuser/dashboard');
	}
}