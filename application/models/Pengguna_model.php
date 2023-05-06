<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pengguna');
			$this->db->order_by('tbl_pengguna.id_pengguna', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pengguna');
			$this->db->order_by('tbl_pengguna.id_pengguna', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}


	public function jumlah_pengguna()
    {
        $this->db->select('count(id_pengguna) as j_pengguna');
		$this->db->from('tbl_pengguna');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id_pengguna)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		$this->db->where('id_pengguna', $id_pengguna);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		$this->db->where('nip_pengguna', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_pengguna');
		$this->db->where(array(
			'username_pengguna' => $username,
			'password_pengguna' => $password
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pengguna', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pengguna', $data['id_pengguna']);
		$this->db->update('tbl_pengguna', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pengguna', $data['id_pengguna']);
		$this->db->delete('tbl_pengguna');
	}



}
