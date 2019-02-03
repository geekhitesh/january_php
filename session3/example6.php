<?php

/**

if it is monday, it will rain today
if it is tuesday, it will be sunny.
if it is wednesday, it will cloudy.
**/


echo "<br/>I am going inside switch";
$day = $_GET["day"];

$time = $_GET["time"];


switch($day) {
	
	case "Monday":
	    echo "<br/>Case1:It will rain today.";
		break;
	case "Tuesday":
		echo "<br/>Case2:It will sunny.";
		break;
	case "Wednesday":
		echo "<br/>Case3:It will be cloudy.";
		break;
	case "Thursday":
		if($time < 12)
			echo "<br/>Case4:it will be sunny";
		else 
			echo "<br/>Case4:it will be cloudy";
		break;
	default:
		echo "<br/>Case default:It is bad input";
}

echo "<br/>I am out of switch";



?>