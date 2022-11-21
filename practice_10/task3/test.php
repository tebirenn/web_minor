<?php
session_start();

$email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #3 Test page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="email" placeholder="Enter your email" value="<?=$email ?>">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="surname" placeholder="Enter your surname">
        <input type="password" name="password" placeholder="Enter your password">
        <button type="submit">submit</button>
    </form>
</body>
</html>