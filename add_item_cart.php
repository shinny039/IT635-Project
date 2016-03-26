
<?php

include('header.php');

echo"Enter Product name to add to cart: ".PHP_EOL;
$input=fopen("php://stdin","r");
$trim= fgets($input);
$product_name = trim($trim);
echo"Enter quantity: ".PHP_EOL;
$trim1= fgets($input);
$quantity = trim($trim1);

$ptotal=

	// See if that product name is an identical match to another product in the system
	$mysqli = $conn->query("SELECT price FROM products WHERE product_name='$product_name' LIMIT 1");
	$productMatch = $mysqli->num_rows; // count the output amount
	
	$row= $mysqli->fetch_assoc();
	echo "Total Price:$".$ptotal=$row['price'] * $quantity;

    if ($productMatch < 0) {
		echo 'Sorry the Product does not exist.'.PHP_EOL;
		exit();
	}
	
	$sql = $conn->query("INSERT INTO cart(cart_id, product_name, product_quantity, ptotal) values 
        (1,'$product_name','$quantity','$ptotal')") or die (mysqli_connect_error());

include_once('footer.php');

?>
