<?php
	include 'database.php';

    $id = $_POST['id'];
    $result = array();
    $result = $db->session->findOne(array("_id" => new MongoDB\BSON\ObjectId ($id)));

    $where = array(
        'routineId' => $id
    );
    $select_fields = array(
        'name' => 1,
        'notes' => 1
    );
    $options = array(
        'projection' => $select_fields
    );
    $sessionTask = $db->sessionTask->find($where, $options)->toArray();
    $result['task'] = $sessionTask; 
    echo json_encode($result);


?>