<?php

include('User.php');


$id = $_POST["user_id"];
$password = $_POST["password"];
$user = new User();
$user->login($id,$password);
$user->display($id);


?>