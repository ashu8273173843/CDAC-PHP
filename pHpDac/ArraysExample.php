<!DOCTYPE html>
<html>
<head>
	<title>Arrays in php</title>
</head>
<body>
	<h1>Fruits List in the Array</h1>
	<ul type="1">
	<?php 
		#syntax of array in php:
		$fruits = array("Apple","Mango","Orange");
		#syntax of arrays in php: All arrays are objects of the Array class defined in php. U could access the elements of the array either by a for loop or a foreach loop of the php. foreach is most prefered way of traversing the elements within the array.
		//foreach is most prefered....
		foreach ($fruits as $key => $value) {
			# code...
			echo '<li>' . $key .' has the value ' . $value . '</li>';//value represents the element of the index and the index will be the key...
		}
		//Helps in iterating backward also...
		for ($i=0; $i < count($fruits); $i++) { 
			echo "The fruit in the basket is " . $fruits[$i] .'</br/>';
		}//for loop can be used for setting the values and foreach is used for reading the values as foreach is forward only and read only.
		?>
		</ul>
		<hr/>
		<h2>Associative arrays:</h2>
		<?php
		#php supports associative arrays that behaves like Dictionary of Java and C#. The data stores in the form of key value pairs where key is unique for the collection and value can be same...
		$empList = array("Phaniraj"=>55000, "Vinod" =>65000, "Ramnath" =>55000, "JoyDip" => 45000);
		//Employee and their salaries....
		foreach ($empList as $key => $value) {
		 	echo $key ." earns a salary of Rs." . $value .'</br/>';
		 } 
		 //U no longer need to have the index as number only. Even strings could be the key or the index and one should ensure that that index is unique(Key is unique).
	 ?>	
	<hr/>
	<h2>States and their capitals: Another Example</h2>
	<table border="1">
	<tr><th>State</th><th>Capitol</th></tr>
	<?php 
		$india = array("UP"=>"Lucknow", "Maharashtra"=>"Mumbai", "Karnataka"=>"Bangalore","AP"=>"Hyderabad","MP"=>"Bhopal","Gujarat"=>"Gandhinagar");

		foreach ($india as $state => $capital) { 
			$row ='<tr><td>'. $state . '</td><td>'. $capital;
			$row .= '</td></tr>';
			echo $row;	
		}//to Do: try using tags directly in the iterator...
	?>
	</table>
	<hr/>
	<h2>Other Functions of the Array</h2>
	<ul>
		<li>count: No of elements within the array/li>
		<li>array_push: Adds a new Item to the bottom of the array</li>
		<li>array_pop: Emits a the first item in the array(removes)</li>
		<li>reset: Clears all the data of the array</li>
		<li>array_merge: Mergers 2 or more arrays into one</li>
		<li>end: Read only data to move to the end of the array.</li>
	</ul>
</body>
</html>