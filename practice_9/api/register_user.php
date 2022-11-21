<?php
include "../config/base_url.php";
include "../config/db.php";

$access = true;

if (isset($_POST["login"]) && isset($_POST["password1"]) && 
    isset($_POST["password1"]) && preg_match("/^[a-z0-9_]+$/", $_POST["login"]) &&
    preg_match("/^[a-zA-Z0-9_]+$/", $_POST["password1"] && preg_match("/^[a-zA-Z0-9_]+$/", $_POST["password2"])) ) {

    $login = $_POST["login"];
    $query_login = mysqli_query($conn, "SELECT * FROM accounts WHERE login=\"$login\";");
    if (mysqli_num_rows($query_login) == 0) {
        if ($_POST["password1"] == $_POST["password2"]) {
            $password = $_POST["password1"];
            mysqli_query($conn, "INSERT INTO accounts(login, password) VALUES (\"$login\", \"$password\")");
            header("Location: $BASE_URL");
        } else {
            echo "Passwords do not match";
        }
    } else {
        echo "Login already taken";
    }
} else {
    echo "Incorrect info";
}
?>