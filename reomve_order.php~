#!/usr/bin/php

<?php

include_once('connect_to_db.php');

echo"Enter Order ID: ".PHP_EOL;
$input=fopen("php://stdin","r");
$order_id = trim(fgets($input));


	$mysqli = $conn->query("SELECT * FROM orders WHERE order_id='$order_id' LIMIT 1");
	$orderMatch = $mysqli->num_rows; 
    if ($orderMatch > 0) {
		$mysqli = $conn->query("DELETE FROM orders WHERE order_id='$order_id");
		echo "Your order is removed";
	}
    else{
		echo "Order does not exit";
	}

include_once('footer.php');

?>
