<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class userc extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}

	public function index()
	{
		$this->load->view('templateuser/profile');
	}
}