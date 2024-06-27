<?php
session_start();
$errors = $_SESSION['errors'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به وب سایت</title>

    <link rel="stylesheet" href="public/css/app.css">

</head>
<body>

<div class="container">
    <?php if (isset($errors)) { ?>
        <div>
            <ul class="bg-red text-white rounded shadow p-4 m-2">
                <?php foreach ($errors as $error) { ?>
                    <li><?= $error ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } unset($_SESSION['errors']) ?>
    <div class="m-4 bg-white shadow-lg rounded">
        <div class="justify-content-center">
            <img src="public/images/register.png" class="m-auto items-center flex" alt="">
        </div>
        <div>
            <form action="validate_login.php" method="POST" class="p-2 m-2">
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                    <input type="password" name="password" id="password" placeholder="کلمه عبور خود را وارد کنید" class="form-input"
                           required>
                </div>
                <div class="form-group">
                    <div class="flex justify-between">
                        <label for="captcha">کد امنیتی</label>
                        <img src="captcha.php" alt="CAPTCHA Image">
                    </div>
                    <input type="text" id="captcha" placeholder="کد امنیتی را وارد کنید" name="captcha"
                           class="form-input" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-blue">
                        <span>ورود</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>