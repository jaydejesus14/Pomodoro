<?php
include 'database.php';
$id    = $_POST['id'];
$name  = $_POST['name'];



$json_return = array();

$is_insert = $db->majorSubTask->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => [ 'subtaskName' => $name ]]
    );
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);


?>