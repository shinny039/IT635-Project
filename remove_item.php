#!/usr/bin/php

<?php

include_once('connect_to_db.php');

echo"Enter Product name: ".PHP_EOL;
$input=fopen("php://stdin","r");
$line2= fgets($input);
$product_name = trim($line2);


	$mysqli = $conn->query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");
	$productMatch = $mysqli->num_rows; 
    if ($productMatch > 0) {
		$mysqli = $conn->query("DELETE FROM products WHERE product_name='$product_name'");
		echo "Product is removed from the database";
	}
    else{
		echo "Product does not exit";
	}

?>
