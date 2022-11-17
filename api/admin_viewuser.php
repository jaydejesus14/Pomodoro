<?php
include 'database.php';

$json_return = array();

$user_select_fields = array(
    'Fname' => 1,
    'Lname' => 1,
    'user_name' => 1,
    'email' => 1
);

$user_options = array(
    'projection' => $user_select_fields
);
$cursor = $db->users->find($user_options);
$viewusers = $cursor->toArray();

$json_return['viewusers'] = $viewusers;


 ?>