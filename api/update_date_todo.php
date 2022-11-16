<?php
include 'database.php';
$id    = $_POST['id'];
// $input = $_POST['input'];



$json_return = array();

$where = array(
    '_id' => new MongoDB\BSON\ObjectId ($id)
);
// $select_fields = array(
//     'task_name' => 1,
//     'start_date' => 1
// );
// $options = array(
//     'projection' => $select_fields
// );
$cursor = $db->groupTask->find($where);
$docs = $cursor->toArray();

if($_POST['key'] == 'end'){
    $for_update_section['end_time'] = $_POST['time'];
    $for_update_section['end_date'] = $_POST['date'];

    $is_insert = $db->groupTask->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => $for_update_section]
    );
}

if(!isset($docs[0]['start_date'])){
        $for_update_section['start_date'] = $_POST['date'];
        $for_update_section['start_time'] = $_POST['time'];

    
        $is_insert = $db->groupTask->updateOne(
            [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
            [ '$set' => $for_update_section]
        );
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);


?>