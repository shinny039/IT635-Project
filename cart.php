#!/usr/bin/php
<?php
  
require "connect_to_db.php";  

$sqlquery = "CREATE TABLE cart (
		 		 cart_id int(11) NOT NULL ,
				 product_name varchar(24) NOT NULL,
		 		 product_quantity varchar(24) NOT NULL
				 total varchar(16) NOT NULL
		 		 ) ";
if ($conn->query($sqlquery)){ 
    echo "Your products table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: products table has not been created.";
}
?>
