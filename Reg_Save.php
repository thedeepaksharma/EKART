<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root', '' , 'studb');

		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO login VALUES 
('$sname','$regno','$mailid','$mobile','$uname','$pwd')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:Reg_Success.html");
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
