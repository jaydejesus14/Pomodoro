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
    $mail->Username = 'pivotacc.pomodoro@gmail.com';
    $mail->Password = 'ffekkpobxvvhfpif';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('pivotacc.pomodoro@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = 'Verification Code';
    $mail->Body = $_POST['verification_code'];

    $mail->send();

    echo "sent";



?>