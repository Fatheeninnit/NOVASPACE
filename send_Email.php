<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "fatheenahemed9@gmail.com";  // Replace with your Gmail address
    $subject = "New Inquiry from novaspace";
    $headers = "From: " . $email;
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
