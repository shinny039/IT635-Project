<?php

$uri = "mongodb://hodor:hodorhodor@ds017672.mlab.com:17672/shopping";
//$collection= "test";

$conn = new MongoClient($uri);
echo $conn.PHP_EOL;	

$db = $conn->selectDB("shopping");
echo $db.PHP_EOL;

$collection = $db->orders;


//$collection->find(array("name"=>"Mon"));
  //echo ;  

$cursor = $collection->find(array("Order_id" => "1" ));	
  foreach ($cursor as $res) {
	//echo "123";
//     echo $res["Order_id"] ;
//		$r=$res ;
$co=$collection->count();
	echo $co;   
	//var_dump($res);
}

$cursor = $collection->findOne();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $result) {
      echo "Your Order_id is ".$result["Order_id"] ;
   }

?>
