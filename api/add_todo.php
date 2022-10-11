<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $todo_name = $_POST['todo_name'];



$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"todo_name" => $todo_name
);

$is_insert = $db->todoList->insertOne($to_insert);
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>

