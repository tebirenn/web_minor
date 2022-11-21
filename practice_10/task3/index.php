<?php
session_start();

if (isset($_POST["email"]) && strlen($_POST["email"]) > 0) {

    $_SESSION["email"] = $_POST["email"];

    header("Location: test.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="email" placeholder="Enter your email">
        <button type="submit">submit</button>
    </form>
</body>
</html>