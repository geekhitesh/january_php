<?php 
	
	include('header.php');
    include('Model/User.php');	
	include('check_session.php');
	
	$user_id = $_SESSION["user_id"];
	$user = new User();
	$record = $user->detailsById($user_id);
	
	if($record["user_city"] == "Noida")
		include('Views/UserHomeNoida.php');
	else
		include('Views/UserHomeGurgaon.php');
	
	
	
	
	
	include('footer.php');
?>