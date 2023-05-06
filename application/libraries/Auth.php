<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('Pengguna_model','pengguna');
	}

	public function login_user($username,$password)
	{
		$check = $this->CI->pengguna->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_pengguna,
				'nama'				=> $check->nama_pengguna,
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('guru'),'refresh');
		}
		else{
			return 0;
		}
	}


	public function cek()
	{
		if ($this->CI->session->userdata('login') == '') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'nama',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('login'),'refresh');
	}

}