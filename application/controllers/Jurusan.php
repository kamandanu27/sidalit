<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jurusan_model', 'jurusan');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->jurusan->tabel()->result(),
			'content'		=> 'jurusan/v_content',
			'ajax'	 		=> 'jurusan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'jurusan/v_add',
			'ajax'	 		=> 'jurusan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_jurusan'		=> $this->input->post('nama_jurusan')
			
			
		);

		$q = $this->jurusan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('jurusan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->jurusan->detail($id)->row_array(),
			'content'		=> 'jurusan/v_edit',
			'ajax'	 		=> 'jurusan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_jurusan'			=> $this->input->post('id_jurusan'),
			'nama_jurusan'		    => $this->input->post('nama_jurusan')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->jurusan->update($data);
		redirect(base_url('jurusan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_jurusan'	=> $id
		);
		
		$this->jurusan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('jurusan'),'refresh');

	}



}
