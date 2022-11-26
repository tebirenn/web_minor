<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/styles/need.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>/styles/pages/login.css">
    <link rel="icon" href="<?=$BASE_URL?>/images/tt2.svg">
</head>
<body>
    <section>
        <h1>Войти</h1>
        <form action="<?=$BASE_URL?>/api/auth_user.php" method="POST">
            <span>
                <p>Логин</p>
                <input type="text" placeholder="Имя пользователя" name="username">
            </span>
            <span>
                <p>Пароль</p>
                <input type="password" placeholder="Пароль" name="password">
            </span>
            <?php
                if (isset($_SESSION["authError"])) {
                    echo '<p id="errorAuth">' . $_SESSION["authError"] . '</p>';
                    unset($_SESSION["authError"]);
                }
            ?>
            <button>Войти</button>
        </form>
        <p>Еще нет аккаунта? <a href="<?=$BASE_URL?>/pages/register.php">Регистрация</a></p>
    </section>
</body>
</html>