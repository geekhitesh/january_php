<?php


function connect() {
    $servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "january_php";

	$conn = new mysqli($servername, $username, $password,$schema);
	if ($conn->connect_error)
		die("unable to connect");
	
	return $conn;
}



?>