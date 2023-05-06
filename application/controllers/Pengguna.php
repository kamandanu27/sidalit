<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengguna_model', 'pengguna');
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->pengguna->tabel()->result(),
			'content'		=> 'pengguna/v_content',
			'ajax'	 		=> 'pengguna/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'pengguna/v_add',
			'ajax'	 		=> 'pengguna/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_pengguna'			=> $this->input->post('nama_pengguna'),
			'username_pengguna'		=> $this->input->post('username_pengguna'),
			'password_pengguna'		=> $this->input->post('password_pengguna')
			
		);

		$q = $this->pengguna->insert($data);

		redirect(base_url('pengguna'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->pengguna->detail($id)->row_array(),
			'content'		=> 'pengguna/v_edit',
			'ajax'	 		=> 'pengguna/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_pengguna'			=> $this->input->post('id_pengguna'),
			'nama_pengguna'		    => $this->input->post('nama_pengguna'),
			'username_pengguna'		=> $this->input->post('username_pengguna'),
			'password_pengguna'		=> $this->input->post('password_pengguna')
			
		);
			
		$this->pengguna->update($data);
		redirect(base_url('pengguna'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pengguna'	=> $id
		);
		
		$this->pengguna->delete($data);
		
		redirect(base_url('pengguna'),'refresh');

	}



}
