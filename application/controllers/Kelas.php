<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_model', 'kelas');
		$this->load->model('Guru_model', 'guru');
		
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kelas->tabel()->result(),
			'content'		=> 'kelas/v_content',
			'ajax'	 		=> 'kelas/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kelas/v_add',
			'guru' 			=> $this->guru->tabel()->result(),
			'ajax'	 		=> 'kelas/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_kelas'		    => $this->input->post('nama_kelas'),
			'id_guru'	     		=> $this->input->post('id_guru')
			
		
		);

		$q = $this->kelas->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('kelas'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kelas->detail($id)->row_array(),
			'guru' 			=> $this->guru->tabel()->result(),
			'content'		=> 'kelas/v_edit',
			'ajax'	 		=> 'kelas/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kelas'			=> $this->input->post('id_kelas'),
			'nama_kelas'	        => $this->input->post('nama_kelas'),
			'id_guru'	    	=> $this->input->post('id_guru')
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->kelas->update($data);
		redirect(base_url('kelas'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kelas'	=> $id
		);
		
		$this->kelas->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kelas'),'refresh');

	}



}


