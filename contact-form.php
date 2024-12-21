<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "riyanhashemjamy@gmail.com";  // Replace with your actual email address
    $subjectEmail = "New Contact Form Website: " . $subject;
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subjectEmail, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
} else {
    echo "Invalid request method.";
}
?>
