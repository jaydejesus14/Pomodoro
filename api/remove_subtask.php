<?php
	include 'database.php';
  $id = $_POST['task_id'];



// $json_return = array();
// $json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"todo_name" => $todo_name
// );






// $is_insert = $db->todoList->insertOne($to_insert);
if($_POST['key'] == 'routine'){
  $delRec = $db->sessionTask->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId ($id)) );
  if($delRec){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}
} else {
  $delRec = $db->majorSubTask->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId ($id)) );
  if($delRec){
      $json_return['status'] = 'success';
  }else{
      $json_return['status'] = 'failed';
  }
}

echo json_encode($json_return);
?>