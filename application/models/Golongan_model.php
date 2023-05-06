<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_golongan');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_golongan');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_golongan)
	{
		$this->db->select('*');
		$this->db->from('tbl_golongan');
		$this->db->where('id_golongan', $id_golongan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_golongan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_golongan', $data['id_golongan']);
		$this->db->update('tbl_golongan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_golongan', $data['id_golongan']);
		$this->db->delete('tbl_golongan');
	}



}
