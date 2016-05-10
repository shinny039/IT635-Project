#!/usr/bin/php

<?php

include_once('header.php');

echo"Enter Product name to Edit: ".PHP_EOL;
$input=fopen("php://stdin","r");
$line2= fgets($input);
$product_name = trim($line2);


	$mysqli = $conn->query("SELECT * FROM products WHERE product_name='$product_name' LIMIT 1");
	$row=$mysqli->fetch_assoc();
	$id=$row["id"];
	echo $id;	
	$productMatch = $mysqli->num_rows; 
    if ($productMatch > 0) {

echo "Enter new information to change: ".PHP_EOL;

echo"Enter Product name: ".PHP_EOL;
$line2= fgets($input);
$product_name = trim($line2);
echo"Enter Price: ".PHP_EOL;
$line3= fgets($input);
$price = trim($line3);
echo"Enter Details: ".PHP_EOL;
$line4= fgets($input);
$details=$line4;
echo"Enter Category: ".PHP_EOL;
$line5= fgets($input);
$category= trim($line5);

		$mysqli = $conn->query(" UPDATE products SET product_name = '$product_name' , price = '$price' , details = '$details', category = '$category' WHERE id='$id' ");
		echo "Product Updated";
	}
    else{
		echo "Product does not exit";
	}

include_once('footer.php');
?>
