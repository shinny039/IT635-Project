<?php

include_once('connect_to_db.php');

echo" Login as Registered User ".PHP_EOL;

echo"Enter Username".PHP_EOL;
$input = fopen("php://stdin","r");
$username = trim(fgets($input));

echo"Enter Password".PHP_EOL;
system('stty -echo');
$password = trim(fgets($input));
system('stty echo');

if($username == "user" && $password == "password")
{
	include('user_perform_actions.php');
}
else
{
	echo "Access Denied";	
	exit;
}






?>
