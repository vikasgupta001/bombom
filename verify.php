<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verifying</title>
</head>
<body>
<h6>Verifying the payment status...</h6>\
<h6>Do not press back button or refresh this page.</h6>

</body>
</html>
<?php
	 
	include_once('./thisisshiandfullofshit.php');

	$api = new Instamojo\Instamojo('test_5047d864cce41f4e251c8ba122c', 'test_ce6b9e49246960e71fdaaec1ffa', 'https://test.instamojo.com/api/1.1/');
   
    if($_GET['payment_id'] != NULL && $_GET['payment_request_id'] !=NULL){
    	try {
			    $response = $api->paymentRequestStatus($_GET['payment_request_id']);
			    if($response['status'] == 'Completed'){
			    	header("Location: http://localhost/bombom/results.php");
			    	$_SESSION['error'] = false;
			    }
			    else{
			    	
			    	$_SESSION['error']= true;
			    }
    			
			}
			catch (Exception $e) {

			  $_SESSION['error']= true;
			   header("Location: http://localhost/bombom/results.php");
			}
    }else{
    	$_SESSION['error']= true;	
    	header("Location: http://localhost/bombom/results.php");
    	
    }
    
?>
