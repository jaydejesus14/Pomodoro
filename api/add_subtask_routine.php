<?php
include 'database.php';

$to_insert_subtask = array(
    'routineId' => $_POST['id'],
    'name' => $_POST['name'],
    'notes' => $_POST['note']
);

$is_insert = $db->sessionTask->insertOne($to_insert_subtask);

if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>