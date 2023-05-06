<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Personil_model', 'personil');
		$this->load->model('Golongan_model', 'golongan');
		$this->load->model('Jabatan_model', 'jabatan');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->personil->tabel()->result(),
			'content'		=> 'personil/v_content',
			'ajax'	 		=> 'personil/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'personil/v_add',
			'golongan' 	=> $this->golongan->tabel()->result(),
			'jabatan' 	=> $this->jabatan->tabel()->result(),
			'ajax'	 		=> 'personil/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_personil'		    => $this->input->post('nama_personil'),
			'agama_personil'		=> $this->input->post('agama_personil'),
			'pangkat_personil'		=> $this->input->post('pangkat_personil'),
			'tgllahir_personil'		=> $this->input->post('tgllahir_personil'),
			'keputusan_personil'	=> $this->input->post('keputusan_personil'),
			'tmt_personil'	    	=> $this->input->post('tmt_personil'),
			'id_golongan'	    	=> $this->input->post('id_golongan'),
			'id_jabatan'		    => $this->input->post('id_jabatan')
			
		
		);

		$q = $this->personil->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('personil'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->personil->detail($id)->row_array(),
			'golongan' 	=> $this->golongan->tabel()->result(),
			'jabatan' 	=> $this->jabatan->tabel()->result(),
			'content'		=> 'personil/v_edit',
			'ajax'	 		=> 'personil/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_personil'			=> $this->input->post('id_personil'),
			'nama_personil'	        => $this->input->post('nama_personil'),
			'agama_personil'		=> $this->input->post('agama_personil'),
			'pangkat_personil'		=> $this->input->post('pangkat_personil'),
			'tgllahir_personil'		=> $this->input->post('tgllahir_personil'),
			'keputusan_personil'	=> $this->input->post('keputusan_personil'),
			'tmt_personil'	    	=> $this->input->post('tmt_personil'),
			'id_golongan'	    	=> $this->input->post('id_golongan'),
			'id_jabatan'		    => $this->input->post('id_jabatan')
			
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->personil->update($data);
		redirect(base_url('personil'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_personil'	=> $id
		);
		
		$this->personil->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('personil'),'refresh');

	}



}
