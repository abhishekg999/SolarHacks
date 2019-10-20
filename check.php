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

		$cmd = "echo 'account = [0,0,0,0,0]\n".str_replace("\n", "", $answer)."\nprint(account)' > temp.py";
	 	$result = shell_exec($cmd);
	 	$cmd = "python3 temp.py";
	 	$result = shell_exec($cmd);
	 	$cmd = "rm temp.py";
	 	$q = shell_exec($cmd);
	 	$result = str_replace("\n", "", $result);
	 	if($result=="[500, 500, 500, 500, 500]"){
			echo '<div class="alert alert-dismissible alert-success">
        	<button type="button" class="close"></button>
        	<strong>Well done!</strong> You have solved the problem! <a href="learning.html" class="alert-link">Click here to read up about Python</a> or <a href="index.html" class="alert-link">click here to go to the home page.</a>
			</div> <br> <h1>Output</h1><div class="jumbotron"><div class="well">'.$result.'</div></div>';
	 	} else {
	 		echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close"></button>
				<strong>Oh snap!</strong> <a href="#" onclick="self.close();" class="alert-link">Change a few things up</a> and try submitting again.
				</div><br><div class="jumbotron"><div class="well">Check again! Or maybe there is a syntax error... Head over to the <a href="learning.html" class="alert-link">Additional Resources</a> for more help</div></div>';
	 	}


	?>


<div>
	
</div>


</div>


</body>
</html>