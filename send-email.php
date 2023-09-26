<?php

echo "string";

$wher_you_send_email = "rajnish.htmldevloper@gmail.com";
$subject_email ="i hope this works";
$body_message ="I think Your are fine";
$sender_email ="From: rajnish.bharti@gmil.com";

 if
 	(mail($wher_you_send_email, $subject_email, $body_message, $sender_email)){

 	echo "This Email was sent Sucessfully";
 }
 else{
 	echo "some think is missing";
 }

?>