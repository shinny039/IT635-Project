#!/usr/bin/php
<?php

include_once('header.php');


$mysqli = $conn->query("SELECT * FROM orders WHERE order_id = 1");
	$orderMatch = $mysqli->num_rows;
    	
		
	while($row = $mysqli->fetch_assoc())
		{
		echo "Product Name:".$row['product_name'].PHP_EOL;
		echo "Product Quantity:$".$row['product_quantity'].PHP_EOL;
		echo "First Name:".$row['firstname'].PHP_EOL;
		echo "Last Name:".$row['surname'].PHP_EOL;
		echo "Address 1:".$row['add1'].PHP_EOL;
		echo "Address 2:".$row['add2'].PHP_EOL;
		echo "Postcode:".$row['postcode'].PHP_EOL;
		echo "Phone No:".$row['phone'].PHP_EOL;
		echo "Email-id:".$row['email'].PHP_EOL;
		echo "--------------------------------------------------------".PHP_EOL;		

		}


include_once('footer.php');

?>
