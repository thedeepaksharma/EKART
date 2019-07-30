<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','mydatabase');

		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO mysignup VALUES  
    ('$firstname','$lastname','$email','$mobile','$password','$conpassword','$gender')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("Location: http://localhost/project/mylogin.php");
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
