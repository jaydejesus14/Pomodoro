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
  
    $mail->Subject = 'Reset Password Request';

    //for forgot password
    $mail->Body =
    "<html>
  <head>
  <title></title>
  </head>
  <body>
  <style>
  .body {
    background-color: #EDEDED;
  }
  </style>    
  <div class = 'emailContainer ' style = 'width= 30px; text-align: center; padding: 30px; background-color: #EDEDED;'>
   <div class = 'text-center' style = 'text-align: center; margin: auto;'>
      <img src='https://res.cloudinary.com/dxq9c6tz5/image/upload/v1665985174/Pivot/logo_zduxs3.png' alt='Pivot Logo' width = '50px' style = 'margin: center'; 'text:align: center' />
    </div>
    <h3 style = 'text-align: center; margin-top: 0px'>PIVOT</h3>
    <div class = 'header' style = 'background-color: #783937; color: white; padding: 4px; position: absolute;; margin-right: 20px; margin-left: 20px' >
        <h2 style = 'text-align: center'>PASSWORD RESET</h2>
    </div>
    <div class = 'bodyContainer' style = 'background-color: #F0DFD1; color: black; padding: 25px; position: absolute; margin-right: 20px; margin-left: 20px'>
        <p style = 'text-align: center'>If you lost/forgot your password and has requested to change it, then use the code below and enter it on the redirected page. </p>
        <h1 style = 'text-align:center;background-color: white; margin: auto; width:100px;padding:5px;border:2px solid transparent;border-radius:10px'>".$_POST['verification_code']."</h1>
        <p style = 'text-align: center'>If you did not request a change of password, then you can safely ignore this email. </p>
    </div>
  </div>
  </body>
  </html>";
  
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
  $mail->headers="MIME-Version: 1.0" . "\r\n";
  $mail->headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

  $mail->Subject = 'Pivot: Verification Code';
  //for login verification
  $mail->Body = "<html>
  <head>
  <title></title>
  </head>
  <body>
  <style>
  .body {
    background-color: #EDEDED;
  }
  </style>    
  <div class = 'emailContainer ' style = 'width= 30px; text-align: center; padding: 30px; background-color: #EDEDED;'>
   <div class = 'text-center' style = 'text-align: center; margin: auto;'>
      <img src='https://res.cloudinary.com/dxq9c6tz5/image/upload/v1665985174/Pivot/logo_zduxs3.png' alt='Pivot Logo' width = '50px' style = 'margin: center'; 'text:align: center' />
    </div>
    <h3 style = 'text-align: center; margin-top: 0px'>PIVOT</h3>
    <div class = 'header' style = 'background-color: #783937; color: white; padding: 4px; position: absolute;; margin-right: 20px; margin-left: 20px' >
        <h2 style = 'text-align: center'>Verify your email Address</h2>
    </div>
    <div class = 'bodyContainer' style = 'background-color: #F0DFD1; color: black; padding: 25px; position: absolute; margin-right: 20px; margin-left: 20px'>
        <h3 style = 'text-align: center'>Thank you for signing up to Pivot! </h3>
        <p style = 'text-align: center'>Please enter the code below on the redirected page in to verify your email address and verify your account </p>
        <h1 style = 'text-align:center;background-color: white; margin: auto; width:100px;padding:5px;border:2px solid transparent;border-radius:10px'>".$_POST['verification_code']."</h1>
    </div>
  </div>
  </body>
  </html>";

  $mail->send();
}
echo json_encode($json_return);



?>