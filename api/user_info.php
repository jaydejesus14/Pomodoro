<?php
	include 'database.php';
    $id = $_POST['user_id'];

    // $result = $db->groupTask->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));
    $user_info = $db->users->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));
    
    echo json_encode($user_info);
?>

