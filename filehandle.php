<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']
$email_form "info@gmail.com";
$email_subject = "New Form Submission"
$email_body = "User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "subject:$subject.\n".
            "User Message:$message.\n".
            $to = 'mylan11a4@gmail.com';
$headers = "From: $email_from \r\n";
$header . = "Reply to $visitor_email \r\n"
mail($to $email_subject, $email_body, $header)
header("Location: contact.html")

?>