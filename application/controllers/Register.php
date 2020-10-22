<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('M_account'); //call model
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'NAME', 'required');
        $this->form_validation->set_rules('username', 'USERNAME', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required');
        // $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/v_register');
            $pesan['message'] =    "Pendaftaran GAGAL";
        } else {
            $satu = 1;
            $data['username'] =    $this->input->post('username');
            $data['password'] =    md5($this->input->post('password'));
            $data['nama']   =    $this->input->post('name');
            $data['level']  =    $satu;
            $data['email']  =    $this->input->post('email');
            $email = $this->input->post('email');
            $nama = $this->input->post('username');
            $this->m_account->daftar($data);
            $this->m_account->send($email, $nama);


            redirect(site_url('auth'));
        }
    }
}
