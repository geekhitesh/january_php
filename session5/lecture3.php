<?php


include('db_connection.php');
include('user_db_functions.php');
include('user_html_functions.php');


	$conn = connect();
	$result = getAllUsers($conn);
	convertUsersToTable($result);


?>