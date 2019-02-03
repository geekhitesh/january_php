<?php

/**

if it is monday, it will rain today
if it is tuesday, it will be sunny.
if it is wednesday, it will rain.
if it is thursday and time < 12, it will be sunny.
**/


$day="Thursday";
$time=13;

if($day=="Monday" || $day=="Wednesday") {
	
	echo "It will rain today.";
	
} else if($day=="Tuesday") {
	
	echo "It will be sunny.";
	
} else if($day=="Thursday" && $time < 12) {
	
	echo "It will be sunny.";
} else {
	
	echo "Bad Input";
}

?>