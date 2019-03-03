<?php

class User {
	private $conn;
	private $name;
	private $password;
	private $age;
	private $city;
	
	public function __construct() {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "january_php";

		$this->conn = new mysqli($servername, $username, $password,$schema);
		if ($this->conn->connect_error)
			die("unable to connect");
		
		echo "Database connection created successfully<br/>";
	}
	
	public function login($user_id,$input_password) {
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id' and pass='$input_password'";
		$result = $this->conn->query($query);
		$rows = $result->num_rows;
		
		if($rows ==1) {
			echo "Login Successful<br/>";
		} else
			echo "Login Failed.<br/>";
		
	}
	
	public function create() {
		
	}
	
	public function display($user_id) {
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id'";
		$result = $this->conn->query($query);
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
	
	
	public function __destruct() {
		$this->conn->close();
		echo "DB Connection Closed Successfully<br/>";
	}
}

$id = $_POST["user_id"];
$password = $_POST["password"];

$user = new User();

$user->login($id,$password);

$user->display($id);

?>