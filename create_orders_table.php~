#!/usr/bin/php
<?php

require "connect_to_db.php";  

$sqlquery = "CREATE TABLE orders (
		 			order_id int(11) NOT NULL auto_increment,
					product_name varchar(24) NOT NULL,
					product_quantity varchar(24) NOT NULL,
					firstname VARCHAR(50) NOT NULL, 
					surname VARCHAR(50) NOT NULL, 
					add1 VARCHAR(50) NOT NULL, 
					add2 VARCHAR(50) NOT NULL,  
					postcode VARCHAR(10) NOT NULL, 
					phone VARCHAR(20) NOT NULL,
					email VARCHAR(150) NOT NULL,		 		 
			 		PRIMARY KEY (order_id)
			 		 
		 		 ) ";
if ( $conn->query($sqlquery)){ 
    echo "Your table has been created successfully!"; 
} else { 
    echo "ERROR: table has not been created.".mysqli_connect_error();
}
?>

