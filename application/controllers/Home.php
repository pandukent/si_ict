<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('user_model');
	}

	public function index()
	{	

		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
						);
		$this->load->view('home/cover', $data, FALSE);
	}
	public function indexx()
	{	

		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
						);
		$this->load->view('home/list', $data, FALSE);
	}
	

	}
?>