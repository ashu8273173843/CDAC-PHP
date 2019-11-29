<?php 
	$fruits = array("Apple","Mango");//creating a new array of size 2.
	array_push($fruits, $_POST["fruit"]);//add the item

	foreach ($fruits as $key => $value) {
		echo '<p>'.$value .'</p>';
	}	
 ?>