#!/usr/bin/php

<?php

include_once('connect_to_db.php');


//echo "PRODUCTS".PHP_EOL.PHP_EOL;

//$mysqli = $conn->query("SELECT * FROM products");
//	$productMatch = $mysqli->num_rows;
    	
//	while ($productMatch > 0) 
//	{
		
//	while($row = $mysqli->fetch_assoc())
//		{
//
//		echo "Product Name:".$row['product_name'].PHP_EOL;
//		echo "Price:$".$row['price'].PHP_EOL;
//		echo "Category:".$row['category'].PHP_EOL;
//		echo "Deatils:".$row['details'].PHP_EOL;
//		echo "--------------------------------------------------------".PHP_EOL;		
//
//		}
//	
//break;	}

echo"Enter Product name to remove: ".PHP_EOL;
$input=fopen("php://stdin","r");
$product_name = trim(fgets($input));


	$mysqli = $conn->query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");

	$row = $mysqli->fetch_assoc();
	$id = $row['id'];

	$productMatch = $mysqli->num_rows; 
    if ($productMatch > 0) {
		$mysqli = $conn->query("DELETE FROM products WHERE product_name='$product_name'");
		$mysqli = $conn->query("DELETE FROM category WHERE product_id='$id'");
		echo "Product is removed from the database";
	}
    else{
		echo "Product does not exit";
	}

?>
