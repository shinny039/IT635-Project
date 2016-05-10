#!/usr/bin/php
<?php
  
include_once('connect_to_db.php');  

echo "sefjkselkf";
$sqlquery = "CREATE TABLE cart (
		 		 cart_id int(11) NOT NULL ,
				 product_name varchar(24) NOT NULL,
		 		 product_quantity varchar(24) NOT NULL,
				 ptotal varchar(16) NOT NULL
		 		 ) ";
if ($conn->query($sqlquery)){ 
    echo "Your table has been created successfully!"; 
} else { 
    echo "ERROR: table has not been created.".mysqli_connect_error();
}
?>
