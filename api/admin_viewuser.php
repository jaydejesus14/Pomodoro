<?php
include 'database.php';

// $where = array (
//     'email' => 1
// );

// $select_fields = array(
//     'Fname' => 1,
//     'Lname' => 1,
//     'user_name' => 1,
//     'email' => 1
// );

// $options = array(
//     'projection' => $select_fields
// );



// $cursor = $db->users->find($options);
// $docs = $cursor->toArray();
$ne = "pivotacc.pomodoro@gmail.com";
$cursor = $db->users->find();

// echo '<pre>';

// foreach ( $cursor as $current )
//     print_r($current);

// echo '</pre>';

$docs = $cursor->toArray();

echo json_encode($docs);

 ?>