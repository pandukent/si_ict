<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {
//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function detail($id_request)
	{
		$this->db->select('*');
		$this->db->from('request');
		$this->db->where('id_request',$id_request);
		$this->db->order_by('id_request');
		$query = $this->db->get();
		return $query->row();
	}

	//listing jenis
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('request');
		$this->db->order_by('id_request');
		$query = $this->db->get();
		return $query->result();
	}

    public function delete($data){
		$this->db->where('id_request',$data['id_request']);
		$this->db->delete('request',$data);
	}
    
    public function validasi($data){
		$this->db->where('id_request',$data['id_request']);
		$this->db->update('request',$data);
	}
}

/* End of file Request_model.php */
/* Location: ./application/models/Request_model.php */