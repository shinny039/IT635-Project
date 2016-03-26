#!/usr/bin/php
<?php

$db_host = "localhost"; 
// username for the MySQLi database here 
$db_username = "root";  
// password for the MySQLi database here 
$db_pass = "asdfasdf";  
// name for the MySQLi database here 
$db_name = "shopping"; 

//  actual connection here  
$conn = new mysqli("$db_host","$db_username","$db_pass",$db_name);
if($conn->connect_error)
{
	 die ("could not connect to database");
}
else
{
	//echo "Connection Successsful";
}


?>
