<?php
include 'database.php';
$id    = $_POST['id'];
$key = $_POST['key'];




$json_return = array();
// $json_return['a'] = $_POST['todo_id'];
// $json_return['b'] = $_POST['input']; 
// $json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"todo_name" => $todo_name
// );
if($key == 'todo'){
    $is_insert = $db->majorSubTask->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => [ 'is_complete' => true ]]
        );
}else{
    

    $where = array(
        '_id' => new MongoDB\BSON\ObjectId ($id)
    );
    $select_fields = array(
        'date_completed' => 1,
    );
    $options = array(
        'projection' => $select_fields
    );
    $cursor = $db->sessionTask->find($where, $options)->toArray();
    $result['date_completed'] = $cursor;

    if($result){
        $json_return['status'] = 'success';
    }
   
    echo json_encode($result);
}


?>