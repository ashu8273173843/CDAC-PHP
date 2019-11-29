<?php 
 class employee{
 	private $empID;
 	private $empName;
 	private $empAddress;
 	private $empSalary;

 	//new syntax of php constructor....
 	function __construct($id, $name, $addr, $sal)
 	{
 		$this->empID = $id;//Members of the class are accessed only with -> operator....
 		$this->empName = $name;
 		$this->empAddress = $addr;
 		$this->empSalary = $sal;
 	}//Constructor in php for a Class...

 	function printDetails(){
 		echo "The name entered is " .$this->empName .'</br>';
 		echo "The address entered is " .$this->empAddress .'</br>';
 		echo "The Salary entered is " .$this->empSalary .'</br>';
 		echo "The ID generated is " .$this->empID .'</br>';
 	}

 	function getName(){
 		return $this->empName;
 	}
 }

 //creating the object in php....
 /*$empObj = new employee(123, 'Phaniraj','Bangalore',65000);
 $empObj->printDetails();*/
 //Class objects are reference types. they are accessed thro -> operator for its members. $this operator is used to refer the current instance of the object. members of the class are by default public. U must explicitly state the data as private and functions of the class as public for better readability. 
 ?>