<?php
	include 'database.php';
    // $id = $_POST['user_id'];

    // $result = $db->groupTask->findOne(array( '_id' => new MongoDB\BSON\ObjectId ($id )));
    $user_info = $db->sessionReports->find(array('end_date' => ['$gt' => '2022-10-10', '$lt' => '2023-10-10']));
    $routine = $user_info->toArray();
    echo json_encode($routine);
?>

