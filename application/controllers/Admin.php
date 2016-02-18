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
      $this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry</strong> Your not logged in</div>');
      redirect('login');
      }
	  $this->load->model('adminm');
      $this->load->library('form_validation');
    }

	public function index()
	{
		# code...
		$this->load->view('templateadmin/dashboard');
	}

	public function view()
	{
		$data['profile'] = $this->adminm->getId();

		$this->load->view('templateadmin/profile', $data);
	}

	public function edit()
	{
		$data['profile'] = $this->adminm->getId();

		$this->load->view('templateadmin/editprofile', $data);	
	}

	public function update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('bio', 'Bio', 'trim');
		$this->form_validation->set_rules('born_date', 'Born Date', 'trim');
		$this->form_validation->set_rules('gender', 'Gender', 'trim');
		$this->form_validation->set_rules('role', 'Role as', 'trim');

		$data['profile'] = $this->adminm->getId();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templateadmin/editprofile', $data);
			//$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');

			# code...
		}
		else
	  	{
	  		$id = $this->input->post('id');
	  		$data = array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'), 
			'password'=>$this->input->post('password'),
	        'email'    =>$this->input->post('email'),
	        'bio'      =>$this->input->post('bio'),
	        'born_date'   =>$this->input->post('born_date'),
	        'gender'	=>$this->input->post('gender'),
	        'role_id' 	=>$this->input->post('role'),
	        'edit_at'	=>$this->input->post('edit')
			);
	   		$this->adminm->updatemodel($id ,$data);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('admin/view');
	   	}
	}
}