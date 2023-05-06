<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Provinsi_model', 'provinsi');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->provinsi->tabel()->result(),
			'content'		=> 'provinsi/v_content',
			'ajax'	 		=> 'provinsi/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'provinsi/v_add',
			'ajax'	 		=> 'provinsi/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_provinsi'		=> $this->input->post('nama_provinsi')
			
			
		);

		$q = $this->provinsi->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('provinsi'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->provinsi->detail($id)->row_array(),
			'content'		=> 'provinsi/v_edit',
			'ajax'	 		=> 'provinsi/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_provinsi'			=> $this->input->post('id_provinsi'),
			'nama_provinsi'		    => $this->input->post('nama_provinsi')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->provinsi->update($data);
		redirect(base_url('provinsi'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_provinsi'	=> $id
		);
		
		$this->provinsi->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('provinsi'),'refresh');

	}



}
