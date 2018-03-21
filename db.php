<?php
	$con = new mysqli("localhost","ias","Airport");
	//$con = new mysqli("localhost","root","");
	
	function insert($post,$instamojo,$name,$email,$place,$mobile,$sucess){
$sql = <<<EOF
		INSERT INTO `transaction` (`post`, `instamojo`, `name`, `email`, `place`, `mobile`, `sucess`)
		 VALUES ('$post','$instamojo','$name','$email','$place','$mobile',0);
EOF;
	$con->query($sql);
	$con->close();
	}
	
