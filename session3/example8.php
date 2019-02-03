<?php

/****
Print hello world on screen - 100 times

hello world for 1st time
hello world for 2nd time.

1) check condition
2) do work
3) increase counter
4) repeat from step 1

***/


/*echo "Hello World!<br/>";
echo "Hello World!<br/>";
echo "Hello World!<br/>";*/


$counter=0;

while($counter < 10000) {
	
	echo "Hello World for ".($counter+1)." times.!<br/>";
	$times = $counter +1;
	//echo "Hello World for $times times.!<br/>";
	$counter = $counter+1;
}



?>