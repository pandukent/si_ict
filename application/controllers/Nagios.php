<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nagios extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('user_model');
	}

	public function index()
	{	
		$data 		= array ('title'	=> 'Halaman Dashboard Administator'/* ,
							 'isi'		=>  'nagios/list' */);
		$this->load->view('nagios/lists', $data, FALSE);
	}

	

	}
?>