<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Provinsi_model', 'provinsi');
		$this->load->model('Kabupaten_model', 'kabupaten');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Siswa_model', 'siswa');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'jumlah_provinsi' 		=> $this->provinsi->tabel()->num_rows(),
			'jumlah_kabupaten' 		=> $this->kabupaten->tabel()->num_rows(),
			'jumlah_kecamatan' 		=> $this->kecamatan->tabel()->num_rows(),
			'jumlah_siswa' 			=> $this->siswa->tabel()->num_rows(),
			'penambahan'			=> 1+2,
			'pengurangan'			=> 2-1,
			'perkalian'				=> 2*2,
			'pembagian'				=> 4/2,
			'content'				=> 'dashboard/v_content',
			'ajax'	 				=> 'dashboard/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}





}
