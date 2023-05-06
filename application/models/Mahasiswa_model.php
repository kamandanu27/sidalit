<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_mahasiswa');
			$this->db->join('tbl_kecamatan','tbl_mahasiswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_mahasiswa');
			$this->db->join('tbl_kecamatan','tbl_mahasiswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_mahasiswa)
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		$this->db->join('tbl_kecamatan','tbl_mahasiswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
		$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
		$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
		$this->db->where('id_mahasiswa', $id_mahasiswa);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_mahasiswa', $data);
	}

	public function update($data)
	{
		$this->db->where('id_mahasiswa', $data['id_mahasiswa']);
		$this->db->update('tbl_mahasiswa', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_mahasiswa', $data['id_mahasiswa']);
		$this->db->delete('tbl_mahasiswa');
	}



}
