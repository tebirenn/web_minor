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
    <link rel="stylesheet" href="<?=$BASE_URL?>/styles/pages/register.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>/styles/need.css">
    <link rel="icon" href="<?=$BASE_URL?>/images/tt2.svg">
</head>
<body>
    <section>
        <h1>Зарегистрироваться</h1>
        <form action="<?=$BASE_URL?>/api/register_user.php" method="POST">
            <span>
                <p>Имя пользователя</p>
                <input type="text" placeholder="Желаемое имя пользователя" name="username">
            </span>
            <span>
                <p>Пароль</p>
                <input type="password" placeholder="Придумайте пароль" name="password-1">
                <input type="password" placeholder="Введите пароль повторно" name="password-2">
            </span>
            <?php
                if (isset($_SESSION["regError"])) {
                    echo '<p id="errorReg">' . $_SESSION["regError"] . '</p>';
                    unset($_SESSION["regError"]);
                }
            ?>
            
            <button>Зарегистрироваться</button>
        </form>
        <p>Уже есть аккаунт? <a href="<?=$BASE_URL?>/pages/login.php">Войти</a></p>
    </section>
</body>
</html>