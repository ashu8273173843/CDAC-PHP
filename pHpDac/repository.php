<?php 
	class repository{
		private $empList = array();//blank array..
		//GET, POST, PUT and DELETE....
		function addEmployee($emp)
		{
			//to add an item into an array...
			array_push($this->empList, $emp);
		}

		function getAllEmployees(){
			return $this->empList;
		}

		function removeEmployee($id){
			for ($i=0; $i < count($empList); $i++) { 
				if($empList[$i]->empId == $id){
					array_splice($empList, $i, 1);
					return;
				}
			}
		}

		function updateEmployee($emp)
		{
			for ($i=0; $i < count($empList); $i++) { 
				if($empList[$i]->empId == $emp->empId){
					$empList[$i]->empName = $emp->empName;
					$empList[$i]->empAddress = $emp->empAddress;
					$empList[$i]->empSalary = $emp->empSalary;
					return;
				}
			}
		}
	}
 ?>