<?php

include 'database.php';
$where = array(
    'user_id' => $_POST['user_id']
);


$select_fields = array(
    'task_name' => 1,
    'due_date' => 1,
);

$options = array(
    'projection' => $select_fields
);
$cursor = $db -> groupTask -> find($where, $options);

$docs = $cursor->toArray();

echo json_encode($docs);
  
?>