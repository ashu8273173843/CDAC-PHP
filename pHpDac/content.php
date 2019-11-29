<?php 
	/*$dt = $_POST["dt"];
	echo gettype($dt);
	$currDate = strtotime($dt);
	echo date('d/m/Y', $currDate);*/
	$date1=date_create("2019-03-28");
	$date2=date_create("1977-02-22");
	$diff=date_diff($date1,$date2);
	print_r(getdate());
?>