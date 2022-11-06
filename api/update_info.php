<?php
include 'database.php';
$id    = $_POST['user_id'];
$Fname  = $_POST['Fname'];
$Lname = $_POST['Lname'];
$userName = $_POST['userName'];



$json_return = array();

$is_insert = $db->users->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => [ 'Fname' => $Fname, 'Lname' => $Lname, 'user_name' => $userName ]]
    );
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);


?>