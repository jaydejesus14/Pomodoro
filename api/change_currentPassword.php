<?php
	include 'database.php';

    $email    = $_POST['email'];
    $currentPassword  =  hash('ripemd160', $_POST['currentPassword']);


    $hash='ripemd160';

    $result = $db->users->findOne(array("email" => $email,"password"=>$currentPassword));
    $json_return = array();
    if($result){
        $json_return['data'] = $result;
        $json_return['status'] = true;
        $docs = $db->users->updateOne(
            [ 'email' => $_POST['email']],
            [ '$set' => [ 'password' => hash('ripemd160', $_POST['password']) ]]
            );
    }
    else{
        $json_return['status'] = false;
    }
    echo json_encode($json_return);

 

?>

