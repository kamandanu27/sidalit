<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_siswa');
			$this->db->join('tbl_jurusan','tbl_siswa.id_jurusan = tbl_jurusan.id_jurusan','inner');
			$this->db->join('tbl_kelas','tbl_siswa.id_kelas = tbl_kelas.id_kelas','inner');
			$this->db->join('tbl_ekskul','tbl_siswa.id_ekskul = tbl_ekskul.id_ekskul','inner');
			$this->db->join('tbl_kecamatan','tbl_siswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_siswa');
			$this->db->join('tbl_jurusan','tbl_siswa.id_jurusan = tbl_jurusan.id_jurusan','inner');
			$this->db->join('tbl_kelas','tbl_siswa.id_kelas = tbl_kelas.id_kelas','inner');
			$this->db->join('tbl_ekskul','tbl_siswa.id_ekskul = tbl_ekskul.id_ekskul','inner');
			$this->db->join('tbl_kecamatan','tbl_siswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
			$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->join('tbl_jurusan','tbl_siswa.id_jurusan = tbl_jurusan.id_jurusan','inner');
		$this->db->join('tbl_kelas','tbl_siswa.id_kelas = tbl_kelas.id_kelas','inner');
		$this->db->join('tbl_ekskul','tbl_siswa.id_ekskul = tbl_ekskul.id_ekskul','inner');
		$this->db->join('tbl_kecamatan','tbl_siswa.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
		$this->db->join('tbl_kabupaten','tbl_kecamatan.id_kabupaten = tbl_kabupaten.id_kabupaten','inner');
		$this->db->join('tbl_provinsi','tbl_kabupaten.id_provinsi = tbl_provinsi.id_provinsi','inner');
		$this->db->where('id_siswa', $id_siswa);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_siswa', $data);
	}

	public function update($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('tbl_siswa', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->delete('tbl_siswa');
	}



}
