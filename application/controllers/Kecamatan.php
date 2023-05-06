<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Kabupaten_model', 'kabupaten');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kecamatan->tabel()->result(),
			'content'		=> 'kecamatan/v_content',
			'ajax'	 		=> 'kecamatan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kecamatan/v_add',
			'kabupaten'		=> $this->kabupaten->tabel()->result(),
			'ajax'	 		=> 'kecamatan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_kecamatan'		=> $this->input->post('nama_kecamatan'),
			'id_kabupaten'			=> $this->input->post('id_kabupaten')
			
			
		);

		$q = $this->kecamatan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('kecamatan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kecamatan->detail($id)->row_array(),
			'kabupaten'		=> $this->kabupaten->tabel()->result(),
			'content'		=> 'kecamatan/v_edit',
			'ajax'	 		=> 'kecamatan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kecamatan'			=> $this->input->post('id_kecamatan'),
			'nama_kecamatan'		=> $this->input->post('nama_kecamatan'),
			'id_kabupaten'			=> $this->input->post('id_kabupaten')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->kecamatan->update($data);
		redirect(base_url('kecamatan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kecamatan'	=> $id
		);
		
		$this->kecamatan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kecamatan'),'refresh');

	}

	public function getkecamatan()
	{
		$id_kabupaten = $this->input->post('id');
		$data = $this->kecamatan->tabel('tbl_kecamatan.id_kabupaten = '.$id_kabupaten.'')->result();
		echo "
				<option value=''>Pilih</option>
			";
		foreach($data as $row){
			echo "
				<option value='".$row->id_kecamatan."'>$row->nama_kecamatan</option>
			";
		}
		
	}



}
