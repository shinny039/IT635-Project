
<?php

include('header.php');

echo"Enter Product name to add to cart: ".PHP_EOL;
$input=fopen("php://stdin","r");
$trim= fgets($input);
$product_name = trim($trim);
echo"Enter quantity: ".PHP_EOL;
$trim1= fgets($input);
$quantity = trim($trim1);

	
	$mysqli = $conn->query("SELECT price FROM products WHERE product_name='$product_name' LIMIT 1");
	$productMatch = $mysqli->num_rows; // count the output amount
	//echo "$productMatch";
	$row= $mysqli->fetch_assoc();
	$price= $row['price'];
	$ptotal=$price * $quantity.PHP_EOL;

$mysqli1 = $conn->query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");
$row1 = $mysqli1->fetch_assoc();
$id= $row1['id'];
    if ($productMatch < 1) {
		echo "Sorry the Product does not exist.".PHP_EOL;
		exit();
	}
	
	else{
	echo "drfgdr";
	$sql = $conn->query("INSERT INTO cart(cart_id, product_quantity, ptotal,product_id) values 
        (1,'$quantity','$ptotal','$id')") or die (mysqli_connect_error());
}

$mysqli1 = $conn->query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");

$mysqli = $conn->query("SELECT * FROM cart LIMIT 1");

	$orderMatch = $mysqli->num_rows;
    	//echo "--------------------------------------------------------".PHP_EOL;
	echo "Your cart has".PHP_EOL;
	while($row = $mysqli->fetch_assoc())
		{
		echo "Product Name:".$product_name.PHP_EOL;
		echo "Product ID:".$id.PHP_EOL;
		echo "Product Price:$".$price.PHP_EOL;
		echo "Total:".$row['ptotal'].PHP_EOL;
		echo "--------------------------------------------------------".PHP_EOL;		

		}



include_once('footer.php');

?>
