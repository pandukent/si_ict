<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('merk_model');
			$this->load->model('user_model');
	}

	public function index()
	{	
		$merk 	= $this->merk_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'merk'		=> $merk,
							 'isi'		=> 'merk/list'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}	
	public function delete($id_merk){
			//proteksi delete
			
			$merk = $this->merk_model->detail($id_merk);
			$data = array(	'id_merk'	=> $merk->id_merk);
			$this->merk_model->delete($data);
			$this->session->set_flashdata('sukses', 'data telah dihapus');
			redirect(base_url('merk'),'refresh');
			}

	public function tambah ()
	{
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('id_merk','id_merk','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('merk_barang','merk_barang','required',
				array('required'	=> '%s harus diisi'));


		if ($valid->run() === FALSE){
			//end validasi
			

		$data = array (		'title'		=>'Tambah Jenis',
							'isi'		=>'merk/tambah'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$data = array (	'id_merk'			=> $i->post('id_merk'),
							 	'merk_barang'		=> $i->post('merk_barang'),
							 	
 						);
				$this->merk_model->tambah($data);
				$this->session->set_flashdata('sukses', 'data telah ditambah');
				redirect(base_url('merk'),'refresh');
			}
	}

	//Edit
	public function edit ($id_merk)
	{
		$merk = $this->merk_model->detail($id_merk);

		//validasi
		$valid = $this->form_validation;


		$valid->set_rules('id_merk','id_merk','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('merk_barang','merk_barang','required',
				array('required'	=> '%s harus diisi'));


		if ($valid->run() === FALSE){
			//end validasi
			

		$data = array (		'title'		=>'Edit Jenis : '.$merk->merk_barang,
							'merk'		=> $merk,
							'isi'		=>'merk/edit'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$data = array (	'id_merk'		=> $id_merk,
								'merk_barang'		=> $i->post('merk_barang'),
 						);
				$this->merk_model->edit($data);
				$this->session->set_flashdata('sukses', 'data telah diupdate');
				redirect(base_url('merk'),'refresh');
			}
			//end masuk data base
	}

}