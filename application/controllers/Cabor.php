<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cabor_model', 'cabor');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->cabor->tabel()->result(),
			'content'		=> 'cabor/v_content',
			'ajax'	 		=> 'cabor/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'cabor/v_add',
			'ajax'	 		=> 'cabor/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_cabor'		=> $this->input->post('nama_cabor'),
			
		
		);

		$q = $this->cabor->insert($data);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('cabor'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->cabor->detail($id)->row_array(),
			'content'		=> 'cabor/v_edit',
			'ajax'	 		=> 'cabor/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_cabor'			=> $this->input->post('id_cabor'),
			'nama_cabor'	    => $this->input->post('nama_cabor'),
			
			
		);
			
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->cabor->update($data);
		redirect(base_url('cabor'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_cabor'	=> $id
		);
		
		$this->cabor->delete($data);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('cabor'),'refresh');

	}



}
