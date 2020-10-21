<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('sembar_model');	
			$this->load->model('user_model');
	}

	public function index()
	{	

		$sembar 	= $this->sembar_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'sembar'		=> $sembar,
							 'isi'		=> 'dashboard/list'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function insertRequest($id)
	{
		$this->sembar_model->insertToRequest($id);
		redirect(base_url('dashboard'));
	}

	}
?>