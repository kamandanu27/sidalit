<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_kecamatan');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_kecamatan');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_kecamatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_kecamatan');
		$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
		$this->db->where('id_kecamatan', $id_kecamatan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kecamatan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_kecamatan', $data['id_kecamatan']);
		$this->db->update('tbl_kecamatan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kecamatan', $data['id_kecamatan']);
		$this->db->delete('tbl_kecamatan');
	}



}
