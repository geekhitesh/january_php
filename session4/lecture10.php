<?php

echo "<pre>";
$user = array();

$personal = array();
$personal["name"] = "Hitesh";
$personal["city"] = "Noida";
$personal["state"] = "UP";

$company = array();
$company["name"] = "IBM";
$company["city"] = "Noida";
$company["state"] = "UP";
$company["zipcode"] = "201301";


$user["personal_detail"] = $personal;
$user["company_detail"] = $company;


$users = array();

$user2 = $user;

$users[0] = $user;
$users[1] = $user2;
 

print_r($users);

echo "</pre>";
?>