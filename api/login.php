<?php
         
include 'database.php';

$email = $_POST['email'];
$password   = hash('ripemd160', $_POST['psw']);


$result = $db->users->findOne(array("email" => $email,"password"=>$password));
$json_return = array();
if($result){
    $json_return['data'] = $result;
    $json_return['status'] = true;
}
else{
    $json_return['status'] = false;
}
echo json_encode($json_return);
?>