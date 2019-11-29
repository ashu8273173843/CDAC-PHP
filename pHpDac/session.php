<?php 
	session_start();#U call this function for the first time when the Page is requested....

	function __autoload($classname){
		$file = './'.$classname.".php";
		include_once($file);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
	<link rel="stylesheet" type="text/css" href="./Content/mainStyle.css">
</head>
<body>
	<h1>example to hold session data</h1>
	<form action="sessionprocess.php" method="POST">
		<div>
			<input placeholder="Enter the Name" name="name"/>
			<input placeholder="Enter the Address" name="address"/>
			<button>Save</button>
		</div>
	</form>

	<div>
		<h2>The session data</h2>
		<table>
			<tr>
				<th>User Name</th>
				<th>User Address</th>
			</tr>
		<?php 
/*			if(isset($_SESSION["username"])){
				echo $_SESSION["username"];
			}
			if(isset($_SESSION["useraddress"])){
				echo $_SESSION["useraddress"];
			}*/

/*			if(isset($_SESSION["user"])){
				$result = $_SESSION["user"];
				echo $result->username.'<br/>';
				echo $result->address;
			}*/
			if(isset($_SESSION["allUsers"])){
				$data = $_SESSION["allUsers"];
				foreach ($data as $key => $value) { ?>
				<tr><td><?php echo $value->username; ?></td><td> <?php echo $value->address; ?></td></tr>	
			<?php	
				}
			}
		 	?>
		</table>
	</div>
</body>
</html>