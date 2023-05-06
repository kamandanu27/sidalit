<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduan_model', 'pengaduan');
		$this->load->model('Pelanggan_model', 'pelanggan');
		$this->load->model('Type_model', 'type');
		$this->load->model('Kategori_model', 'kategori');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->pengaduan->tabel()->result(),
			'content'		=> 'pengaduan/v_content',
			'ajax'	 		=> 'pengaduan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'pengaduan/v_add',
			'pelanggan' 	=> $this->pelanggan->tabel()->result(),
			'type' 			=> $this->type->tabel()->result(),
			'kategori' 		=> $this->kategori->tabel()->result(),
			'ajax'	 		=> 'pengaduan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(	
			'tgl_pengaduan'				=> $this->input->post('tgl_pengaduan'),
			'id_pelanggan'		  		=> $this->input->post('id_pelanggan'),
			'notiket_pengaduan'			=> $this->input->post('notiket_pengaduan'),
			'id_kategori'				=> $this->input->post('id_kategori'),
			'status_pengaduan'			=> $this->input->post('status_pengaduan')
			
			
		
		);

		$q = $this->pengaduan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('pengaduan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->pengaduan->detail($id)->row_array(),
			'pelanggan' 	=> $this->pelanggan->tabel()->result(),
			'type' 			=> $this->type->tabel()->result(),
			'kategori' 		=> $this->kategori->tabel()->result(),
			'content'		=> 'pengaduan/v_edit',
			'ajax'	 		=> 'pengaduan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_pengaduan'			=> $this->input->post('id_pengaduan'),
			'tgl_pengaduan'			=> $this->input->post('tgl_pengaduan'),
			'id_pelanggan'		  	=> $this->input->post('id_pelanggan'),
			'notiket_pengaduan'		=> $this->input->post('notiket_pengaduan'),
			'id_kategori'			=> $this->input->post('id_kategori'),
			'status_pengaduan'		=> $this->input->post('status_pengaduan')
			
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->pengaduan->update($data);
		redirect(base_url('pengaduan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pengaduan'	=> $id
		);
		
		$this->pengaduan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('pengaduan'),'refresh');

	}



}
