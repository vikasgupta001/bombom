<?php
	$con = new mysqli("localhost","ias","Airport");
	if ($con->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	//$query = "INSERT INTO `transaction` (`id`, `post`, `instamojo`, `name`, `email`, `place`, `mobile`, `sucess`) VALUES ('1', 'test', 'test', 'test', 'test', 'test', 'test', '0');"