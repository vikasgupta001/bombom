<?php
session_start();
include_once('./thisisshiandfullofshit.php');

$con = new mysqli("localhost","ias","Airport",'ias');

    
$api = new Instamojo\Instamojo('686c37a4396d2fd3114b6e2939369639', '773a5d3ee0147a745afca25858e9716c');
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
        "purpose" => "Registration Fee",
        "amount" => "600",
        "send_email" => false,
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
