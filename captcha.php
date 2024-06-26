<?php
session_start();

function generateCaptchaCode($length = 5)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($characters);
    $captchaCode = '';
    for ($i = 0; $i < $length; $i++) {
        $captchaCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $captchaCode;
}

// Generate the CAPTCHA code and store it in the session
$_SESSION['captcha_code'] = generateCaptchaCode();

// Create the CAPTCHA image
$width = 150;
$height = 50;
$image = imagecreatetruecolor($width, $height);
$background_color = imagecolorallocate($image, 150, 111, 200);
$text_color = imagecolorallocate($image, 10, 70, 60);

// Fill the background with white
imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

// Path to a TrueType font file
$font_file = __DIR__ . '/public/fonts/Vazir-Medium.woff2'; // Ensure this path is correct and the font file exists

// Check if the font file exists
if (!file_exists($font_file)) {
    die('Font file not found!');
}

// Add the CAPTCHA code to the image
$font_size = 20;
imagettftext($image, $font_size, 0, 10, 35, $text_color, $font_file, $_SESSION['captcha_code']);

// Set the content type header
header('Content-Type: image/png');

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);

