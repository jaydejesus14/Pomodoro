<?php


require_once __DIR__ .'/vendor/autoload.php';

$config_var = getenv('MONGODB_URL');
$con = new MongoDB\Client($config_var);
$db = $con->pomodoro;

?>