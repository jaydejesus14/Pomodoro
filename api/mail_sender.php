<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include 'database.php';
$email = $_POST['email'];
$json_return = array();

$result = $db->users->findOne(array("email" => $email));

if($result){
  if(isset($_POST['key'])){
    $json_return['status'] = true;
    $json_return['message'] = 'email sent';
    $mail = new PHPMailer(true);
  
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pivotacc.pomodoro@gmail.com';
    $mail->Password = 'ffekkpobxvvhfpif';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom('pivotacc.pomodoro@gmail.com');
  
    $mail->addAddress($email);
  
    $mail->isHTML(true);
  
    $mail->Subject = 'Verification Code';
    $mail->Body = '<h1>'.$_POST['verification_code'].'</h1>';
  
    $mail->send();
  }else{
    $json_return['message'] = 'email already exist';
    $json_return['status'] = false;
  }
}else{
  $json_return['status'] = true;
  $json_return['message'] = 'email sent';
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'pivotacc.pomodoro@gmail.com';
  $mail->Password = 'ffekkpobxvvhfpif';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('pivotacc.pomodoro@gmail.com');

  $mail->addAddress($email);

  $mail->isHTML(true);

  $mail->Subject = 'Verification Code';
  $mail->Body = '<h1>'.$_POST['verification_code'].'</h1>';

  $mail->send();
}
echo json_encode($json_return);



?>