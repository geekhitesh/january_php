<?php 
	
	include('header.php');
    include('../session6/User.php');	
	include('check_session.php');
   /* session_start();
	if(isset($_SESSION["user_id"])) {
		$user_id = $_SESSION["user_id"];
	} else {
		header('location: index.php');
	}*/
	
	$user_id = $_SESSION["user_id"];
	$user = new User();
	$record = $user->detailsById($user_id);
	//var_dump($record);
?>

<html>



<h1>Welcome <?php echo $record["user_name"]; ?> to Home</h1>

</html>



<?php

$language = "English";

if(isset($_GET["language"])) {
	
	$language = $_GET["language"];
	
}

setcookie("language",$language,time() + 3600, "/");


?>

<?php include('footer.php'); ?>