<?php 
session_start();
include "config/db.php";
include "config/base_url.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/auth.css">
</head>
<body>
    <section>
        <?php 
        if(isset($_SESSION["auth"]) && $_SESSION["auth"] == 1) {
            header("Location: $BASE_URL"); 
        }
        if (isset($_SESSION["login-error"])) {
            $login_error = $_SESSION["login-error"];
            echo "<p style=\"color: red;\">$login_error</p>";
            unset($_SESSION["login-error"]);
        }
        ?>
        <form action="<?=$BASE_URL ?>/api/login_user.php" method="POST">
            <span>
                <p>Login</p>
                <input type="text" name="login">
            </span>
            <span>
                <p>Password</p>
                <input type="password" name="password">
            </span>
            <button type="submit">Log in</button>
        </form>
        
        <span>
            <p>Do not have account yet?</p>
            <a href="<?=$BASE_URL ?>/registrationPage.php">Registration</a>
        </span>
    </section>
</body>
</html>