<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('request_model');
			$this->load->model('user_model');
	}


	public function index()
	{	
		$request 	= $this->request_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'request'		=> $request,
							 'isi'		=> 'request/listp'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	
	public function indexu()
	{	
		$request 	= $this->request_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'request'		=> $request,
							 'isi'		=> 'request/listu'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
    }
    
    public function delete($id_request){
        //proteksi delete
        
        $request = $this->request_model->detail($id_request);
        $data = array(	'id_request'	=> $request->id_request);
        $this->request_model->delete($data);
        $this->session->set_flashdata('sukses', 'data telah dihapus');
        redirect(base_url('request'),'refresh');
    }


    public function validasiy($id_request)
	{
		$request = $this->request_model->detail($id_request);

		
				$i = $this->input;
				$data = array (	'id_request'		=> $id_request,
								'validasi'		=> "yes"
 						);
				$this->request_model->validasi($data);
				redirect(base_url('request'),'refresh');
	
			//end masuk data base
    }
    
    public function validasin($id_request)
	{
		$request = $this->request_model->detail($id_request);

		
				$i = $this->input;
				$data = array (	'id_request'		=> $id_request,
								'validasi'		=> "no"
 						);
				$this->request_model->validasi($data);
				redirect(base_url('request'),'refresh');
	
			//end masuk data base
	}
	

}