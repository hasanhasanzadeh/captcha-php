<?php
session_start();

$stored_captcha = $_SESSION['captcha_code'];


$email = $_POST['email'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];
$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if ($password == null || $email == null || $captcha == null) {
    if (!$password) {
        $_SESSION['errors'][] = 'کلمه عبور نباید خالی باشد';
    }
    if (!$email) {
        $_SESSION['errors'][] = 'ایمیل نباید خالی باشد';
    }
    if (!$captcha) {
        $_SESSION['errors'][] = 'کد امنیتی نباید خالی باشد';
    }

    header('Location: login.php');
    exit();
}
if (!preg_match($emailPattern, $email)) {
    $_SESSION['errors'][] = 'ایمیل وارد شده معتبر نمی‌باشد';
}
if ($stored_captcha === $captcha) {
    $_SESSION['success'] = 'شما با موفقیت وارد سایت شدید';
    header('Location: index.php');
    exit();
} else {
    $_SESSION['errors'][] = 'کد امنیتی اشتباه می باشد';
    $_SESSION['errors'][] = 'کد امنیتی حساس به حروف کوچک و بزرگ می باشد';
    header('Location: login.php');
    exit();
}
?>