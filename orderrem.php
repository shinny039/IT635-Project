<?php

$uri = "mongodb://hodor:hodorhodor@ds017672.mlab.com:17672/shopping";
//$collection= "test";

$conn = new MongoClient($uri);
//echo $conn.PHP_EOL;	

$db = $conn->selectDB("shopping");
//echo $db.PHP_EOL;

$collection = $db->orders;

echo"Enter Order ID: ".PHP_EOL;
$input=fopen("php://stdin","r");
$order_id = trim(fgets($input));


$collection->remove(array("Order_id"=> $order_id));
echo "Document deleted successfully" ;  


include 'footer.php';


?>
