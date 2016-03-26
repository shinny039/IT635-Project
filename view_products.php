
<?php

include_once('header.php');

echo "PRODUCTS".PHP_EOL.PHP_EOL;

$mysqli = $conn->query("SELECT * FROM products");
	$productMatch = $mysqli->num_rows;
    	
	while ($productMatch > 0) 
	{
		
	while($row = $mysqli->fetch_assoc())
		{

		echo "Product Name:".$row['product_name'].PHP_EOL;
		echo "Price:$".$row['price'].PHP_EOL;
		echo "Category:".$row['category'].PHP_EOL;
		echo "Deatils:".$row['details'].PHP_EOL;
		echo "--------------------------------------------------------".PHP_EOL;		

		}
	
break;	}

include_once('footer.php');

?>
