
<?php
include_once('connect_to_db.php');

echo PHP_EOL."    To go back to menu press '1' or 'e' to exit:";
$input = fopen("php://stdin","r");
$line = fgets($input);
switch(trim($line))
{
	case "1":
	echo PHP_EOL;
	include ('index.php');
	
	case "e":
	echo PHP_EOL."Come again!".PHP_EOL;
	break;

default:
	echo "Try again";
	break;
}

fclose($input);
?>
