<?php

$uri = "mongodb://hodor:hodorhodor@ds017672.mlab.com:17672/shopping";
$collection= "test";

$conn = new MongoClient($uri);
echo $conn.PHP_EOL;	

$db = $conn->selectDB("shopping");

$collection = $db->createCollection("orders");
   
$collection1 = $db->orders;
echo "Collection selected succsessfully";
	
   $document = array( 
      "name" => "Mon", 
      "description" => "NoSQL"
    
   );
	
   $collection1->insert($document);
   echo "Document inserted successfully";
?>

