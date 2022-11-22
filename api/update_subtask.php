<?php
include 'database.php';
$id    = $_POST['id'];
$name  = $_POST['name'];
$note = $_POST['note'];



$json_return = array();

if($_POST['key'] == 'routine'){
    $is_insert = $db->sessionTask->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => [ 'name' => $name, 'notes' => $note ]]
    );
    if($is_insert){
        $json_return['status'] = 'success';
    }else{
        $json_return['status'] = 'failed';
    }

}else{

    $is_insert = $db->majorSubTask->updateOne(
            [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
            [ '$set' => [ 'subtaskName' => $name, 'note' => $note ]]
        );
    if($is_insert){
        $json_return['status'] = 'success';
    }else{
        $json_return['status'] = 'failed';
    }
}

echo json_encode($json_return);


?>