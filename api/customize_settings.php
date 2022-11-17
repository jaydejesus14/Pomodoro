<?php
include 'database.php';
$id    = $_POST['id'];
// $input = $_POST['input'];



$json_return = array();


if($_POST['key'] == 'check'){
    $where = array(
        '_id' => new MongoDB\BSON\ObjectId ($id)
    );
    $select_fields = array(
        'start_date' => 1,
    );
    $options = array(
        'projection' => $select_fields
    );
    $cursor = $db->groupTask->find($where, $options)->toArray();
    $result['started'] = $cursor;
   
    echo json_encode($result);
    
   
}

    


?>