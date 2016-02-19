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
		$this->load->model('userm');
		$this->load->library('form_validation');
    }

	public function index()
	{
		# code...
		$data['getdata'] = $this->userm->view();
		$this->load->view('templateuser/dashboard', $data);
	}

	public function view()
	{
		$data['profile'] = $this->userm->getId();

		$this->load->view('templateuser/profile', $data);
	}

	public function edit()
	{
		$data['profile'] = $this->userm->getId();

		$this->load->view('templateuser/editprofile', $data);	
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

		$data['profile'] = $this->userm->getId();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templateuser/editprofile', $data);
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
	   		$this->userm->updatemodel($id ,$data);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('user/view');
	   	}
	}

	public function inputview()
	{
		$this->load->view('templateuser/inputform');
	}

	public function inputsampah()
	{
		// $id['profile'] = $this->userm->getId();

		//$id = $this->input->post('id_user');
		//$data['id_user'] = $this->userm->getId();
		$id_user = $this->session->userdata('id');

		//$data['id_data'] = $this->input->post('id');
		$data['user_id'] = $id_user;
		$data['satuan'] = $this->input->post('satuan');
		$data['input_sampah'] = $this->input->post('beratsampah');
		$data['action'] = $this->input->post('action');
		$data['jenis_sampah'] = $this->input->post('jenis');
		$data['tanggal'] = $this->input->post('tanggal');
		
		$hasil = $this->userm->insertsampah($data);
		if ($hasil) 
		{
			$this->session->set_flashdata('success_insert','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Add Data,</div>');
			redirect('user');
			# code...
		}
		else
		{
			$this->session->set_flashdata('error', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
			redirect('inputview');
		}		
	}

	public function editinputsampah()
	{
		$kd = $this->uri->segment(3);
 		if ($kd == NULL) {
			redirect('user');
		}
		$dt = $this->userm->editsampah($kd);
		$data['input_sampah'] = $dt->input_sampah;
		$data['satuan'] 	  = $dt->satuan;
		$data['action'] 	  = $dt->action;
		$data['jenis_sampah'] = $dt->jenis_sampah;
		$data['tanggal'] 	  = $dt->tanggal;
		$data['id_data'] = $kd;
		$this->load->view('templateuser/editinputsampah', $data);
	}

	public function updateinputsampah()
	{
		if ($this->input->post('submit'))
	  	{
	   		$id = $this->input->post('id_data');
	   		$this->userm->updatesampah($id);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('user');
	   	}
	   	else
	   	{
	    	redirect('user/editinputsampah/'.$id);
	    }
	}

	public function deleteinputsampah($id)
	  {
	  	$this->userm->deletesampah($id);
		$this->session->set_flashdata('success_delete','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Delete Data,</div>');
	  	$this->index();
	  }
}