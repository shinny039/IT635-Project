
<?php

//$uri = "mongodb://hodor:hodorhodor@ds017672.mlab.com:17672/shopping";


//$conn = new MongoClient($uri);


//$db = $conn->selectDB("shopping");

//$collection = $db->orders;

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

//$collection = $db->createCollection("orders");
//echo "Collection selected succsessfully";
	
   $document = array( 
	"Order_id" => "1"
        "First_name" => "$first", 
        "Last_name" => "$last",
	"Enter_addresss 1" => "$add1",
	"Enter_addresss 2" => "$add2",
	"Post_code" => "$postcode",
	"Phone_No" => "$phone",
	"Email_id" => "$email"   
   );
	
   $collection1->insert($document);
   echo "Document inserted successfully";

	$cursor = $collection1->find({"order_id": 1 });
   // iterate cursor to display title of documents
	
   foreach ($cursor as $result) {
      echo $document["order_id"] . "\n";
   }

?>


















