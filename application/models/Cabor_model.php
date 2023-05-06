<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabor_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_cabor');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_cabor');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_cabor)
	{
		$this->db->select('*');
		$this->db->from('tbl_cabor');
		$this->db->where('id_cabor', $id_cabor);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_cabor', $data);
	}

	public function update($data)
	{
		$this->db->where('id_cabor', $data['id_cabor']);
		$this->db->update('tbl_cabor', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_cabor', $data['id_cabor']);
		$this->db->delete('tbl_cabor');
	}



}
