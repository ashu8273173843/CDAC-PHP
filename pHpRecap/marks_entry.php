<!DOCTYPE html>
<html>
<head>
	<title>Marks Entry</title>
</head>
<body>
	<h1>Marks Entry Form</h1>
	<div>
	<form action="marks_entryprocess.php" method="POST">
		<input type="number" name="sId" placeholder="Enter student ID"/>
		<input type="number" name="lang1" placeholder="Enter lang1 score"/>
		<input type="number" name="lang2" placeholder="Enter lang2 score"/>
		<input type="number" name="lang3" placeholder="Enter lang3 score"/>
		<input type="number" name="math" placeholder="Enter math score"/>
		<input type="number" name="science" placeholder="Enter science score"/>
		<input type="number" name="social" placeholder="Enter social score"/>
		<button>Add Score</button>
	</form>
	</div>
</body>
</html>