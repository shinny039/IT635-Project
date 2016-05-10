#!/usr/bin/php
<?php
  
require "connect_to_db.php";  

$sqlquery = "CREATE TABLE category (
		 		 category_id int(11) NOT NULL auto_increment,
				 product_id int(11) NOT NULL,
				 details text NOT NULL,
				 category varchar(16) NOT NULL,
		 		 PRIMARY KEY (category_id)
		 		 ) ";
if ($conn->query($sqlquery)){ 
    echo "Your category table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: category table has not been created.";
}
?>
