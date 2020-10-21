<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class merk_model extends CI_Model {
//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//listing merk
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('merk');
		$this->db->order_by('id_merk');
		$query = $this->db->get();
		return $query->result();
	}

	//detail merk
	public function detail($id_merk)
	{
		$this->db->select('*');
		$this->db->from('merk');
		$this->db->where('id_merk',$id_merk);
		$this->db->order_by('id_merk');
		$query = $this->db->get();
		return $query->row();
	}


	//tambah/insert data
	public function tambah($data){
		$this->db->insert('merk',$data);
	}

	//edit/update data
	public function edit($data){
		$this->db->where('id_merk',$data['id_merk']);
		$this->db->update('merk',$data);
	}

	//hapus/delete data
	public function delete($data){
		$this->db->where('id_merk',$data['id_merk']);
		$this->db->delete('merk',$data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */