<?php

$dbhost = "database-1.cfoyt8ldwtuy.us-east-2.rds.amazonaws.com";
$dbuser = "webserver";
$dbpass = "Ang&9733";
$dbname = "my_awsproj";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
