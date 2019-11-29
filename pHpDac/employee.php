<?php
class employee{
	private $empId;
	private $empName;
	private $empAddress;

	function __construct($id, $name, $address){
		$this->empId = $id;
		$this->empName = $name;
		$this->empAddress = $address;
	}

	function getID(){
		return $this->empId;
	}
	function getName(){
		return $this->empName;
	}
	function getAddress(){
		return $this->empAddress;
	}

}
?>