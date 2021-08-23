<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['text'];
$message= $_POST['message'];
$to = "subhadeepsinha99@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: subhadeepsinha19@gmail.com" . "\r\n" .
"CC: sinha.subhadeep02@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:THANKYOU.html");
?>