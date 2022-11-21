<?php
include "../config/base_url.php";
include "../config/db.php";

$access = true;

if (isset($_POST["login"]) && isset($_POST["password"]) &&
    preg_match("/^[a-z0-9_]+$/", $_POST["login"]) && preg_match("/^[a-zA-Z0-9_]+$/", $_POST["password"])) {
        
    $login = $_POST["login"];
    $password = $_POST["password"];

    $query_login = mysqli_query($conn, "SELECT login FROM accounts WHERE login=\"$login\";");
    if (mysqli_num_rows($query_login) > 0) {

        $query_password = mysqli_query($conn, "SELECT password FROM accounts WHERE login=\"$login\";");
        $password_from_db = mysqli_fetch_assoc($query_password);

        if ($password == $password_from_db["password"]) {
            header("Location: $BASE_URL/main.php");
        } else {
            echo "third";
            $access = false;
        }
    } else {
        echo "second";
        $access = false;
    }
} else {
    echo "first";
    $access = false;
}

?>