<?php

//Email address of the receiver
$to = "nikkumar334@gmail.com";
//Email subject
$subject = "Reset password";
//Email message
$message = "Your one time password(OTP) is : ". rand(1000,9999);
//Header information
$headers = "From: Admin <2021mca27@cuk.ac.in>\r\n";
//Send email
if(mail($to, $subject, $message, $headers))
    echo "Email sent successfully.";
else
    echo "Unable to send the email.";
?>