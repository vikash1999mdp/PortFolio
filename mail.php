<?php
$to = "vikash1999mdp@gmail.com";
$subject = "Response from website";
$message = "I am very thankful to you";
$headers = "From: vikash@000webhostapp.com";

if (mail($to, $subject, $message, $headers)){
    echo "Mail send Successfuly";
else {
    echo "Can not send mail";
    }
}
?>