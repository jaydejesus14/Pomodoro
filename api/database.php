<?php
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db="pomodoro";
	// $conn = mysqli_connect($servername, $username, $password,$db);
require_once __DIR__ .'/vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");

$db = $con->pomodoro;


?>