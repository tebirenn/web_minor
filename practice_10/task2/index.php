<?php
session_start();

if (isset($_POST["full-name"]) && isset($_POST["country"]) &&
    strlen($_POST["full-name"]) > 0 && strlen($_POST["country"]) > 0) {

        $_SESSION["full-name"] = $_POST["full-name"];
        $_SESSION["country"] = $_POST["country"];

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
        <input type="text" name="full-name" placeholder="Enter your full name">
        <input type="text" name="country" placeholder="Enter your country">
        <button type="submit">submit</button>
    </form>
</body>
</html>