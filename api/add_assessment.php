<?php
	include 'database.php';
  $user_id = $_POST['user_id'];
  $points = $_POST['points'];
  $time = $_POST['time'];
  $date = $_POST['date'];



$json_return = array();
$json_return['status'] = false;
$to_insert = array(
		"user_id" => $user_id,
		"points" => $points,
        "time_created" => $time,
        "date_created" => $date
);

$is_insert = $db->assessment->insertOne($to_insert);
if($is_insert){
    $json_return['status'] = 'success';
}else{
    $json_return['status'] = 'failed';
}

echo json_encode($json_return);
?>

