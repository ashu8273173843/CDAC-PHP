<!DOCTYPE html>
<html>
<head>
	<title>DB Program</title>
	<link rel="stylesheet" type="text/css" href="./Content/mainStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<h1 class="jumbotron">Employee Registration App</h1>
	<div class="row">
		<div class="col-lg-8">
		<h3>Table of records</h3>
		<table class="table table-hover table-bordered">
			<tr>
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Employee Address</th>
				<th>Employee Salary</th>
				<th>Options</th>
			</tr>
			<?php 
				function getRecords(){
					$con = new mysqli('localhost:3308', 'root','', 'cdactraining');
					$query ="select * from emptable";
					$result = $con->query($query);
					while($row = $result->fetch_assoc()) {
						$tr ='<tr><td>'. $row["empID"] .'</td><td>';
						$tr  .= $row["empName"] .'</td><td>';
						$tr .=  $row["empAddress"] .'</td><td>';
						$tr .=  $row["empSalary"] .'</td><td>';
						$tr .= '<a class="btn btn-danger" href="findemp.php?id="' . $row["empID"] . '>Edit</a></td></tr>';
						echo $tr;
					}
				}
			 ?>
			 <?php getRecords(); ?>
		</table>
	</div>
	<div class="col-lg-5">
		<h3>New Employee Registration</h3>
		<div>
			<form class="form" action="dbAccess.php" method="POST">
				<fieldset>
					<input class="form-control" placeholder="Enter the ID" name="empid"/>
					<input class="form-control" placeholder="Enter the Name" name="empname"/>
					<input class="form-control" placeholder="Enter the Address" name="empaddr"/>
					<input class="form-control" placeholder="Enter the Salary" name="empsal"/>
					<button class="btn btn-info">Save</button>
				</fieldset>	
			</form>
		</div>
	</div>
	<div class="col-lg-5">
		<h3>Update Employee</h3>
	</div>
	</div>
	
	
</body>
</html>