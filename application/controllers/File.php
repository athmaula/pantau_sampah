<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class file extends CI_Controller {

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

 	 public function index()
 	 {
 	 	$data['tips_homepage'] = $this->Mfile->view_data_homepage();
 	 	$this->load->view('homepage', $data);
 	 }

		//fungsi untuk menampilkan tampilkan

	public function login()
	{
		$this->load->view('form-login');	//memanggil halaman login
	}

	public function register()
	{
		$this->load->view('form-register'); //memanggil halaman register
	}
}
