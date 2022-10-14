<?php
include "config/base_url.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/sorry.css">
</head>
<body>
    <section>
        <h1>Sorry!</h1>
        <p>You didn't provide a valid card number. <a href="<?=$BASE_URL; ?>/buyagrade.php">Try again?</a></p>
    </section>
</body>
</html>