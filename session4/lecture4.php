<?php

$arr = array(10,20,30); // array with data
$arr[3] = 40;

$count = count($arr);

//echo "Total Elements: ".$count;


echo "<pre>";

echo $string = "jan-march-aug-dec";

echo "<br/>";
$data = explode("-",$string);

print_r($data);

$imploded_string = implode("#",$data);

echo "<br/>".$imploded_string;

echo "</pre>";

?>