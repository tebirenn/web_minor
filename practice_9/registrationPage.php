<?php 
    include "config/db.php";
    include "config/base_url.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/registrationPage.css">
</head>
<body>
    <section>
        <form action="<?=$BASE_URL ?>/api/register_user.php" method="POST">
            <span>
                <p>Login</p>
                <input type="text" name="login">
            </span>
            <span>
                <p>Password</p>
                <input type="password" name="password1">
            </span>
            <span>
                <p>Repeat password</p>
                <input type="password" name="password2">
            </span>
            <button type="submit">Register</button>
        </form>
        
        <span>
            <p>Already have an account?</p>
            <a href="<?=$BASE_URL ?>/index.php">Log in</a>
        </span>
    </section>
</body>
</html>