<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $messageBody = $_POST['message'];

    $to = "vincentt.dinh03@gmail.com"; // Your email address
    $subject = "New message from your website contact form";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    $message = "<h3>New message from " . $fname . " " . $lname . "</h3>
                <p><strong>Phone:</strong> " . $phone . "</p>
                <p><strong>Email:</strong> " . $email . "</p>
                <p><strong>Message:</strong> " . nl2br($messageBody) . "</p>";

    mail($to, $subject, $message, $headers);
    header("Location: path_to_your_contact_page.html?message=sent");
    exit();
}
?>
