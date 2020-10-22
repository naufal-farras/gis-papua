<?php
class M_account extends CI_Model
{

    function daftar($data)
    {
        $this->load->database();
        $this->db->insert('admin', $data);
        return $this->db->insert_id();
    }

    public function send($email, $nama)
    {
        $this->load->library('phpmailer_lib');
        try {
            // phpmailer object
            $mail = $this->phpmailer_lib->load();

            $mail->setFrom('gisjayapuraa@gmail.com', 'Admin GIS');

            //add receipent
            $mail->addAddress($email);
            $url = base_url() . 'auth/aktifasi/' . $nama;
            //add subject
            $mail->Subject = "Register Confirmation";

            $mailContent = " <b> Verifikasi Email</b>
            <br>
            <p>Hai, </p>
           
            <p>Klik di bawah untuk mem-validasi email anda.</p>
            <a href='$url'> Aktifkan Akun</a>";

            $mail->Body = $mailContent;

            if ($mail->send()) {
                echo "email has been sent";
            }
        } catch (Exception $e) {
            echo $mail->ErrorInfo;
        }
    }
}
