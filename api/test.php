<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'druxbogs@gmail.com';
    $mail->Password = 'eriocldxmyztffps';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('druxbogs@gmail.com');

    $mail->addAddress('eurekare.hendrix@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'any';
    $mail->Body = 'hello';

    $mail->send();

    echo "sent";



?>