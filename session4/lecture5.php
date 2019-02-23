<?php

$arr = array(1,2,3,4,5,4,4,5,55);
print_r($arr);
echo "<br/>";
$count = count($arr);
$sum = 0;
for($i=0;$i<$count;$i++) {
	$element = $arr[$i]; // $i=0, $arr[$i] = $arr[0]
	echo "current pointer:$i;Current Element:$element;current sum:$sum;";
	$sum = $sum + $element;
	echo "new sum:$sum<br/>";
}

echo "Sum=$sum";

?>