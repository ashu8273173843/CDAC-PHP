<!DOCTYPE html>
<html>
<head>
	<title>First Page of PHP</title>
</head>
<body>
	<h1>welcome to PHP Program</h1>
	<p>The Dynamic content of the pHp will be created under the php Tag</p>
	<?php 
		echo "Testing pHp Page<br/>";//similar to document.write in js...
		eCHO "Testing new script<br/>";
		eCHO "Testing another line<br/>";

		$first ="Phaniraj";
		$last ="B.N.";
		echo "The name entered is " . $first ." " . $last;

		$fvalue =123 ;$sValue = 234;

		echo "The added value is  " . ($fvalue + $sValue);
		$age = 42;
		$retirementPlan = 45- $age;
		echo "<br/>Planning to retire after " . $retirementPlan . " years";
	?>
	<a href="Calc.php">Home</a>
</body>
</html>