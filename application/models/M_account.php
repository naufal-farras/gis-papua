<?php
class M_account extends CI_Model
{

    function daftar($data)
    {
        $this->load->database();
        $this->db->insert('admin', $data);
        return $this->db->insert_id();
    }
    function update_pass($pass, $email)
    {
        $this->load->database();
        $datas = array(
            'password'        => $pass,
        );

        $this->db->where('email', $email);
        $this->db->update('admin', $datas);
        // redirect(site_url('auth'));
    }

    public function send($email, $username, $nama)
    {
        $this->load->library('phpmailer_lib');
        try {
            // phpmailer object
            $mail = $this->phpmailer_lib->load();

            $mail->setFrom('gisjayapuraa@gmail.com', 'Admin GIS');

            //add receipent
            $mail->addAddress($email);
            $url = base_url() . 'auth/aktifasi/' . $username;
            //add subject
            $mail->Subject = "Register Confirmation";

            $mailContent = " <b> Verifikasi Email</b>
            <br>
            <p>Hai, $nama </p>
           
            <p>Klik di bawah untuk mem-validasi email anda.</p>
            <a href='$url'> Aktifkan Akun</a>";

            $mail->Body = $mailContent;
            $mail->send();
        } catch (Exception $e) {
            echo $mail->ErrorInfo;
        }
    }
    public function send_reset($email)
    {
        $this->load->library('phpmailer_lib');
        try {
            // phpmailer object
            $mail = $this->phpmailer_lib->load();

            $mail->setFrom('gisjayapuraa@gmail.com', 'Admin RBP');

            //add receipent
            $mail->addAddress($email);
            $url = base_url() . 'auth/reset_pass/' . $email;
            //add subject
            $mail->Subject = "Reset Password";

            $mailContent = " <b> Reset Password Anda</b>
            <br>
           
            <p>Klik di bawah untuk melakukan reset password anda.</p>
            <a href='$url'> Reset Password</a>";

            $mail->Body = $mailContent;
            if ($mail->send()) {
                echo '<script language="javascript">';
                echo 'alert("Reset Password Berhasil, Cek Email Anda")';
                echo '</script>';
                redirect('auth', 'refresh');
            }
        } catch (Exception $e) {
            echo $mail->ErrorInfo;
        }
    }
}
