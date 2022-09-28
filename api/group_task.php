<?php
	include 'database.php';
//   $user_id = $_POST['user_id'];
// $email = $_POST['email'];
//   $task_name = $_POST['task_name'];
//   $pomodoro = $_POST['pomodoro'];
//   $short_break = $_POST['short_break'];
//   $long_break = $_POST['long_break'];



// $json_return = array();
// $json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"task_name" => $task_name,
// 		"pomodoro" => $pomodoro,
// 		"short_break" => $short_break,
// 		"long_break" => $long_break 
// );
$where = array(
    'user_id' => '633453f388ff7a176d0ade15'
);
$select_fields = array(
    'pomodoro' => 1,
    'task_name' => 1,
    'short_break' => 1,
    'long_break' => 1
);
$options = array(
    'projection' => $select_fields
);
$cursor = $db->groupTask->find($where, $options);
$docs = $cursor->toArray();

echo json_encode($docs);
?>

