<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'phoneshop';

$conn = mysqli_connect($server_host,$server_username,$server_password,$database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>