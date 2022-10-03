<?php
	include 'database.php';

$docs = $db->users->updateOne(
    [ 'email' => $_POST['email']],
    [ '$set' => [ 'password' => hash('ripemd160', $_POST['password']) ]]
    );
 
$json_return = array();
$json_return['message'] = 'change password success';
$json_return['status'] = 'success';
echo json_encode($json_return);
?>

