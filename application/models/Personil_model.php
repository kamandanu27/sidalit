<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personil_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_personil');
			$this->db->join('tbl_golongan','tbl_personil.id_golongan = tbl_golongan.id_golongan','inner');
			$this->db->join('tbl_jabatan','tbl_personil.id_jabatan = tbl_jabatan.id_jabatan','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_personil');
			$this->db->join('tbl_golongan','tbl_personil.id_golongan = tbl_golongan.id_golongan','inner');
			$this->db->join('tbl_jabatan','tbl_personil.id_jabatan = tbl_jabatan.id_jabatan','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_personil)
	{
		$this->db->select('*');
		$this->db->from('tbl_personil');
		$this->db->join('tbl_golongan','tbl_personil.id_golongan = tbl_golongan.id_golongan','inner');
		$this->db->join('tbl_jabatan','tbl_personil.id_jabatan = tbl_jabatan.id_jabatan','inner');
		$this->db->where('id_personil', $id_personil);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_personil', $data);
	}

	public function update($data)
	{
		$this->db->where('id_personil', $data['id_personil']);
		$this->db->update('tbl_personil', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_personil', $data['id_personil']);
		$this->db->delete('tbl_personil');
	}



}
