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

print_r($user);

echo "</pre>";
?>