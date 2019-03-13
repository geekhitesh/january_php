<?php include('header.php');

	session_start();
	if(isset($_SESSION["user_id"])) {
		header('location: home.php');
	}
	
?>

<html>


<form method="POST" action="check_auth.php">

Username:<input type="text" id="user_id" name="user_id"  value=""/><br/>
Password:<input type="password" id="password" name="password"  value=""/><br/>

<input type="submit" name="submit" value="login"/>
</form>

</html>

<?php include('footer.php'); ?>