<?php

include('database.php');

if (isset($_POST['forgot_button'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT user_email FROM user_info WHERE user_email='$email' LIMIT 1";
    $check_email = mysqli_query($con, $check_email);
    

}
?>