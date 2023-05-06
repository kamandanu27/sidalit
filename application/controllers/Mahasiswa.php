<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model', 'mahasiswa');
		$this->load->model('Provinsi_model', 'provinsi');
		$this->load->model('kabupaten_model', 'kabupaten');
		$this->load->model('kecamatan_model', 'kecamatan');
		$this->auth->cek();
		
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->mahasiswa->tabel()->result(),
			'content'		=> 'mahasiswa/v_content',
			'ajax'	 		=> 'mahasiswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'mahasiswa/v_add',
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'kabupaten' 	=> $this->kabupaten->tabel()->result(),
			'kecamatan' 	=> $this->kecamatan->tabel()->result(),
			'ajax'	 		=> 'mahasiswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$image 								= time().'-'.$_FILES["foto_mahasiswa"]['name']; //data post dari form
		$config['upload_path'] 				= './public/image/upload/mahasiswa/'; //lokasi folder foto produk
		$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
		$config['max_size']  				= '25000'; //maksimal 25Mb
		$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

		$this->load->library('upload', $config); //panggil librarys upload
		$this->upload->do_upload('foto_mahasiswa'); //upload foto produk

		$data = array(
			'nik_mahasiswa'		    		=> $this->input->post('nik_mahasiswa'),
			'nama_mahasiswa'		    	=> $this->input->post('nama_mahasiswa'),
			'alamat_mahasiswa'				=> $this->input->post('alamat_mahasiswa'),
			'tempatlahir_mahasiswa'			=> $this->input->post('tempatlahir_mahasiswa'),
			'tgllahir_mahasiswa'			=> $this->input->post('tgllahir_mahasiswa'),
			'jeniskelamin_mahasiswa'		=> $this->input->post('jeniskelamin_mahasiswa'),
			'kewarganegaraan_mahasiswa'	    => $this->input->post('kewarganegaraan_mahasiswa'),
			'agama_mahasiswa'		  	 	=> $this->input->post('agama_mahasiswa'),
			'nmibukandung_mahasiswa'		=> $this->input->post('nmibukandung_mahasiswa'),
			'email_mahasiswa'		  	 	=> $this->input->post('email_mahasiswa'),
			'notelp_mahasiswa'		  	 	=> $this->input->post('notelp_mahasiswa'),
			'kodepos_mahasiswa'		  	 	=> $this->input->post('kodepos_mahasiswa'),
			'id_kecamatan'		  			=> $this->input->post('id_kecamatan'),
			'pendidikanterakhir_mahasiswa'	=> $this->input->post('pendidikanterakhir_mahasiswa'),
			'nmsekolah_mahasiswa'		  	=> $this->input->post('nmsekolah_mahasiswa'),
			'rataratarapor_mahasiswa'		=> $this->input->post('rataratarapor_mahasiswa'),
			'programstudi1_mahasiswa'		=> $this->input->post('programstudi1_mahasiswa'),
			'programstudi2_mahasiswa'		=> $this->input->post('programstudi2_mahasiswa'),
			'foto_mahasiswa'				=> $image
			
			
		
		);

		$q = $this->mahasiswa->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('mahasiswa'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->mahasiswa->detail($id)->row_array(),
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'kabupaten' 	=> $this->kabupaten->tabel()->result(),
			'kecamatan' 	=> $this->kecamatan->tabel()->result(),
			'content'		=> 'mahasiswa/v_edit',
			'ajax'	 		=> 'mahasiswa/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{
		if($_FILES["foto_mahasiswa"]['name'] == ""){ //jika tidak ada upload foto

		$data = array(
			'id_mahasiswa'					=> $this->input->post('id_mahasiswa'),
			'nik_mahasiswa'		    		=> $this->input->post('nik_mahasiswa'),
			'nama_mahasiswa'		    	=> $this->input->post('nama_mahasiswa'),
			'alamat_mahasiswa'				=> $this->input->post('alamat_mahasiswa'),
			'tempatlahir_mahasiswa'			=> $this->input->post('tempatlahir_mahasiswa'),
			'tgllahir_mahasiswa'			=> $this->input->post('tgllahir_mahasiswa'),
			'jeniskelamin_mahasiswa'		=> $this->input->post('jeniskelamin_mahasiswa'),
			'kewarganegaraan_mahasiswa'	    => $this->input->post('kewarganegaraan_mahasiswa'),
			'agama_mahasiswa'		  	 	=> $this->input->post('agama_mahasiswa'),
			'nmibukandung_mahasiswa'		=> $this->input->post('nmibukandung_mahasiswa'),
			'email_mahasiswa'		  	 	=> $this->input->post('email_mahasiswa'),
			'notelp_mahasiswa'		  	 	=> $this->input->post('notelp_mahasiswa'),
			'kodepos_mahasiswa'		  	 	=> $this->input->post('kodepos_mahasiswa'),
			'id_kecamatan'		  			=> $this->input->post('id_kecamatan'),
			'pendidikanterakhir_mahasiswa'	=> $this->input->post('pendidikanterakhir_mahasiswa'),
			'nmsekolah_mahasiswa'		  	=> $this->input->post('nmsekolah_mahasiswa'),
			'rataratarapor_mahasiswa'		=> $this->input->post('rataratarapor_mahasiswa'),
			'programstudi1_mahasiswa'		=> $this->input->post('programstudi1_mahasiswa'),
			'programstudi2_mahasiswa'		=> $this->input->post('programstudi2_mahasiswa')
			);
			$q = $this->mahasiswa->update($data);

		}else{ //jika ada upload foto

			$image 								= time().'-'.$_FILES["foto_mahasiswa"]['name']; //data post dari form
			$config['upload_path'] 				= './public/image/upload/mahasiswa/'; //lokasi folder foto produk
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg'; //jenis file yang boleh diijinkan
			$config['max_size']  				= '25000'; //maksimal 25Mb
			$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

			$this->load->library('upload', $config); //panggil librarys upload
			$this->upload->do_upload('foto_mahasiswa'); //upload foto produk

			$data = array(
			'id_mahasiswa'					=> $this->input->post('id_mahasiswa'),
			'nik_mahasiswa'		    		=> $this->input->post('nik_mahasiswa'),
			'nama_mahasiswa'		    	=> $this->input->post('nama_mahasiswa'),
			'alamat_mahasiswa'				=> $this->input->post('alamat_mahasiswa'),
			'tempatlahir_mahasiswa'			=> $this->input->post('tempatlahir_mahasiswa'),
			'tgllahir_mahasiswa'			=> $this->input->post('tgllahir_mahasiswa'),
			'jeniskelamin_mahasiswa'		=> $this->input->post('jeniskelamin_mahasiswa'),
			'kewarganegaraan_mahasiswa'	    => $this->input->post('kewarganegaraan_mahasiswa'),
			'agama_mahasiswa'		  	 	=> $this->input->post('agama_mahasiswa'),
			'nmibukandung_mahasiswa'		=> $this->input->post('nmibukandung_mahasiswa'),
			'email_mahasiswa'		  	 	=> $this->input->post('email_mahasiswa'),
			'notelp_mahasiswa'		  	 	=> $this->input->post('notelp_mahasiswa'),
			'kodepos_mahasiswa'		  	 	=> $this->input->post('kodepos_mahasiswa'),
			'id_kecamatan'		  			=> $this->input->post('id_kecamatan'),
			'pendidikanterakhir_mahasiswa'	=> $this->input->post('pendidikanterakhir_mahasiswa'),
			'nmsekolah_mahasiswa'		  	=> $this->input->post('nmsekolah_mahasiswa'),
			'rataratarapor_mahasiswa'		=> $this->input->post('rataratarapor_mahasiswa'),
			'programstudi1_mahasiswa'		=> $this->input->post('programstudi1_mahasiswa'),
			'programstudi2_mahasiswa'		=> $this->input->post('programstudi2_mahasiswa'),
			'foto_mahasiswa'				=> $image
			);
			$q = $this->mahasiswa->update($data);
		}

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->mahasiswa->update($data);
		redirect(base_url('mahasiswa'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_mahasiswa'	=> $id
		);
		
		$this->mahasiswa->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('mahasiswa'),'refresh');

	}



}
