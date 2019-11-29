<?php 
	#need the functions that was implemented in the functions.php...
	require('Functions.php');#require loads external php files into the current document....

	/*//Get all the posted values...
	$fValue = $_POST['txtFirst'];
	$sValue = $_POST['txtSecond'];
	$operand = $_POST["slOperand"];
	//Pass the values into the function that we have created.
	switch ($operand) {
		case '+':
			$result = addFunc($fValue, $sValue);
			break;
		case '-':
			$result = subFunc($fValue, $sValue);
			break;
		case 'X':
			$result = mulFunc($fValue, $sValue);
			break;		
		default:
			$result = divFunc($fValue, $sValue);
			break;
	}**************Using GET*****************************/
	$fValue = $_GET['txtFirst'];
	$sValue = $_GET['txtSecond'];
	$operand = $_GET["slOperand"];
	//Pass the values into the function that we have created.
	switch ($operand) {
		case '+':
			$result = addFunc($fValue, $sValue);
			break;
		case '-':
			$result = subFunc($fValue, $sValue);
			break;
		case 'X':
			$result = mulFunc($fValue, $sValue);
			break;		
		default:
			$result = divFunc($fValue, $sValue);
			break;
	}

	//Display the result to the user...
	echo "The result of added value is " . $result;
 ?>

 <a href="Calc.php">Go Back</a>