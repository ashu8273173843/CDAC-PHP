<?php 
#One of the main features of server side programming is to perform IO operations on files, sockets and databases. php provides apis ton perform file io operations....

//There are APIs provided by php for File IO operations with a prefix called f which has methods like read, write, gets, with other options like appending, trucating and many more....
 require("employee.php");
 require("repository.php");

 function readmyFile(){
	$file = fopen('Notes.txt', 'r');
	while(!feof($file)){
		$line = fgets($file);
		echo $line;
	}
	fclose($file);
}

function writeEmpObj($emp){
	$file = fopen("employees.csv", 'a+');
	$line = sprintf("%s,%s,%s", $emp->getID(), $emp->getName(), $emp->getAddress());
	fwrite($file, PHP_EOL);
	fwrite($file, $line);
	fclose($file);
}

function writeToMyFile(){
	$file = fopen("Sample.txt", 'a+');
	fwrite($file, "welcome 123");
	fwrite($file, PHP_EOL);
	fclose($file);
}

function readCsvFile(){
	$rep = new repository();//create rep object...
	$file = fopen("employees.csv", 'r+');
	while(!feof($file)){
		$line = fgets($file);//got a line
		$words = explode(",", $line);//split the line into words
		$emp = new employee($words[0],$words[1],$words[2]);
		$rep->addEmployee($emp);
	}
	fclose($file);//close it after reading is done....
	$records = $rep->getAllEmployees();
	foreach ($records as $key => $value) {
		echo $value->getName() .'<br/>';
	}
}
//readmyFile();
//writeToMyFile();

//writeEmpObj(new employee(123,'Phaniraj',"Bangalore"));
readCsvFile();
?>
