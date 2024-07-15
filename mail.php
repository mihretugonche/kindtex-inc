<?php


$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
// $phone= $_POST['phone'];
$to = "mihretupg@mail.com";
$subject = "Mail From Kindtex website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ;
$headers = "From: noreply@kindtex.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>