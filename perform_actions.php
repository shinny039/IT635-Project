#!/usr/bin/php

<?php
include_once('header.php');

echo PHP_EOL;
echo "1)Add items  2)edit item information 3) Remove".PHP_EOL;
echo"Enter your option: ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('add_item.php');
        break;
        case "2":
        include ('edit_item.php'); 
	break;
        case "3":
	include ('remove_item.php'); 
        break;	
	case "exit":
	break;
        default:
        echo "Invalid option";
        break; 
}   


include_once('footer.php');

?>
