<?php
require_once __DIR__ .'/vendor/autoload.php';

// $config_var = getenv('MONGODB_URL');
// $con = new MongoDB\Client($config_var);
// $db = $con->pomodoro;

$con = new MongoDB\Client("mongodb+srv://admin:bardug123@pomodoro.ixsez7h.mongodb.net/?retryWrites=true&w=majority");

$db = $con->pomodoro;
?>