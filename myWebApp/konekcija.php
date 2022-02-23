<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "mywebapp";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
	die("Connection with DB does not exist:" . mysqli_connect_error());
}

?>