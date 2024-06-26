<?php
session_start();

// Get the CAPTCHA code from the session
$stored_captcha = $_SESSION['captcha_code'];

// Get the CAPTCHA code entered by the user
$user_captcha = $_POST['captcha'];

// Check if the CAPTCHA code matches
if ($user_captcha === $stored_captcha) {

// CAPTCHA is correct, proceed with login validation
    $email = $_POST['email'];
    $password = $_POST['password'];

// For example, check the database for the user credentials

// Assuming validation is successful
    echo 'Login successful';
} else {
// CAPTCHA is incorrect
    echo 'Incorrect CAPTCHA';
}
?>