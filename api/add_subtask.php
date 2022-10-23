<?php
include 'database.php';

$to_insert_subtask = array(
    'majorTaskId' => $_POST['id'],
    'subtaskName' => $_POST['name']
);

$is_insert = $db->majorSubTask->insertOne($to_insert_subtask);

if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>