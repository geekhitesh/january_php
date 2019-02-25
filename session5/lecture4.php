<?php

include('db_connection.php');
include('user_db_functions.php');
include('user_html_functions.php');

$city = $_GET["city"];
// list of users who lives in Faridabad

$conn = connect();
$result = getUserByCity($conn,$city);
convertUsersToTable($result);



?>