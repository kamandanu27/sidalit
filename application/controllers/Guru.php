<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model', 'guru');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->guru->tabel()->result(),
			'content'		=> 'guru/v_content',
			'ajax'	 		=> 'guru/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'guru/v_add',
			'ajax'	 		=> 'guru/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_guru'		=> $this->input->post('nama_guru'),
			'alamat_guru'		=> $this->input->post('alamat_guru'),
			'no_hp_guru'			=> $this->input->post('no_hp_guru'),
			'email_guru'		=> $this->input->post('email_guru')
		);

		$q = $this->guru->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('guru'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->guru->detail($id)->row_array(),
			'content'		=> 'guru/v_edit',
			'ajax'	 		=> 'guru/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_guru'			=> $this->input->post('id_guru'),
			'nama_guru'		    => $this->input->post('nama_guru'),
			'alamat_guru'		=> $this->input->post('alamat_guru'),
			'no_hp_guru'		=> $this->input->post('no_hp_guru'),
			'email_guru'		=> $this->input->post('email_guru')
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->guru->update($data);
		redirect(base_url('guru'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_guru'	=> $id
		);
		
		$this->guru->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('guru'),'refresh');

	}



}
