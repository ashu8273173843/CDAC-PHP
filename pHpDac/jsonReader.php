<!DOCTYPE html>
<html>
<head>
	<title>Json Reader Example</title>
</head>
<body>
	<h1>Table of Employees with us</h1>
	<table border="1" width="100%">
		<tr>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Employee Address</th>
			<th>Employee Salary</th>
		</tr>
	<?php 
		$data = file_get_contents('./data.json');//global func to read text based files....
		//Json file gives text. This text has to be decoded into objects....
		$array = json-($data);//This converts UR json data into array of objects....
	 	foreach ($array as $key => $value) { ?>
		<tr>
			<td><?php echo $value->empID ?> </td>
			<td><?php echo $value->empName ?> </td>
			<td><?php echo $value->empAddress ?> </td>
			<td><?php echo $value->empSalary ?> </td>
		</tr>	 		
	 	<?php 
	 	}
 	?>
	 </table>
</body>
</html>