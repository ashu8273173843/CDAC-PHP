<!DOCTYPE html>
<html>
<head>
	<title>My Calc Program</title>
</head>
<body>
	<h1>Math Calc Program</h1>
	<form method="GET" action="calcProcessing.php">
		<div>
			<input type="number" min="-100" max="100" required name="txtFirst" placeholder="Enter first value"/>
			<select name="slOperand">
				<option>+</option>
				<option>-</option>
				<option>X</option>
				<option>/</option>
			</select>
			<input type="number" name="txtSecond" min="-100" max="100"placeholder="Enter Second value" required />
			<button type="submit" name="btnResult">=</button>
		</div>
	</form>
</body>
</html>