<?php
session_start();

$full_name = $_SESSION["full-name"];
$country = $_SESSION["country"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2 Test page</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <div>
        <p><b>Full name:</b> <?=$full_name ?></p>
        <p><b>Country:</b> <?=$country ?></p>
    </div>
</body>
</html>