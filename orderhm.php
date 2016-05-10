<?php
include_once('header.php');

//$mysqli=$conn->query("SELECT * FROM cart WHERE cart_id=1 LIMIT 1");
//$row=$mysqli->fetch_assoc();

$uri = "mongodb://hodor:hodorhodor@ds017672.mlab.com:17672/shopping";
//$collection= "test";

$conn1 = new MongoClient($uri);
//echo $conn1.PHP_EOL;	

$db = $conn1->selectDB("shopping");
//echo $db.PHP_EOL;

$collection = $db->orders;

$co=$collection->count();
//echo $co;
$cursor = $collection->find(array("Order_id" => "$co"));	
  foreach ($cursor as $res) {

	echo "Order ID:".$res["Order_id"].PHP_EOL ;
	echo "First Name:".$res["First_name"].PHP_EOL ;
	echo "Last Name:".$res["Last_name"].PHP_EOL ;
	echo "Address 1:".$res["Enter_addresss 1"].PHP_EOL ;
	echo "Address 2:".$res["Enter_addresss 2"].PHP_EOL ;
	echo "Postcode:".$res["Post_code"].PHP_EOL;
	echo "Phone No:".$res["Phone_No"].PHP_EOL ;
	echo "Email-id:".$res["Email_id"].PHP_EOL.PHP_EOL.PHP_EOL ;
}

//echo "Product Name".$row['product_id'].PHP_EOL;
//echo "Product Quantity".$row['product_quantity'].PHP_EOL; 

include 'footer.php';
?>
