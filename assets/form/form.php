<?php
    $name = $POST['name'];
    $email = $POST['email'];
    $subject = $POST['subject'];
    $message = $POST['message'];

    $email_from = "brianlynch312@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "Username: $name.\n".
                    "User Email: $email.\n ".
                    "Subject: $subject.\n".
                    "message: $message.\n";

    $to = "brianlynch312@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>