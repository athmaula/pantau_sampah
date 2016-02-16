<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('mfile');
			$this->load->library('form_validation'); //memanggil form validation
		}

		public function index()
		{
			//menset rules apa saja yang di pakai untuk form
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == FALSE){
				$this->load->view('form-login');	
			}
			else
			{	
				$valid_user = $this->mfile->checkvalid();
				if($valid_user==FALSE)
				{	//error message bila username / password salah
					$this->session->set_flashdata('error','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error</strong> Wrong Username / Password !!</div>');
					redirect('login');
				}
				else
				{
					//jika username dan password cocok akan menyimpan beberapa data user ke session
					$this->session->set_userdata('username',$valid_user->username);
					$this->session->set_userdata('role',$valid_user->role_id);
					$this->session->set_userdata('id',$valid_user->id);

					//cek apakah 'role_id' user berisi 1 atau 2
					switch ($valid_user->role_id) {
						case '1': //redirect ke admin
							redirect('admin');	
							break;
						case '2': //user
							redirect('user');	
							break;		
						default: break;
					}
				}
			}		
		}

		public function logout()
		{
			//fungsi logout dengan menghapus session
			$this->session->sess_destroy();
			redirect('login');
		}

		public function register()
		{
			//menset rules apa saja yang di pakai untuk form
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_alpha_space_only');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required');
						

			if ($this->form_validation->run() == FALSE) {
				//membuat alert message registrasi gagal
				$this->session->set_flashdata('error', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry </strong>The Registered Failed, please try again !</div>');
				$this->load->view('form-register');
			}
			else
			{
				$this->mfile->register();
				//membuat alert message sukses register
				$this->session->set_flashdata('success', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully Registered.</strong></div>');
				redirect('file/register');
			}

		}

		function alpha_space_only($str)
    	{
    		//fungsi ini untuk mengecek field 'nama' pada form register hanya berisi alfabet dan spasi yang diletakan di form validation
        	if (!preg_match("/^[a-zA-Z ]+$/",$str))
       		{
            	$this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            	return FALSE;
        	}
        	else
        	{
            	return TRUE;
        	}
	   	}
	}