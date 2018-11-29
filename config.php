<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service_seek_prov";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn) {
	//echo "connected";
}

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>