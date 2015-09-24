<?php

function is_match($con,$username,$password){
	// Checking if username & password match
	$sql="SELECT * FROM `user` WHERE  username='$username' AND password='$password'" ;
	$result = mysqli_query($con,$sql);	
	return $result;
}

function db_connect() {
	// Create connection
	$con=mysqli_connect("localhost","ananthuma","ananthu","arangu");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	else {
		return $con;
		}
}
?>
