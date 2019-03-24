<?php

include('../session6/User.php');

	$name = $_POST["name"];
	$age = $_POST["age"];
	$city = $_POST["city"];
	$password = $_POST["password"];
	
	$encryped_password = md5($password);
	
	$user = new User();
	
	$user->create($name,$age,$city,$encryped_password);


?>