<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "venkymalla777@gmail.com";
    $subject = "New Contact Form Submission";
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $message = htmlspecialchars($_POST['message']);
    
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nCity: $city\nMessage: $message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request";
}
?>
