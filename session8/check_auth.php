<?php

include('../session6/User.php');

$id = $_POST['user_id'];
$password = $_POST['password'];

$user = new User();

$user_id = $user->login($id,$password);

if($user_id !="00000") {
	header("Location: home.php");
	session_start();
	$_SESSION["user_id"] = $user_id;
}
else {
	echo "00000";
}

?>