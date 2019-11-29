<?php require('classes.php'); ?>
<h1>Details provided by the user</h1>
<?php 
	
	$id = $_POST["empid"];
	$name = $_POST["empname"];
	$address = $_POST["empaddress"];
	$sal = $_POST["empsal"];

	$emp = new employee($id, $name, $address, $sal);
	$emp->printDetails();
 ?>