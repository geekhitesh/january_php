<?php include('header.php'); ?>

<html>



<h1>Welcome to About us</h1>

<?php 
		if(isset($_COOKIE["language"])) 
			echo "Default Lanugage:".$_COOKIE["language"]; 
?>
</html>

<?php include('footer.php'); ?>