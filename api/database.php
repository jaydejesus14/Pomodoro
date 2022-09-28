<?php
require_once __DIR__ .'/vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->pomodoro;


?>