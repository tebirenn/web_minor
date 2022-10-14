<?php
include "config/base_url.php";

if (isset($_POST["user_name"]) &&
    isset($_POST["user_section"]) &&
    isset($_POST["user_card"]) &&
    isset($_POST["card_type"])) {

        $name = $_POST["user_name"];
        $section = $_POST["user_section"];
        $card = $_POST["user_card"];
        $type = $_POST["card_type"];

        $sum = 0;
        for ($i = 0; $i < strlen($card); $i++) {
            $one_num = intval($card[$i]);

            if ($i % 2 == 0) {
                $one_num *= 2;
            }

            if ($one_num >= 10) {
                $sum += intval($one_num / 10) + $one_num % 10;
            } else {
                $sum += $one_num;
            }
        }
        
        if ($sum % 10 == 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/thanks.css">
</head>
<body>
    <section>
        <h1>Thanks, sucker!</h1>
        <p>Your information has been recorded.</p>
        <p><b>Name: </b><?=$name; ?></p>
        <p><b>Section: </b><?=$section; ?></p>
        <p><b>Credit Card: </b><?=$card; ?></p>
        <p><b>Credit Type: </b><?=$type; ?></p>
    </section>
</body>
</html>

<?php
    } else {
        header("Location: $BASE_URL/sorry.php");
    }
} else {
    header("Location: $BASE_URL/sorry.php");
}
?>