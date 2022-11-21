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
    <title>Log in</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/index.css">
</head>
<body>
    <section>
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