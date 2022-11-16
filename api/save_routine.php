<?php
	include 'database.php';
  $id = $_POST['id'];
 $routine_name = $_POST['routine_name'];
  $pomodoro = $_POST['pomodoro'];
  $short_break = $_POST['short_break'];
  $long_break = $_POST['long_break'];
  $sessionArray = $_POST['sessionArray'];


$json_return = array();
$json_return['status'] = false;
// $to_insert = array(
// 		"user_id" => $user_id,
// 		"routine_name" => $routine_name,
// 		"pomodoro" => $pomodoro,
// 		"short_break" => $short_break,
// 		"long_break" => $long_break 
// );

$is_update = $db->session->updateOne(
    [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
    // [ '$set' => [ 'is_complete' => true, 'pomodoro' => $pomodoro, 'short_break' => $short_break, 'long_break' => $long_break, 'routine_name' => $routine_name,  ]]
    // );
    [ '$set' => [  'pomodoro' => $pomodoro, 'short_break' => $short_break, 'long_break' => $long_break, 'routine_name' => $routine_name,  ]]
    );

$is_delete = $db->sessionTask->deleteMany(['routineId' => $id]);

    foreach($sessionArray as $key => $value){
        $to_insert_subtask = array(
            "routineId" => $id,
            "name" => $value['name'],
            "notes" => $value['notes']
        );
        $db->sessionTask->insertOne($to_insert_subtask);
    }


// $result = $db->users->findOne(array("email" => $email,"password"=>$password));
// $is_exist = $db->session->findOne(array("routine_name" => $routine_name, "user_id" => $user_id));

// if(!$is_exist)
// {
//   $is_insert = $db->session->insertOne($to_insert);
//   if($is_insert)
//   {
//       $json_return['status'] = true;
//       $forSubtask = $db->session->findOne(array("routine_name" => $routine_name, "user_id" => $user_id));
//       $objId = $forSubtask['_id']->__toString();

//       foreach($sessionArray as $key => $value){
//       $to_insert_subtask = array(
//         "routineId" => $objId,
//         "name" => $value['name'],
//         "notes" => $value['notes']
//       );

//       $db->sessionTask->insertOne($to_insert_subtask);
//     }
//   }
//   else
//   {
//       $json_return['status'] = false;
//       $json_return['message'] = 'something went wrong';
//   }
// }else{
//   $json_return['status'] = false;
//   $json_return['message'] = 'Name is already exist';
// }

echo json_encode($json_return);
?>

