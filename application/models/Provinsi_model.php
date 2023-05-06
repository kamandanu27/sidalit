<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_provinsi');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_provinsi');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_provinsi)
	{
		$this->db->select('*');
		$this->db->from('tbl_provinsi');
		$this->db->where('id_provinsi', $id_provinsi);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_provinsi', $data);
	}

	public function update($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->update('tbl_provinsi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->delete('tbl_provinsi');
	}



}
