<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<title>Hacker Quest</title>
</head>


<body>
<div class="container">
	<div class="jumbotron">
		<h1 style="text-align: center;"> Hacker Quest</h1> 
	</div>
	<br>


	<?php 
		$answer = $_POST['answer'];
		$cmd = "echo '".$answer."' > temp.py && python3 temp.py";
	 	$result = shell_exec($cmd);
	 	echo $result;
	 	$cmd = "rm temp.py";
	 	$result = shell_exec($cmd);
	?>



</div>

</body>
</html>