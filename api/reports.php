<?php
	include 'database.php';

$user_id = $_POST['user_id'];


$json_return = array();
$assessment_where_clause = array(
    'user_id' => $user_id
);

$assessment_select_fields = array(
    'points' => 1,
    'date_created' => 1,
    'time_created' => 1
);

$assessment_options = array(
    'projection' => $assessment_select_fields
);

$cursor = $db->assessment->find($assessment_where_clause, $assessment_options);
$assessments = $cursor->toArray();

$json_return['assessments'] = $assessments;

$todo_where_clause = array(
    'user_id' => $user_id
);

$todo_select_fields = array(
    'task_name' => 1,
    'pomodoro' => 1,
    'start_date' => 1,
    'end_date' => 1,
    'start_time' => 1,
    'end_time' => 1
);

$todo_options = array(
    'projection' => $todo_select_fields
);

$cursor = $db->groupTask->find($todo_where_clause, $todo_options);
$todo = $cursor->toArray();
$todoArray = array();
foreach($todo as $key => $value){
    if(isset($value['end_time'])){
        $subtask_where_clause = array(
            'majorTaskId' => $value['_id']->__toString()
        );
        
        $subtask_select_fields = array(
            'subtaskName' => 1
        );
        
        $subtask_options = array(
            'projection' => $subtask_select_fields
        );
        
        $cursor = $db->majorSubTask->find($subtask_where_clause, $subtask_options);
        $subtask_no = $cursor->toArray();
        $value['subtask_no'] = count($subtask_no);   

        $todoArray[] = $value;
    }
}
$json_return['task'] = $todoArray;

echo json_encode($json_return);
?>

