<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $routine_name = $_POST['routine_name'];
  $pomodoro = $_POST['pomodoro'];
  $short_break = $_POST['short_break'];
  $long_break = $_POST['long_break'];
  $sessionArray = $_POST['sessionArray'];


$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"routine_name" => $routine_name,
		"pomodoro" => $pomodoro,
		"short_break" => $short_break,
		"long_break" => $long_break 
);

// $result = $db->users->findOne(array("email" => $email,"password"=>$password));
$is_exist = $db->routine->findOne(array("routine_name" => $routine_name, "user_id" => $user_id));

if(!$is_exist)
{
  $is_insert = $db->Session->insertOne($to_insert);
  if($is_insert)
  {
      $json_return['status'] = true;
      $forSubtask = $db->routine->findOne(array("routine_name" => $routine_name, "user_id" => $user_id));
      $objId = $forSubtask['_id']->__toString();

      foreach($subtaskName as $key => $value){
      $to_insert_subtask = array(
        "routineId" => $objId,
        "name" => $value['name'],
        "notes" => $value['notes']
      );

      $db->sessionTask->insertOne($to_insert_subtask);
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

