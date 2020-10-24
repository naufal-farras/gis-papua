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
        $cek = $this->db->query("SELECT * FROM admin where username='" . $this->input->post('username') . "' or email='" . $this->input->post('email') . "'");
        if ($cek->num_rows() >= 1) {
            echo '<script language="javascript">';
            echo 'alert("Pendaftaran Gagal Username atau email sudah Digunakan.")';
            echo '</script>';
            redirect('auth/regis', 'refresh');
        } else {
            $satu = 1;
            $data['username'] =    $this->input->post('username');
            $data['password'] =    md5($this->input->post('password'));
            $data['nama']   =    $this->input->post('name');
            $data['level']  =    $satu;
            $data['email']  =    $this->input->post('email');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $nama = $this->input->post('name');
            $this->m_account->daftar($data);
            $this->m_account->send($email, $username, $nama);

            echo '<script language="javascript">';
            echo 'alert("Pendaftaran berhasil silahkan cek email anda.")';
            echo '</script>';

            // redirect(site_url('auth'));
            redirect('auth', 'refresh');
        }
    }
    public function resetpass()
    {
        $cek = $this->db->query("SELECT * FROM admin where email='" . $this->input->post('email') . "'");
        if ($cek->num_rows() < 0) {
            echo '<script language="javascript">';
            echo 'alert("Email Tidak Terdaftar")';
            echo '</script>';
            redirect('auth/forget', 'refresh');
        } else {

            // $data['email']  =    $this->input->post('email');
            $email = $this->input->post('email');
            $this->m_account->send_reset($email);
            echo '<script language="javascript">';
            echo 'alert("Reset Password Berhasil, Cek Email Anda")';
            echo '</script>';
            redirect('auth', 'refresh');
            // redirect(site_url('auth'));
        }
    }
    public function update_pass()
    {
        $email = $this->input->post('email');

        $pass = md5($this->input->post('password'));

        $this->m_account->update_pass($pass, $email);
        echo '<script language="javascript">';
        echo 'alert("Password Berhasil di Ganti.")';
        echo '</script>';
        redirect('auth', 'refresh');
    }
}
