#!/usr/bin/php

<?php

include('header.php');

echo"Enter Product name: ".PHP_EOL;
$input=fopen("php://stdin","r");
$product_name = trim(fgets($input));
echo"Enter Price: ".PHP_EOL;
$price = trim(fgets($input));
echo"Enter Details: ".PHP_EOL;
$details= fgets($input);
echo"Enter Category: ".PHP_EOL;
$category= trim(fgets($input));


	$mysqli = $conn->query("SELECT id FROM products WHERE product_name='$product_name' ");
	$productMatch = $mysqli->num_rows; 
    if ($productMatch > 0) {
		echo 'Sorry you tried to place a duplicate "$Product Name" into the database.'.PHP_EOL;
		exit();
	}
	
	$sql = $conn->query("INSERT INTO products (product_name, price, date_added) 
        VALUES('$product_name','$price',now())") or die (mysqli_connect_error());

	$mysqli = $conn->query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1")->fetch_object()->id;
	//$row = $mysqli->fetch_assoc();
	//print ""."$mysqli";

	$sql = $conn->query("INSERT INTO category (product_id, details, category) 
        VALUES('$mysqli','$details','$category')") or die (mysqli_connect_error());

include_once('footer.php');

?>
