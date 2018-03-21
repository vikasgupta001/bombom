<?php
	$con = new mysqli("localhost","ias","Airport");
	//$con = new mysqli("localhost","root","");
	
	function insert($post,$instamojo,$name,$email,$place,$mobile,$sucess){
		$sql =<<<HERE 
		INSERT INTO `transaction` (`post`, `instamojo`, `name`, `email`, `place`, `mobile`, `sucess`)
		 VALUES ('$post','$instamojo','$name','$email','$place','$mobile',0);"
HERE;
	$con->query($sql);
	$con->close();
	}
	
