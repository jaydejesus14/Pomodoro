<?php
	include 'database.php';
  $id = $_POST['routineId'];



// $json_return = array();
// $json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"todo_name" => $todo_name
// );




$delRec = $db->sessionTask->deleteMany( array( 'routineId' =>  ($id)) );
$find = $db->session->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId ($id)) );


// $is_insert = $db->todoList->insertOne($to_insert);
if($delRec){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>