<?php 
	function makeConnection(){
		$server = 'localhost';
		$username ='root';
		$pwd = "";
		$dbName = "cdactraining";

		$con = new mysqli($server, $username, $pwd, $dbName);
		return $con;
	}

	function insertStudent($name, $address, $contact){
		$con = makeConnection();
		$query = sprintf("insert into student(name, address, contact) values('%s','%s','%s')",$name, $address, $contact);
		$con->query($query);
	}

	function insertMarks($id, $m1,$m2,$m3,$m4,$m5,$m6){
		$con = makeConnection();
		$query = sprintf("insert into marks(student_id, Lang1, Lang2,Lang3,math,science,social) values('%s','%s','%s','%s','%s','%s','%s')",$id, $m1,$m2,$m3,$m4,$m5,$m6);
		$con->query($query);
	}
 ?>