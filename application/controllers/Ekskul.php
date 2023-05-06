<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ekskul_model', 'ekskul');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->ekskul->tabel()->result(),
			'content'		=> 'ekskul/v_content',
			'ajax'	 		=> 'ekskul/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'ekskul/v_add',
			'ajax'	 		=> 'ekskul/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_ekskul'		=> $this->input->post('nama_ekskul'),

		);

		$q = $this->ekskul->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('ekskul'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->ekskul->detail($id)->row_array(),
			'content'		=> 'ekskul/v_edit',
			'ajax'	 		=> 'ekskul/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_ekskul'			=> $this->input->post('id_ekskul'),
			'nama_ekskul'		    => $this->input->post('nama_ekskul')
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->ekskul->update($data);
		redirect(base_url('ekskul'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_ekskul'	=> $id
		);
		
		$this->ekskul->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('ekskul'),'refresh');

	}



}
