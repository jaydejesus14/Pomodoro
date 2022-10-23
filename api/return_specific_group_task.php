<?php
	include 'database.php';
    $id = $_POST['id'];

    $result = $db->groupTask->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));

    $where = array(
        'user_id' => $_POST['user_id']
    );

    $select_fields = array(
        'pomodoro' => 1,
        'task_name' => 1,
        'short_break' => 1,
        'long_break' => 1
    );
    
    $options = array(
        'projection' => $select_fields
    );
  
    echo json_encode($result);
?>

