<?php
session_start();

if (isset($_SESSION["reload-counter"])) {
    $message = "You have restarted this page " . $_SESSION["reload-counter"] . " time(s)";
    $_SESSION["reload-counter"] += 1;
} else {
    $message = "You have not already restarted this page";
    $_SESSION["reload-counter"] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="test.php" method="POST">
        <p>
            <?php echo $message ?>
        </p>
    </form>
</body>
</html>