#!/usr/bin/php

<?php
include('header.php');

echo" Login as Site Administrator ".PHP_EOL;

echo"Enter Username".PHP_EOL;
$input = fopen("php://stdin","r");
$username = trim(fgets($input));

echo"Enter Password".PHP_EOL;
system('stty -echo');
$password = trim(fgets($input));
system('stty echo');

if($username == "admin" && $password == "password")
{
	include('perform_actions.php');
}
else
{
	echo "Access Denied";	
	
}

include('footer.php');
?>

