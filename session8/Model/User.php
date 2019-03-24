<?php

class User {
	private $conn;
	
	public function __construct() {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "january_php";
		
		try 
		{
			$this->conn = new mysqli($servername, $username, $password,$schema);
			
			if ($this->conn->connect_error)
				throw new Exception("Unable to connect");
		
		} catch(Exception $ex) {
			echo "<b>Message:</b>".$ex->getMessage()."<br/>".
				 "<b>File:</b>".$ex->getFile()."<br/>".
				 "<b>Line:</b>".$ex->getLine()."<br/>";
				 die();
		}
	}
	
	public function login($user_id,$input_password) {
		$encrypted_password = md5($input_password);
		$query = "select user_id,user_name,user_city from user where user_id='$user_id' and pass='$encrypted_password'";
		$result = $this->conn->query($query);
		$rows = $result->num_rows;
		
		if($rows ==1) {
			return $user_id;
		} else
			return "00000";
		
	}
	
	public function create($name,$age,$city,$password) {
		$sql = "insert into user(user_name,user_age,user_city,pass) values('$name',$age,'$city','$password')";
		
		$result = $this->conn->query($sql);
		
	}
/*	
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
*/	
	public function displayAll() {
		
	}

	public function detailsById($user_id) {
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id'";
		$result = $this->conn->query($query);
		$record = array();
		while($row = mysqli_fetch_assoc($result)) {
			$record = $row;
		}
		return $record;
	}	
	
	public function exists($user_id) {
		
		$query = "select user_id,user_name,user_city from user where user_id='$user_id'";
		$result = $this->conn->query($query);
		$rows = $result->num_rows;	
		return $rows;	
	}	
	
	public function __destruct() {
		$this->conn->close();
	}
}

?>