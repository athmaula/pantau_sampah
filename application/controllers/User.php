<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class user extends CI_Controller
{
	public function __construct(){
	parent::__construct();
	if($this->session->userdata('role') != '2')
	    { //cek apakah user memiliki 'role_id' == 2
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
		$data['getdata'] = $this->userm->viewjenis();
		$data['data'] = $this->userm->get_data_total();
		$data['data_max'] = $this->userm->get_data_max();
		$data['data_min'] = $this->userm->get_data_min();

		$this->load->view('templateuser/dashboard', $data);
	}

	public function landingpage()
	{
		$data['getdata_max'] = $this->userm->get_data_max();
		$data['getdata_min'] = $this->userm->get_data_min();
		$data['getdata_input'] = $this->userm->get_data_input();
		$data['getdata_avg'] = $this->userm->get_data_avg();
		$data['getdata_cnt1'] = $this->userm->get_data_cnt1();
		$data['getdata_cnt2'] = $this->userm->get_data_cnt2();
		$data['getdata_cnt3'] = $this->userm->get_data_cnt3();
		$data['getdata_cnt4'] = $this->userm->get_data_cnt4();
		$data['getdata_cnt5'] = $this->userm->get_data_cnt5();
		$data['getdata_cnt6'] = $this->userm->get_data_cnt6();
		$data['get'] = $this->userm->view_data_landingpage();
		$this->load->view('templateuser/landingPageUser', $data);
	}

	/*public function chart()
	{
		$data['getdata_max'] = $this->userm->get_data_max();
		$data['getdata_min'] = $this->userm->get_data_min();
		//$data['get'] = $this->userm->view_data_landingpage();
		$this->load->view('templateuser/chart', $data);
	}*/

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
	        'born_date' =>$this->input->post('born_date'),
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

		$id_user = $this->session->userdata('id');
		$data['user_id'] = $id_user;
		$data['input_sampah'] = $this->input->post('beratsampah');
		$data['action'] = $this->input->post('action');
		$data['jenis_sampah'] = $this->input->post('jenis');
		$data['tanggal'] = $this->input->post('tanggal');
		//$data['input_total'] = $this->input->post('beratsampah');

		$hasil = $this->userm->insertsampah($data);
		if ($hasil) 
		{	
			$this->session->set_flashdata('success_insert','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Add Data,</div>');
			redirect('user');
			# code...
		}
		else
		{
			$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong>,</div>');
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
	   		$id_data = $this->input->post('id_data');
	   		$this->userm->updatesampah($id_data);
			$this->session->set_flashdata('success_edit','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Edit Data,</div>');
	   		redirect('user');
	   	}
	   	else
	   	{
	    	redirect('user/editinputsampah/'.$id_data);
	    }
	}

	public function deleteinputsampah($id)
	  {
	  	$this->userm->deletesampah($id);
		$this->session->set_flashdata('success_delete','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success</strong> Delete Data,</div>');
	  	$this->index();
	  }
/*
	public function do_upload()
    {
	    if($this->input->post('upload'))
		{
			$config['upload_path'] = 'asset/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']    = '2048';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('templateuser/editprofile', $error);
			}
			else
			{
				$data=$this->upload->data();
				$file=array(
				'file'=>$data['raw_name'],
				'ext'=>$data['file_ext'],
			);
			$this->userm->upload_image($file);
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('templateuser/profile', $data);
			}
		}
		else
		{
			redirect('user/view');
		}
	}*/
}