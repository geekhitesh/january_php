<?php

class User {
	private $name;
	private $password;
	private $age;
	private $city;
	
	public function login($user_id,$input_password) {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "january_php";

		$conn = new mysqli($servername, $username, $password,$schema);
		if ($conn->connect_error)
			die("unable to connect");
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id' and pass='$input_password'";
		$result = $conn->query($query);
		$rows = $result->num_rows;
		
		if($rows ==1) {
			echo "Login Successful";
		} else
			echo "Login Failed.";
		
	}
	
	public function create() {
		
	}
	
	public function display($user_id) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "january_php";

		$conn = new mysqli($servername, $username, $password,$schema);
		if ($conn->connect_error)
			die("unable to connect");
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id'";
		$result = $conn->query($query);
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
	}
	
	public function displayAll() {
		
	}
}

/*$id = $_POST["user_id"];
$password = $_POST["password"];*/

$user = new User();

//$user->login($id,$password);

$user->display(1001);

?>