<?php include('header.php');

	session_start();
	if(isset($_SESSION["user_id"])) {
		header('location: home.php');
	}
	
?>

<html>


<script>

	function checkAuth() {
		var user_id = document.getElementById("user_id").value;
		var password = document.getElementById("password").value;
		document.getElementById("error").style.display="none";
		//alert("User:"+user_id+" password:"+password);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			 var status = this.responseText;
			 if(status =="00000") {
				 document.getElementById("error").style.display="block";
			 } else {
				 window.location.replace("home.php");
			 }
			 
			}
		  };
		  xhttp.open("POST", "check_auth.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("user_id="+user_id+"&password="+password);
	}


</script>



<form method="POST" action="check_auth.php">

<div id="error" style="color:red;text-align:center;display:none;">
<b>username and password didn't match.</b>
</div>
Username:<input type="text" id="user_id" name="user_id"  value=""/><br/>
Password:<input type="password" id="password" name="password"  value=""/><br/>

<input type="button" onClick="checkAuth();" value="login"/>
<a href="forgot_password.php">Forgot Password?</a>
</form>

</html>

<?php include('footer.php'); ?>