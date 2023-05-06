<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model', 'siswa');
		$this->load->model('Jurusan_model', 'jurusan');
		$this->load->model('Kelas_model', 'kelas');
		$this->load->model('Ekskul_model', 'ekskul');
		$this->load->model('Provinsi_model', 'provinsi');
		$this->load->model('kabupaten_model', 'kabupaten');
		$this->load->model('kecamatan_model', 'kecamatan');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->siswa->tabel()->result(),
			'content'		=> 'siswa/v_content',
			'ajax'	 		=> 'siswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'siswa/v_add',
			'jurusan' 		=> $this->jurusan->tabel()->result(),
			'kelas' 		=> $this->kelas->tabel()->result(),
			'ekskul' 		=> $this->ekskul->tabel()->result(),
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'kabupaten' 	=> $this->kabupaten->tabel()->result(),
			'kecamatan' 	=> $this->kecamatan->tabel()->result(),
			'ajax'	 		=> 'siswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nisn_siswa'		    => $this->input->post('nisn_siswa'),
			'nama_siswa'		    => $this->input->post('nama_siswa'),
			'alamat_siswa'			=> $this->input->post('alamat_siswa'),
			'id_kecamatan'		  	=> $this->input->post('id_kecamatan'),
			'jenis_kelamin_siswa'	=> $this->input->post('jenis_kelamin_siswa'),
			'tgllahir_siswa'		=> $this->input->post('tgllahir_siswa'),
			'jenis_kelamin_siswa'	=> $this->input->post('jenis_kelamin_siswa'),
			'id_jurusan'	    	=> $this->input->post('id_jurusan'),
			'id_kelas'		  	 	=> $this->input->post('id_kelas'),
			'id_ekskul'		  	 	=> $this->input->post('id_ekskul')
			
		
		);

		$q = $this->siswa->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('siswa'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->siswa->detail($id)->row_array(),
			'jurusan' 		=> $this->jurusan->tabel()->result(),
			'kelas' 		=> $this->kelas->tabel()->result(),
			'ekskul' 		=> $this->ekskul->tabel()->result(),
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'kabupaten' 	=> $this->kabupaten->tabel()->result(),
			'kecamatan' 	=> $this->kecamatan->tabel()->result(),
			'content'		=> 'siswa/v_edit',
			'ajax'	 		=> 'siswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_siswa'				=> $this->input->post('id_siswa'),
			'nisn_siswa'		    => $this->input->post('nisn_siswa'),
			'nama_siswa'		    => $this->input->post('nama_siswa'),
			'alamat_siswa'			=> $this->input->post('alamat_siswa'),
			'id_kecamatan'		  	=> $this->input->post('id_kecamatan'),
			'jenis_kelamin_siswa'	=> $this->input->post('jenis_kelamin_siswa'),
			'tgllahir_siswa'		=> $this->input->post('tgllahir_siswa'),
			'jenis_kelamin_siswa'	=> $this->input->post('jenis_kelamin_siswa'),
			'id_jurusan'	    	=> $this->input->post('id_jurusan'),
			'id_kelas'		  	 	=> $this->input->post('id_kelas'),
			'id_ekskul'	    		=> $this->input->post('id_ekskul')
			
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->siswa->update($data);
		redirect(base_url('siswa'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_siswa'	=> $id
		);
		
		$this->siswa->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('siswa'),'refresh');

	}



}
