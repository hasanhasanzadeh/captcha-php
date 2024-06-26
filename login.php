<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login By Captcha</title>

    <link rel="stylesheet" href="public/css/app.css">

</head>
<body>

<div class="container">
    <div class="m-4 bg-white shadow-lg rounded">
        <div class="justify-content-center">
            <img src="public/images/register.png" class="m-auto items-center flex" alt="">
        </div>
        <div>
            <form action="validate_login.php" method="POST" class="p-2 m-2">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter Email" class="form-input">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter Password" class="form-input">
                </div>
                <div class="form-group">
                    <div class="flex justify-between">
                        <label for="captcha">Captcha</label>
                        <img src="captcha.php" alt="CAPTCHA Image">
                    </div>
                    <input type="text" id="captcha" name="captcha" class="form-input" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-blue">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>