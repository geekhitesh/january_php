<?php


function getAllUsers($conn) {
	
	$query = "select user_id,user_name,user_city from user";
	
	$result = $conn->query($query);
	
	return $result;
	
}

function getUserById($conn,$user_id) {
	
}

function getUserByCity($conn,$city) {
	$query = "select user_id,user_name,user_city from user where user_city='$city'";
	$result = $conn->query($query);
	return $result;
}


function insertUserRecord($conn,$user_id,$user_name,$user_city,$user_age) {
	$query = "insert into user(user_id,user_name,user_age,user_city) values('$user_id','')";
	$result = $conn->query($query);
	return $result;
}


?>