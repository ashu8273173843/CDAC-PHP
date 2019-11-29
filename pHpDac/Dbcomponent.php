<?php 
	#This file contains all the common operations that is used by other pages of the Application...
	class employee{
		public $empId;
		public $empName;
		public $empAddr;
		public $empSalary;

		function __construct($id, $name,$address, $sal)
		{
			$this->empId = $id;
			$this->empName = $name;
			$this->empAddr = $address;
			$this->empSalary = $sal;
		}
	}

	function getConnection($value='')
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

	function getRecords()
	{
		$con = getConnection();
		$query = "SELECT * FROM EMPTABLE";
		$resultSet = $con->query($query);
		$data = array();
		while($row = $resultSet->fetch_assoc()){
			$emp = new employee($row["empID"], $row["empName"], $row["empAddress"], $row["empSalary"]);
			array_push($data, $emp);
		}
		return $data;
	}

	function addRecord($id, $name, $address, $salary)
	{
		$con = getConnection();
		$insert = sprintf("INSERT INTO EMPTABLE VALUES('%s','%s','%s','%s')", $id, $name, $address, $salary);
		$con->query($insert);
		echo "insertion success";
	}

	function deleteRecord($id)
	{
		$con = getConnection();
		$delete = sprintf("DELETE FROM EMPTABLE WHERE EMPID = '%s'", $id);
		$con->query($delete);
		echo "Deletion success";
	}

	function updateRecord($id, $name, $address, $salary)
	{
		$con = getConnection();
		$update = sprintf("Update INTO EMPTABLE SET empName = '%s', empAddress = '%s', empSalary = '%s' WHERE EMPID = '%s')", $name, $address, $salary, $id);
		/*print($update);*/
		$con->query($update);
		echo "updation success";
	}
 ?>

 <?php 
 	/*$data = getRecords();
 	foreach ($data as $key => $value) {
 		echo '<p>' . $value->empName .'</p>';
 	}*/

 	//deleteRecord(4);
 	updateRecord(2, 'Testingname','TestingAddress', 66000);
  ?>