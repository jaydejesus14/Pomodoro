<?php
	include 'database.php';

    $email    = $_POST['email'];
    $currentPassword  =  hash('ripemd160', $_POST['currentPassword']);


    $hash='ripemd160';

    $result = $db->users->findOne(array("email" => $email,"password"=>$currentPassword));
    $json_return = array();
    if($result){
        
        $docs = $db->users->updateOne(
            [ 'email' => $_POST['email']],
            [ '$set' => [ 'password' => hash('ripemd160', $_POST['password']) ]]
            );
            $json_return['data'] = $result;
        $json_return['status'] = true;
    }
    else{
        $json_return['status'] = false;
    }
    echo json_encode($json_return);

 

?>

