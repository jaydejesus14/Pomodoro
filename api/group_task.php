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
    'user_id' => $_POST['user_id']
);
$select_fields = array(
    'pomodoro' => 1,
    'task_name' => 1,
    'short_break' => 1,
    'long_break' => 1,
    'due_date' => 1,
    'end_date' => 1
);
$options = array(
    'projection' => $select_fields
);
$cursor = $db->groupTask->find($where, $options);
$docs = $cursor->toArray();
$json_return = array();
$json_array = array();
foreach ($docs as $key => $value){
    $subtask = array();
    //for subtask
    if(!isset($value['end_date'])){

    
    $where = array(
        'majorTaskId' => $value['_id']->__toString()
    );
    $select_fields = array(
        'subtaskName' => 1,
        'note' => 1
        
    );
    $options = array(
        'projection' => $select_fields
    );

    $subtaskqry = $db->majorSubTask->find($where, $options);
    $return = $subtaskqry->toArray();

    foreach ($return as $subtaskData){
        $subtask[] = $subtaskData;
    }

    //end subtask
    $json_array['id'] = $value['_id'];
    $json_array['pomodoro'] = $value['pomodoro'];
    $json_array['task_name'] = $value['task_name'];
    $json_array['short_break'] = $value['short_break'];
    $json_array['long_break'] = $value['long_break'];
    $json_array['due_date'] = $value['due_date'];
    $json_array['subtask'] = $subtask;
    $json_return[] = $json_array;

    }
    
}
echo json_encode($json_return);
?>

