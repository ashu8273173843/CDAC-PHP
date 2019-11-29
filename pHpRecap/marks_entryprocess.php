<?php
 	require('dbComponent.php'); 
	$sId = $_POST["sId"];
	$lang1 = $_POST["lang1"];
	$lang2 = $_POST["lang2"];
	$lang3 = $_POST["lang3"];
	$math = $_POST["math"];
	$science = $_POST["science"];
	$social = $_POST["social"];
	
	insertMarks($sId, $lang1, $lang2, $lang3, $math, $science, $social);
	echo "Marks Inserted successfully";
 ?>
 <a href="homePage.php">Home</a>