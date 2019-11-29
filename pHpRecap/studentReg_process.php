<?php
 	require('dbComponent.php'); 
	$name = $_POST["name"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$year = 2019;

	insertStudent($name, $address, $phone);
	echo "Inserted successfully";
 ?>
 <a href="homePage.php">Home</a>