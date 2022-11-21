<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $routineId = $_POST['routineId'];
  $pomodoro = $_POST['pomodoro'];
  $end_date = $_POST['end_date'];
  $end_time = $_POST['end_time'];
  $totalTask = $_POST['totalTask'];
  
  $result = $db->session->findOne(array("_id" => new MongoDB\BSON\ObjectId ($routineId)));

$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"routineId" => $routineId,
        "routine_name"=> $result['routine_name'],
        "pomodoro" => $pomodoro,
        "no_of_task" => $totalTask,
        "end_date" => $end_date,
        "end_time" => $end_time,
);

$is_insert = $db->sessionReports->insertOne($to_insert);
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>

