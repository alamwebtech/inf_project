<?php

if($_POST["submit"]) {
    $recipient="ferare2007@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>