<?php

include 'database.php';

$cursor = $db -> groupTask -> find();
$route = $db -> session -> find();
$date = $cursor -> toArray();
$routine = $route -> toArray();

echo json_encode(array_merge($date,$routine));

?>