<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct()
	 {
	 	parent::__construct();
	 	$this->load->helper(array('url','form'));
	 	$this->load->model('Mfile');
 	 }

	 //fungsi ini untuk memanggil role_id user
	 public function nama()
	 {
		 //$data['data_user']=$this->Mfile->Mnama();
		 //$username=$data['data_user'];
		 $data['Vnamauser'] = $this->Mfile->get_user_all();
		 //$this->load->view('Vnamauser', $data);
	 }

	 	//fungsi ini untuk menentukkan navbar sesuai role_id
		public function PantauSampah()
		{
     if ($this->nama()==1) {
		 	$this->load->view('navbaradmin');
     }
     else if ($this->nama()==2) {
         $this->load->view('navbaruser');
       }
       else {
        	$this->load->view('navbar');
					$this->load->view('halAwalNoLogin');
					//echo "<br/><br/><br/><br/><br/>",$this->nama();
       }

  	}

		//fungsi untuk menampilkan tampilkan
		public function Tampilan()
		{
			$this->load->view('halAwalNoLogin');
		}

		//tampilkan error Message
		//$this->output->enable_profiler(true);
	}
