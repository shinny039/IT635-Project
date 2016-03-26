
<?php
include_once('header.php');

echo PHP_EOL;
echo "1)View items".PHP_EOL;
echo"You dont have any option, Enter 1 or 'e' to exit: ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('view_products.php');
        break;
        case "e":
        case "exit":
	break;
        default:
        echo "Invalid option";
        break; 
}   



?>
