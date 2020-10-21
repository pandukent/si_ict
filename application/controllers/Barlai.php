<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barlai extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('barlai_model');
			$this->load->model('jenis_model');
			$this->load->model('merk_model');
			$this->load->model('user_model');
	}

	public function index()
	{	
		$barlai 	= $this->barlai_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'barlai'	=> $barlai,
							 'isi'		=> 'barlai/list'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}	
	public function delete($id_barang){
			//proteksi delete
			
			$barlai = $this->barlai_model->detail($id_barang);
			$data = array(	'id_barang'	=> $barlai->id_barang);
			$this->barlai_model->delete($data);
			$this->session->set_flashdata('sukses', 'data telah dihapus');
			redirect(base_url('barlai'),'refresh');
			}

	public function tambah ()
	{
		$jenis = $this->jenis_model->listing();
		$merk = $this->merk_model->listing();
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('id_barang','id_barang','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('nama_barang','Nama Barang','required|is_unique[barang_lainnya.nama_barang]',
				array('required'	=> '%s harus diisi',
					  'is_unique'	=> '%s <strong>'.$this->input->post('nama_barang').'</strong> sudah digunakan, buat baru!'));
		
		$valid->set_rules('id_jenis','id_jenis','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('id_merk','id_merk','required',
				array('required'	=> '%s harus diisi'));
		
		$valid->set_rules('tanggal_pasang','tanggal_pasang','required',
				array('required'	=> '%s harus diisi'));


		if ($valid->run() === FALSE){
			//end validasi
			

		$data = array (		'title'		=>'Tambah Barang Lain',
							'jenis'		=> $jenis,
							'merk'		=> $merk,
							'isi'		=>'barlai/tambah'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$tp = $i->post('tanggal_pasang');
				$tps = date("Y-m-d", strtotime($tp));
				$data = array (	'id_barang'			=> $i->post('id_barang'),
							 	'id_jenis'			=> $i->post('id_jenis'),
							 	'id_merk'			=> $i->post('id_merk'),
							 	'nama_barang'		=> $i->post('nama_barang'),
							 	'tanggal_pasang'	=> $tps
							 	
 						);
				$this->barlai_model->tambah($data);
				$this->barlai_model->tglhbs();
				$this->barlai_model->sisausia();
				$this->session->set_flashdata('sukses', 'data telah ditambah');
				redirect(base_url('barlai'),'refresh');
			}
	}

	//Edit
	public function edit ($id_barang)
	{
		$barlai = $this->barlai_model->detail($id_barang);
		$jenis = $this->jenis_model->listing();
		$merk = $this->merk_model->listing();

		//validasi
		$valid = $this->form_validation;


		$valid->set_rules('id_barang','id_barang','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('nama_barang','Nama Barang','required',
				array('required'	=> '%s harus diisi'));
		
		$valid->set_rules('id_jenis','id_jenis','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('id_merk','id_merk','required',
				array('required'	=> '%s harus diisi'));
		
		$valid->set_rules('tanggal_pasang','tanggal_pasang','required',
				array('required'	=> '%s harus diisi'));


		if ($valid->run() === FALSE){
			//end validasi
			

		$data = array (		'title'		=>'Edit barlai : '.$barlai->nama_barang,
							'barlai'	=> $barlai,
							'jenis'		=> $jenis,
							'merk'		=> $merk,
							'isi'		=>'barlai/edit'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$tp = $i->post('tanggal_pasang');
				$tps = date("Y-m-d", strtotime($tp));
				$data = array (	'id_barang'			=> $i->post('id_barang'),
							 	'id_jenis'			=> $i->post('id_jenis'),
							 	'id_merk'			=> $i->post('id_merk'),
							 	'nama_barang'		=> $i->post('nama_barang'),
							 	'tanggal_pasang'	=> $tps
 						);
				$this->barlai_model->edit($data);
				$this->barlai_model->tglhbs();
				$this->barlai_model->sisausia();
				$this->session->set_flashdata('sukses', 'data telah diupdate');
				redirect(base_url('barlai'),'refresh');
			}
			//end masuk data base
	}

}