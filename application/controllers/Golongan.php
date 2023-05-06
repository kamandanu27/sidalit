<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Golongan_model', 'golongan');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->golongan->tabel()->result(),
			'content'		=> 'golongan/v_content',
			'ajax'	 		=> 'golongan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'golongan/v_add',
			'ajax'	 		=> 'golongan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_golongan'		=> $this->input->post('nama_golongan'),
			
		
		);

		$q = $this->golongan->insert($data);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('golongan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->golongan->detail($id)->row_array(),
			'content'		=> 'golongan/v_edit',
			'ajax'	 		=> 'golongan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_golongan'			=> $this->input->post('id_golongan'),
			'nama_golongan'	    => $this->input->post('nama_golongan'),
			
			
		);
			
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->golongan->update($data);
		redirect(base_url('golongan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_golongan'	=> $id
		);
		
		$this->golongan->delete($data);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('golongan'),'refresh');

	}



}
