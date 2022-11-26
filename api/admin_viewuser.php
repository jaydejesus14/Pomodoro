<?php
include 'database.php';
$search = $_POST['search'];

// $ne = "pivotacc.pomodoro@gmail.com";
$cursor = $db->users->find(array('$or' => array(
    array("Fname" => array('$regex' => $search)),
    array("Lname" => array('$regex' => $search)),
    array("user_name" => array('$regex' => $search)),
    array("email" => array('$regex' => $search))
  )));

// echo '<pre>';

// foreach ( $cursor as $current )
//     print_r($current);

// echo '</pre>';

$docs = $cursor->toArray();

echo json_encode($docs);

 ?>