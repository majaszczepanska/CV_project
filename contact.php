<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];

if (empty($fname) || empty($lname) || empty($email) || empty($message)) {
    header("Location: index.html#contact");
    exit();
} else {
    echo "ok";
}








?>