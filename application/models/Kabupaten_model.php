<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_kabupaten');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_kabupaten');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_kabupaten)
	{
		$this->db->select('*');
		$this->db->from('tbl_kabupaten');
		$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
		$this->db->where('id_kabupaten', $id_kabupaten);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kabupaten', $data);
	}

	public function update($data)
	{
		$this->db->where('id_kabupaten', $data['id_kabupaten']);
		$this->db->update('tbl_kabupaten', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kabupaten', $data['id_kabupaten']);
		$this->db->delete('tbl_kabupaten');
	}



}
