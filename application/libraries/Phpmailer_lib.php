<?php
defined('BASEPATH') or exit('No direct script allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib
{
    public function __construct()
    {
        log_message('debug', 'PHPMailer class is loaded');
    }

    public function load()
    {
        require_once APPPATH . 'third_party/PHPMailer/Exception.php';
        require_once APPPATH . 'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH . 'third_party/PHPMailer/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 1;

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'gisjayapuraa@gmail.com';
        $mail->Password = 'Jayapura123#';
        $mail->isHTML(true);
        return $mail;
    }
}
