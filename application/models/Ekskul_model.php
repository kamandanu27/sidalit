<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_ekskul');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_ekskul');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_ekskul)
	{
		$this->db->select('*');
		$this->db->from('tbl_ekskul');
		$this->db->where('id_ekskul', $id_ekskul);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_ekskul', $data);
	}

	public function update($data)
	{
		$this->db->where('id_ekskul', $data['id_ekskul']);
		$this->db->update('tbl_ekskul', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_ekskul', $data['id_ekskul']);
		$this->db->delete('tbl_ekskul');
	}



}
