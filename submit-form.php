<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'hectyxcorp@hectyx.ga';
    $subject = 'New message from your website';
    $message = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo 'Your message has been sent.';
    } else {
        echo 'There was a problem sending your message.';
    }
}

?>
