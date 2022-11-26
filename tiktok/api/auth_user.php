<?php
session_start();

include "../config/base_url.php";
include "../config/db.php";

if (isset($_POST["username"]) && isset($_POST["password"]) &&
    strlen($_POST["username"]) > 0 && strlen($_POST["password"]) > 0 &&
    preg_match("/^[a-z0-9_]+$/", $_POST["username"]) && preg_match("/^[a-zA-Z0-9_]{8,}$/", $_POST["password"])) {


    $username = $_POST["username"];
    $query = mysqli_query($conn, "SELECT login FROM accounts WHERE login=\"$username\";");

    if (mysqli_num_rows($query) == 1) {
        
        $password = $_POST["password"];
        $query = mysqli_query($conn, "SELECT password FROM accounts WHERE login=\"$username\";");
        $passwordFromdDB = mysqli_fetch_assoc($query)["password"];

        if ($password == $passwordFromdDB) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["isAuthorized"] = true;
            header("Location: $BASE_URL");
        } else {
            $_SESSION["authError"] = "Ваш пароль не верный";
            header("Location: $BASE_URL/pages/login.php");
        }
    } else {
        $_SESSION["authError"] = "Имя пользователя не найдена";
        header("Location: $BASE_URL/pages/login.php");
    }
} else {
    $_SESSION["authError"] = "Имя пользователя или пароль не корректный";
    header("Location: $BASE_URL/pages/login.php");
}

?>