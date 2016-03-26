<?php
include_once('header.php');

echo PHP_EOL;
echo "1)Add items to shopping cart  2)Place order 3) View Order 4)Cancel Order".PHP_EOL;
echo"Enter your option: ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('add_item_cart.php');
        break;
        case "2":
        include ('place_order.php'); 
	break;
	case "3":
        include ('order_history.php'); 
	break;        
	case "4":
	include ('remove_order.php'); 
        break;	
	case "exit":
	break;
        default:
        echo "Invalid option";
        break; 
}   




?>
