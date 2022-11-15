<?php
	include 'database.php';

    
$where = array(
    'user_id' => $_POST['user_id']
);

$select_fields = array(
    'routine_name' => 1,
    'pomodoro' => 1,
    'short_break' => 1,
    'long_break' => 1
);

$options = array(
    'projection' => $select_fields
);

$cursor = $db->session->find($where, $options);
$docs = $cursor->toArray();
$json_return = array();
$json_array = array();

foreach ($docs as $key => $value){
    $subtask = array();
    //for subtask
    $where = array(
        'routineId' => $value['_id']->__toString()
    );
    $select_fields = array(
        // '_id' => 1,
        'name' => 1,
        'notes' => 1
        
    );
    $options = array(
        'projection' => $select_fields
    );

    $subtaskqry = $db->sessionTask->find($where, $options);
    $return = $subtaskqry->toArray();

    foreach ($return as $session_task){
        $subtask[] = $session_task;
    }

    //end subtask
    $json_array['id'] = $value['_id'];
    $json_array['pomodoro'] = $value['pomodoro'];
    $json_array['routine_name'] = $value['routine_name'];
    $json_array['short_break'] = $value['short_break'];
    $json_array['long_break'] = $value['long_break'];
    $json_array['session_task'] = $subtask;
    $json_return[] = $json_array;
    
}
echo json_encode($json_return);
?>

