<?php

/**

if it is monday, it will rain today
if it is tuesday, it will be sunny.
if it is wednesday, it will rain.
**/


$day="Wednesday";

if($day=="Monday" || $day=="Wednesday") {
	
	echo "It will rain today.";
	
} else if($day=="Tuesday") {
	
	echo "It will be sunny.";
	
} else {
	
	echo "Bad Input";
}

?>