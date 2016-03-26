<?php

include_once('header.php');

echo "Enter your details to place Order".PHP_EOL; 

echo "First name".PHP_EOL;
$input=fopen("php://stdin","r");
$first=trim(fgets($input));

echo "Last name".PHP_EOL;
$last=trim(fgets($input));

echo "Enter addresss 1".PHP_EOL;
$add1=trim(fgets($input));

echo "Enter addresss 2".PHP_EOL;
$add2 = trim(fgets($input));

echo "Post code".PHP_EOL;
$postcode = trim(fgets($input));

echo "Phone No:".PHP_EOL;
$phone = trim(fgets($input));

echo "Email-id".PHP_EOL;
$email = trim(fgets($input));

$mysqli=$conn->query("SELECT * FROM cart WHERE cart_id=1");
$row=$mysqli->fetch_assoc();
echo $product_name=$row['product_name'];
echo $product_quantity=$row['product_quantity'];

$sql = $conn->query("INSERT INTO orders(product_name , product_quantity, firstname, surname, add1, add2, postcode, phone, email)		 		 
			 		values ('$product_name', '$product_quantity', '$first', '$last', '$add1','$add2', '$postcode','$phone', '$email')");
echo PHP_EOL."Your order has been added".PHP_EOL;

include 'footer.php';
?>





