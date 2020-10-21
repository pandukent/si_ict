<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sembar_model extends CI_Model {
//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//listing jenis
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('sembar_fix');
		$this->db->order_by('id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertToRequest($id)
  	{

  	$where = array('id_barang' => $id);
    $query = $this->db->get_where('sembar_fix',$where);
    $result = $query->row();

    $data = array(
      'id_barang' => $result->id_barang,
      'jenis_barang' => $result->jenis_barang,
      'merk_barang' => $result->merk_barang,
	  'nama_barang' => $result->nama_barang,
	  'validasi' => "belum"
     );
     $this->db->insert('request',$data);
  }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */