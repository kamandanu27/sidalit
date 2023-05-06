<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kabupaten_model', 'kabupaten');
		$this->load->model('Provinsi_model', 'provinsi');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kabupaten->tabel()->result(),
			'content'		=> 'kabupaten/v_content',
			'ajax'	 		=> 'kabupaten/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kabupaten/v_add',
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'ajax'	 		=> 'kabupaten/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_kabupaten'		=> $this->input->post('nama_kabupaten'),
			'id_provinsi'		  	=> $this->input->post('id_provinsi')
			
			
		);

		$q = $this->kabupaten->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('kabupaten'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kabupaten->detail($id)->row_array(),
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'content'		=> 'kabupaten/v_edit',
			'ajax'	 		=> 'kabupaten/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kabupaten'			=> $this->input->post('id_kabupaten'),
			'nama_kabupaten'		=> $this->input->post('nama_kabupaten'),
			'id_provinsi'		 	=> $this->input->post('id_provinsi')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->kabupaten->update($data);
		redirect(base_url('kabupaten'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kabupaten'	=> $id
		);
		
		$this->kabupaten->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kabupaten'),'refresh');

	}

	public function getkabupaten()
	{
		$id_provinsi = $this->input->post('id');
		$data = $this->kabupaten->tabel('tbl_kabupaten.id_provinsi = '.$id_provinsi.'')->result();
		echo "
				<option value=''>Pilih</option>
			";
		foreach($data as $row){
			echo "
				<option value='".$row->id_kabupaten."'>$row->nama_kabupaten</option>
			";
		}
		
	}




}
