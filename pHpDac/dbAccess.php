<?php 
	#Program to access the database and insert a record...

	function getConnection()
	{
		$serverName ='localhost';
		$dbName="cdactraining";
		$username ='root';
		$password = '';

		$con = new mysqli($serverName, $username, $password, $dbName);
		if(!$con){
			echo " Connection failed";
		}
		return $con;
	}

	$id = $_POST["empid"];
	$name = $_POST["empname"];
	$addr = $_POST["empaddr"];
	$sal = $_POST["empsal"];
	$con = getConnection();
	$query = sprintf("insert into emptable values('%s', '%s','%s','%s')" , $id, $name, $addr, $sal);

	if(!$con->query($query)){
		echo "OOPs! Something wrong happened";
	}
	echo "Added to database";
	/*else{
		header('Location:./databaseProgram.php');
	}*/
 ?>