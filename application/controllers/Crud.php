<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class crud extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('crudmodel');
	}

	public function index()
	{
		$data['get_data'] = $this->crudmodel->view();
		$this->load->view('templateadmin/tableuser', $data);
	}

	public function add()
	{
		
		$this->load->view('templateadmin/addnew');
	}

	public function insert()
	{
		$data['nama'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['email'] = $this->input->post('email');
		$data['gender'] = $this->input->post('gender');
		$data['role_id'] = $this->input->post('role');

		$hasil = $this->crudmodel->add($data);
		if ($hasil) {
					redirect('crud');
					# code...
				}		

	}

	public function edit()
	{
	    $kd = $this->uri->segment(3);
 		if ($kd == NULL) {
			redirect('crud');
		}
		$dt = $this->crudmodel->edit_m($kd);
		$data['nama'] = $dt->nama;
		$data['username'] = $dt->username;
		$data['password'] = $dt->password;
		$data['email'] = $dt->email;
		$data['gender'] = $dt->gender;
		$data['id'] = $kd;
		$this->load->view('templateadmin/editform', $data);
	}

  public function update()
  {
	  	if ($this->input->post('mit'))
	  	{
	   		$id = $this->input->post('id');
	   		$this->crudmodel->update_m($id);
	   		redirect('crud');
	   	}
	   	else
	   	{
	    	redirect('crud/edit/'.$id);
	    }
    }

  public function delete_user($id)
  {
  	$this->crudmodel->delete($id);
  	$this->index();
  }

}