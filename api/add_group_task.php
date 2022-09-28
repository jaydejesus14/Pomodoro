<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $task_name = $_POST['task_name'];
  $pomodoro = $_POST['pomodoro'];
  $short_break = $_POST['short_break'];
  $long_break = $_POST['long_break'];



$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"task_name" => $task_name,
		"pomodoro" => $pomodoro,
		"short_break" => $short_break,
		"long_break" => $long_break 
);

$is_insert = $db->groupTask->insertOne($to_insert);
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>

