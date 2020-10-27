<?php

class Auth extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('Client_model', 'client_model');
		$this->load->helper('text');
		error_reporting(0);
	}

	public function index()
	{
		$this->load->view('_login');
	}

	public function regis()
	{
		$this->load->view('_regis');
	}
	public function forget()
	{
		$this->load->view('_forget');
	}

	public function reset_pass()
	{

		$this->load->view('_reset_pass');
	}

	public function panel()
	{
		$url = base_url('dashboard');
		redirect($url);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('auth');
		redirect($url);
	}

	public function login()
	{
		$username	= $this->input->post('user');
		$password 	= $this->input->post('pass');
		$hash 		= md5($password);
		$cek_login	= $this->client_model->cek_login($username, $hash);
		if ($cek_login->num_rows() > 0) {
			$row = $cek_login->row();
			$this->session->set_userdata(array(
				'logged'        => 'true',
				'id'          	=> $row->id_admin,
				'level'         => $row->level,
				'nama'          => $row->nama,
				'username'		=> $row->username
			));
			$url = base_url('panel');
			redirect($url);
		} else {
			echo '<script language="javascript">';
			echo 'alert("Username/Password Salah")';
			echo '</script>';

			redirect('auth', 'refresh');
		}
	}
	public function aktifasi($username)
	{
		$status = "aktif"; {
			$data = array(
				'status'         => $status,
			);
			$this->db->where('username', $username);
			$this->db->update('admin', $data);
			echo '<script language="javascript">';
			echo 'alert("Aktifasi Berhasil Akun ada telah aktif")';
			echo '</script>';
			redirect('auth', 'refresh');
		}
	}
}
