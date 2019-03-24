<?php
error_reporting(0);
include('../session6/User.php');

$id = $_POST['user_id'];

$user = new User();

$data = $user->exists($id);
echo "<pre>";
try {
	if ($data ==0) {
		throw new Exception("User doesn't exist");
	}
	
	echo $data;
	
}catch(Exception $ex) {
	
	echo "<b>Message:</b>".$ex->getMessage()."<br/>".
	     "<b>File:</b>".$ex->getFile()."<br/>".
		 "<b>Line:</b>".$ex->getLine()."<br/>";
}

echo "</pre>";
?>