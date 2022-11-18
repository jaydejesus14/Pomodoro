<?php

include 'database.php';

$cursor = $db -> groupTask -> find();

$date = $cursor -> toArray();

echo json_encode($date);



?>