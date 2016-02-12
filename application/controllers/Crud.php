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

		$hasil = $this->crudmodel->add($data);
		if ($hasil) {
					redirect('crud');
					# code...
				}		

	}

	public function edit($id)
	{
	    $data = array('id' => $id);
	    $data['data_edit'] = $this->crudmodel->edit_m($data);
	    $this->load->view('templateadmin/editform', $data);
  	}

  public function update()
  {
  	$id 		= $this->input->post('id');
    $nama 		= $this->input->post('nama');
    $username  	= $this->input->post('username');
    $password  	= $this->input->post('password');
    $gender    	= $this->input->post('gender');
    $email     	= $this->input->post('email');
    //$role     	= $this->input->post('role');
    //$update_at 	= $this->input->post('now()');
   
	$data = array('username' => $username, 
				  'password' => $password,
              	  'gender'	=> $gender,
            	  'email'    => $email
		);
    
    $this->crudmodel->update_m($data, $id);
    redirect('crud');
  }

  public function delete_user($id)
  {
  	$this->crudmodel->delete($id);
  	$this->index();
  }

}