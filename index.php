<?php
session_start();
$success = $_SESSION['success'];
$errors = $_SESSION['errors'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وب سایت</title>
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
    <?php }
    unset($_SESSION['errors']) ?>

    <?php if (isset($success)) { ?>
        <div>
            <ul class="bg-green text-white rounded shadow p-4 m-2">
                <li><?= $success ?></li>
            </ul>
        </div>
    <?php }
    unset($_SESSION['success']) ?>

</div>
<div class="text-center">
        <h2>
            <a href="login.php" class="text-red text-center text-decoration-none">ورود</a>
        </h2>
</div>
</body>
</html>
