<?php

class User {
	private $name = "Hitesh";
	private $password = "01230";
	private $age;
	private $city;
	
	public function login($n,$p) {
		if($n == $this->name && $p == $this->password) {
			echo "Login Successful";
		} else {
			echo "Login Failed.";
		}
	}
	
	public function create() {
		
	}
	
	public function display() {
		
	}
	
	public function displayAll() {
		
	}
	
	public function welcome($name) {
		echo "Welcome $name to OOPS class.";
	}
}

$name = $_GET["name"];
$password = $_GET["password"];

$user = new User();

//$user->welcome($name);

$user->login($name,$password);

?>