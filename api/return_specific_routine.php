<?php
	include 'database.php';
    $id = $_POST['id'];


    $where = array(
        'routineId' => $id
    );

    $select_fields = array(
        'name' => 1,
        'notes' => 1,
        'is_complete' => 1
    );
    
    $options = array(
        'projection' => $select_fields
    );
    $result = array();
    $cursor = $db->sessionTask->find($where, $options);

    $return_routine = $db->session->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));
    $result['routine_name'] = $return_routine; 
    $result['subtask'] = $cursor->toArray();
    echo json_encode($result);
?>

