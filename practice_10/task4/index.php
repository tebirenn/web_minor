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
    <title>Home page</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/index.css">
</head>
<body>
    <?php
    if(!isset($_SESSION["auth"])) {
        header("Location: $BASE_URL/login.php"); 
    }
    ?>
    <div>
        <h1>WELCOME</h1>
        <p><b>Loginned user:</b> <?php echo $_SESSION["login"]; ?></p>
        <p>Loginned in <b><?php echo time() - $_SESSION["login-time"]; ?></b> second(s) ago</p>
        <a href="<?=$BASE_URL ?>/api/logout_user.php">Log out</a>
    </div>
</body>
</html>