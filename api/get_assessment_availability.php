<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $date = $_POST['date'];
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
    'user_id' => $user_id,
    'date_created' => $date
);
$select_fields = array(
    'points' => 1,
);
$options = array(
    'projection' => $select_fields
);
$cursor = $db->assessment->find($where, $options);
$docs = $cursor->toArray();

if(count($docs) > 0){
    $json_return['is_exist'] = true;
}else{
    $json_return['is_exist'] = false;
}

echo json_encode($json_return);
?>

