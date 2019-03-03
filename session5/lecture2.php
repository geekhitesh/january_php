<?php

// create a db connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "january_php";

	$conn = new mysqli($servername, $username, $password,$schema);
	if ($conn->connect_error)
		die("unable to connect");

// fire a query

	$query = "select user_id,user_name,user_city from user";
	
	$result = $conn->query($query);
	
	
	/*while($row = mysqli_fetch_assoc($result)) {
		var_dump($row);
	}*/
	
	//var_dump($result);
	
// loop over the records
    echo "<table border=1>";
	echo "<tr><td>Id</td><td>Name</td><td>City</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>".$row["user_id"]."</td>";
			echo "<td>".$row["user_name"]."</td>";
			echo "<td>".$row["user_city"]."</td>";
		echo "</tr>";
	}
	 echo "</table>";

?>