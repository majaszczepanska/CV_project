<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];


if (empty($fname) || empty($lname) || empty($email) || empty($message)) {
    header("Location: index.html#contact");
    exit();
} else {
    $to = "m.szczepanska.283@sltzn.katowice.pl"; 
    $subject = "New message from $fname $lname";
    $message_mail = "You have received a new message from your website contact form:\n\n" .
                    "Name: $fname $lname\n" .
                    "Email: $email\n\n" .
                    "Message:\n$message";

    if (mail($to, $subject, $message_mail)) {
        echo "Thank you for your message. It has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
