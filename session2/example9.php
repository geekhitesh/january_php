<?php

	$original_string = "Hello Mr. XX Pleasure to have you in our team. Mr. XX has 10 years of experience.";
	
	$search = "XX";
	$name = "Saurabh";
	
	$replaced_string = str_replace($search,$name,$original_string);
	echo $replaced_string;

	
	
	//$string = "Hello Mr. $name. Pleasure to have you in our team. Mr. $name has 10 years of experience.";
	
	
?>