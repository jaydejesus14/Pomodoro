<?php
	include 'database.php';
    $id = $_POST['id'];

    // $result = $db->groupTask->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));

    $where = array(
        'majorTaskId' => $id
    );

    $select_fields = array(
        'subtaskName' => 1,
        'note' => 1,
    );
    
    $options = array(
        'projection' => $select_fields
    );
    $result = array();
    $cursor = $db->majorSubTask->find($where, $options);

    $return_major_task = $db->groupTask->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));
    $result['major_task'] = $return_major_task; 
    $result['subtask'] = $cursor->toArray();
    echo json_encode($result);
?>

