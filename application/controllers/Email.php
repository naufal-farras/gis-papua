<?php

defined('BASEPATH') or exit('No direct script allowed');


class Email extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function send()
    {
        $this->load->library('phpmailer_lib');
        try {
            // phpmailer object
            $mail = $this->phpmailer_lib->load();

            $mail->setFrom('gisjayapuraa@gmail.com', 'Admin GIS');

            //add receipent
            // $mail->addAddress($email);

            //add subject
            $mail->Subject = "Register Confirmation";

            $mailContent = " <b> Verifikasi Email</b>
            <br>
            <p>Hai, </p>
           
            <p>Klik di bawah untuk mem-validasi email anda.</p>
            <a href='base_url('')>Aktifkan Akun.</a>
        ";

            $mail->Body = $mailContent;

            if ($mail->send()) {
                echo "email has been sent";
            }
        } catch (Exception $e) {
            echo $mail->ErrorInfo;
        }
    }
}
