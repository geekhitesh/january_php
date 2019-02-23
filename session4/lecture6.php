<?php

$arr = array(2,2,2,2,2,2,2,2,2);
echo "<pre>";
print_r($arr);

$count = count($arr);
$sum = 0;
for($i=0;$i<$count;$i++) {
	if(($i+1)%2==0) {
		$value = $arr[$i] ;
		$arr[$i] = $value -1;
	}
	else {
		$value = $arr[$i] ;
		$arr[$i] = $value +1;
	}
}

print_r($arr);
echo "</pre>";


?>