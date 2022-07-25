<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "amar.mahato@7hills.com.np";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile Number= ". $phone ."\r\n Message =" . $message;
$headers = "From: noreply@7hills.com.np" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
