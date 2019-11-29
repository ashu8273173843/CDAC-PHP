<?php 
	session_start();
	function __autoload($classname){
		//autoload is required when U R using classes for sesions in ur php file...
		$file = './'.$classname.".php";
		include_once($file);
	}
	$name = $_POST["name"];
	$address = $_POST["address"];
	$user = new userInfo($name, $address);
	//data that got posted to the server...
	/*
	#Storing individual data into 2 session variables...
	$_SESSION["username"] = $name;
	$_SESSION["useraddress"] = $address;
	*/
	//$_SESSION["user"] = $user;//for one single object....

	if(isset($_SESSION["allUsers"])){
		$data = $_SESSION["allUsers"];
	}else{
		$data = array();
	}
	array_push($data, $user);
	$_SESSION["allUsers"] = $data;
	header('Location:./session.php');//redirects to the page that U have requested, header must be set before any echo action is done. No output should be rendered to the UI before you call header API...
 ?>