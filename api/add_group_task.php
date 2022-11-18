<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $task_name = $_POST['task_name'];
  $pomodoro = $_POST['pomodoro'];
  $short_break = $_POST['short_break'];
  $long_break = $_POST['long_break'];
  $due_date = $_POST['due_date'];
  $subtaskName = $_POST['sub_task_name'];


$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"task_name" => $task_name,
		"pomodoro" => $pomodoro,
		"short_break" => $short_break,
		"long_break" => $long_break,
    "due_date" => $due_date
);

// $result = $db->users->findOne(array("email" => $email,"password"=>$password));
$is_exist = $db->groupTask->findOne(array("task_name" => $task_name, "user_id" => $user_id));

if(!$is_exist)
{
  $is_insert = $db->groupTask->insertOne($to_insert);
  if($is_insert)
  {
      $json_return['status'] = true;
      $forSubtask = $db->groupTask->findOne(array("task_name" => $task_name, "user_id" => $user_id));
      $objId = $forSubtask['_id']->__toString();

      foreach($subtaskName as $value){
      $to_insert_subtask = array(
        "majorTaskId" => $objId,
        "subtaskName" => $value
      );

      $db->majorSubTask->insertOne($to_insert_subtask);
    }
  }
  else
  {
      $json_return['status'] = false;
      $json_return['message'] = 'something went wrong';
  }
}else{
  $json_return['status'] = false;
  $json_return['message'] = 'Name is already exist';
}

echo json_encode($json_return);
?>

