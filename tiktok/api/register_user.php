<?php
session_start();
include "../config/base_url.php";
include "../config/db.php";

if (isset($_POST["username"]) && isset($_POST["password-1"]) && isset($_POST["password-2"]) &&
    strlen($_POST["username"]) > 0 && strlen($_POST["password-1"]) > 0 && strlen($_POST["password-1"]) > 0 &&
    preg_match("/^[a-z0-9_]+$/", $_POST["username"]) && preg_match("/^[a-zA-Z0-9_]{8,}$/", $_POST["password-1"]) && preg_match("/^[a-zA-Z0-9_]{8,}$/", $_POST["password-2"])) {


    $username = $_POST["username"];
    $query = mysqli_query($conn, "SELECT login FROM accounts WHERE login=\"$username\";");

    if (mysqli_num_rows($query) == 0) {
        if ($_POST["password-1"] == $_POST["password-2"]) {
            $password = $_POST["password-1"];
            mysqli_query($conn, "INSERT INTO accounts(login, password) VALUES (\"$username\", \"$password\")");
            header("Location: $BASE_URL");
        } else {
            $_SESSION["regError"] = "Пароли не совпадают";
            header("Location: $BASE_URL/pages/register.php");
        }
    } else {
        $_SESSION["regError"] = "Имя пользователя уже занято";
        header("Location: $BASE_URL/pages/register.php");
    }
} else {
    $_SESSION["regError"] = "Имя пользователя или пароль не корректный";
    header("Location: $BASE_URL/pages/register.php");
}
?>