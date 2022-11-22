<?php
include 'database.php';
$id    = $_POST['id'];
$pomodoro  = $_POST['pomodoro'];
$short_break = $_POST['short_break'];
$long_break = $_POST['long_break'];



$json_return = array();

if($_POST['key'] == 'routine'){
    $is_insert = $db->session->updateOne(
        [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
        [ '$set' => [ 'pomodoro' => $pomodoro, 'short_break' => $short_break, 'long_break' => $long_break ]]
    );
    if($is_insert){
        $json_return['status'] = 'success';
    }else{
        $json_return['status'] = 'failed';
    }

}
else{

    $is_insert = $db->groupTask->updateOne(
            [ '_id' =>  new MongoDB\BSON\ObjectId ($id)],
            [ '$set' => [ 'pomodoro' => $pomodoro, 'short_break' => $short_break, 'long_break' => $long_break ]]
        );
    if($is_insert){
        $json_return['status'] = 'success';
    }else{
        $json_return['status'] = 'failed';
    }
}
echo json_encode($json_return);


?>