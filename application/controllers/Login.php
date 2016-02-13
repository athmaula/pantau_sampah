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
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<div class="error">','</div>');

			if($this->form_validation->run() == FALSE){
				$this->load->view('form-login');	
			}
			else
			{
				$valid_user = $this->mfile->checkvalid();
				if($valid_user==FALSE)
				{
					$this->session->set_flashdata('error','Salah Username / Password!');
					redirect('login');
					//$this->load->view('login/login');	
				}
				else
				{
					//jika username dan password cocok
					$this->session->set_userdata('username',$valid_user->username);
					$this->session->set_userdata('role',$valid_user->role_id);

					switch ($valid_user->role_id) {
						case '1': //redirect ke halaman admin
							$this->load->view('templateadmin/dashboard');	
							break;
						case '2': //user
							$this->load->view('dashboard_member');	
							break;		
						default: break;
					}
				}
			}		
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url());
		}

		public function register()
		{
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]');
			$this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required');
			

			if ($this->form_validation->run() == FALSE) {
				# code...
				$this->load->view('form-register');
			}
			else
			{
				$this->mfile->register();
				redirect('file/register');
			}

		}
}