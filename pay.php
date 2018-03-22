<?php
session_start();
include_once('./thisisshiandfullofshit.php');

$con = new mysqli("localhost","ias","Airport",'ias');

    
$api = new Instamojo\Instamojo('test_5047d864cce41f4e251c8ba122c', 'test_ce6b9e49246960e71fdaaec1ffa', 'https://test.instamojo.com/api/1.1/');
$error=null;
$candidate_name = $_POST["first_name"];
$candidate_email = $_POST["email"];
$candidate_mobile = $_POST["phone"];

try {

    /*if($candidate_name != NULL || $candidate_email !=Null || $candidate_mobile !=NULL){

    }else{
         throw new Exception("Value must be 1 or below");
    }*/

    $error=null;
    $response = $api->paymentRequestCreate(array(
        "phone" => $candidate_mobile,
        "buyer_name" => $candidate_name,
        "purpose" => "India Air Service",
        "amount" => "1000",
        "send_email" => true,
        "email" => $candidate_email,
        "redirect_url" => "http://indiaairportservices.co.in/verify.php"
        ));
    
    $json_insta =  json_encode($response);
    $json_post = json_encode($_POST);
    $place = $_POST['place'];
    //($post,$instamojo,$name,$email,$place,$mobile,$sucess)
    //record in db
    $sql = <<<EOF
        INSERT INTO `transaction` (`post`, `instamojo`, `name`, `email`, `place`, `mobile`, `sucess`)
         VALUES ('$json_post','$json_insta','$candidate_name','$candidate_email','$place','$candidate_mobile',0);
EOF;
    $con->query($sql);
    $con->close();
   

    //session for payment has started
    session_start();
    $_SESSION["paymentStart"] = true;
    $_SESSION["paymentDetail"] = $response;
    $_SESSION["candidate_email"] = $candidate_email;
    $_SESSION["candidate_name"] = $candidate_name;
    
    header('Location: '.$response['longurl']);
    exit();
}
catch (Exception $e) {
     session_destroy();
    echo "There was problem in processing the request.";   
}
