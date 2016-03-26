#!/usr/bin/php
<?php

include('header.php');

echo"Enter as --";
echo" 1) Registered User 2) Guest 3) Site Administrator".PHP_EOL;
echo"Enter your option or 'e' to exit ->  ";
$input = fopen("php://stdin","r");
$line = fgets($input);
switch(trim($line))
{
	case "1":
	echo PHP_EOL;
	include ('user_login.php');

	break;
	case "2":
	echo PHP_EOL;
	include ('guest.php');
	break;

	case "3":
	echo PHP_EOL;
	include ('admin_login.php');
	break;
	
	case "e":
	echo "Come again!".PHP_EOL;
	break;

default:
	echo "Try again";
	break;
}



?>
