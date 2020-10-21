<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server_model extends CI_Model {
//load database
 public $table = 'server';
    public $id = 'id_server';
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->database();
		   
	}

	//listing barang
	public function listing()
	{
		$this->db->select('server.*,jenis.jenis_barang,merk.merk_barang');
		$this->db->from('server');
		//join
		$this->db->join('jenis','jenis.id_jenis	= server.id_jenis');
		$this->db->join('merk','merk.id_merk	= server.id_merk');
		// $this->db->join('stok', 'stok.barcode = barang.barcode');
		// $this->db->join('lokasi','lokasi.id_lokasi	= stok.lokasi');
		//end join
		$this->db->order_by('id_server','ASC');
		$query = $this->db->get();
		return $query->result();
		/* $this->db->select('barang_lainnya.*,barang_fix.*,jenis.jenis_barang,merk.merk_barang');
		$this->db->from('barang_lainnya');
		//join
		$this->db->join('barang_fix','barang_lainnya.id_barang	= barang_fix.id_barang');
		$this->db->join('jenis','jenis.id_jenis	= barang_lainnya.id_jenis');
		$this->db->join('merk','merk.id_merk	= barang_lainnya.id_merk');
		//end join
		$this->db->order_by('id_barang','ASC');
		$query = $this->db->get();
		return $query->result(); */
	}



	//detail barang
	public function detail($id_server)
	{
		$this->db->select('*');
		$this->db->from('server');
		$this->db->where('id_server',$id_server);
		$this->db->order_by('id_server');
		$query = $this->db->get();
		return $query->row();
	}

	//tambah/insert data
	public function tambah($data){
		$this->db->insert('server',$data);
	}
	public function tglhbs()
  	{
  	$this->db->query('UPDATE server
	  SET tanggal_habis=DATE_ADD(tanggal_pasang, INTERVAL 4 year)');
	}
	public function sisausia()
	{
	$this->db->query('UPDATE server
	SET sisa_usia_bulan=dateDIFF(tanggal_habis,CURDATE())/30');
  }

	//edit/update data
	public function edit($data){
		$this->db->where('id_server',$data['id_server']);
		$this->db->update('server',$data);
	}

	//hapus/delete data
	public function delete($data){
		$this->db->where('id_server',$data['id_server']);
		$this->db->delete('server',$data);
	}
	}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */