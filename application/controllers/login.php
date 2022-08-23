<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('session');
	}

	function index(){
		$this ->load->view('v_dashboard');
	}

	function login(){
		$this ->load->view('v_login');
	}


	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo"email dan password yang anda masukan salah !";
		}
	}

	function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url('user/index'));
	}
}