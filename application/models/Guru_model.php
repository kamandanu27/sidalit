<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_guru');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_guru');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_guru)
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_guru', $data);
	}

	public function update($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->update('tbl_guru', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->delete('tbl_guru');
	}



}
