<?php


require_once __DIR__ .'/vendor/autoload.php';

$mongo_uri = getenv('MONGODB_URI')
$con = new MongoDB\Client($mongo_uri);
$db = $con->pomodoro;


?>