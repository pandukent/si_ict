<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
			$this->load->model('server_model');
			$this->load->model('jenis_model');
			$this->load->model('merk_model');
			$this->load->model('user_model');
	}

	public function index()
	{	
		$server 	= $this->server_model->listing();
		$data 		= array ('title'	=> 'Halaman Dashboard Administator',
							'server'	=> $server,
							 'isi'		=> 'server/list'		
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail($id_server)
	{
		$server = $this->server_model->detail($id_server);
		$data = array (		'title'		=>'Edit Server : '.$server->nama_server,
							'server'	=> $server
		);
			$this->load->view('server/detail', $data, FALSE);
			//masukan database
	}

	public function delete($id_server){
			//proteksi delete
			
			$server = $this->server_model->detail($id_server);
			$data = array(	'id_server'	=> $server->id_server);
			$this->server_model->delete($data);
			$this->session->set_flashdata('sukses', 'data telah dihapus');
			redirect(base_url('server'),'refresh');
			}

	public function tambah ()
	{
		$jenis = $this->jenis_model->listing();
		$merk = $this->merk_model->listing();
		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('id_server','id_server','required',
				array('required'	=> '%s harus diisi'));
				
		$valid->set_rules('id_barang','id_barang','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('nama_server','Nama Server','required|is_unique[server.nama_server]',
				array('required'	=> '%s harus diisi',
					  'is_unique'	=> '%s <strong>'.$this->input->post('nama_server').'</strong> sudah digunakan, buat baru!'));
		
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
							'isi'		=>'server/tambah'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$tp = $i->post('tanggal_pasang');
				$tps = date("Y-m-d", strtotime($tp));
				$data = array (	'id_server'			=> $i->post('id_server'),
							 	'id_barang'			=> $i->post('id_barang'),
							 	'id_jenis'			=> $i->post('id_jenis'),
							 	'id_merk'			=> $i->post('id_merk'),
							 	'nama_server'		=> $i->post('nama_server'),
							 	'nickname'			=> $i->post('nickname'),
							 	'tanggal_pasang'	=> $tps
							 	
 						);
				$this->server_model->tambah($data);
				$this->server_model->tglhbs();
				$this->server_model->sisausia();
				$this->session->set_flashdata('sukses', 'data telah ditambah');
				redirect(base_url('server'),'refresh');
			}
	}

	//Edit
	public function edit ($id_server)
	{
		$server = $this->server_model->detail($id_server);
		$jenis = $this->jenis_model->listing();
		$merk = $this->merk_model->listing();

		//validasi
		$valid = $this->form_validation;


		$valid->set_rules('id_server','id_server','required',
				array('required'	=> '%s harus diisi'));
				
		$valid->set_rules('id_barang','id_barang','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('nama_server','Nama Server','required',
				array('required'	=> '%s harus diisi'));
		
		$valid->set_rules('id_jenis','id_jenis','required',
				array('required'	=> '%s harus diisi'));

		$valid->set_rules('id_merk','id_merk','required',
				array('required'	=> '%s harus diisi'));
		
		$valid->set_rules('tanggal_pasang','tanggal_pasang','required',
				array('required'	=> '%s harus diisi'));


		if ($valid->run() === FALSE){
			//end validasi
			

		$data = array (		'title'		=>'Edit Server : '.$server->nama_server,
							'server'	=> $server,
							'jenis'		=> $jenis,
							'merk'		=> $merk,
							'isi'		=>'server/edit'
		);
			$this->load->view('layout/wrapper', $data, FALSE);
			//masukan database
		}else{
				$i = $this->input;
				$tp = $i->post('tanggal_pasang');
				$tps = date("Y-m-d", strtotime($tp));
				$data = array (	'id_server'			=> $i->post('id_server'),
							 	'id_barang'			=> $i->post('id_barang'),
							 	'id_jenis'			=> $i->post('id_jenis'),
							 	'id_merk'			=> $i->post('id_merk'),
							 	'nama_server'		=> $i->post('nama_server'),
							 	'nickname'			=> $i->post('nickname'),
							 	'tanggal_pasang'	=> $tps
 						);
				$this->server_model->edit($data);
				$this->server_model->tglhbs();
				$this->server_model->sisausia();
				$this->session->set_flashdata('sukses', 'data telah diupdate');
				redirect(base_url('server'),'refresh');
			}
			//end masuk data base
	}

}