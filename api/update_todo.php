<?php
include 'database.php';
$todo_id    = $_POST['todo_id'];
$input      = $_POST['input'];



$json_return = array();
// $json_return['a'] = $_POST['todo_id'];
// $json_return['b'] = $_POST['input']; 
// $json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"todo_name" => $todo_name
// );

$is_insert = $db->todoList->updateOne(
    [ '_id' =>  new MongoDB\BSON\ObjectId ($todo_id)],
    [ '$set' => [ 'todo_name' => $input ]]
    );
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);


?>