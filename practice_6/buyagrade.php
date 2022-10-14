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
    <link rel="stylesheet" href="<?=$BASE_URL; ?>/styles/buyagrade.css">
</head>
<body>
    <header>
        <h1>Buy Your Way to a Better Education!</h1>
        <p>Recent changes in University of Washington policy, now allow us to offer grades for money. That's right! All you need to get a 4.0 in this course is cold, hard, cash.</p>
        <h2>Give us your money</h2>
    </header>
    <section>
        <form action="<?=$BASE_URL; ?>/sucker.php" method="POST" enctype="multipart/form-data">
            <span class="label-input">
                <label for="user_name">Name</label>
                <input type="text" name="user_name">
            </span>
            <span class="label-input">
                <label for="user_section">Section</label>
                <select name="user_section" id="user_section">
                    <option value="MA">MA</option>
                    <option value="MB">MB</option>
                    <option value="MC">MC</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MF">MF</option>
                    <option value="MG">MG</option>
                    <option value="MH">MH</option>
                </select>
            </span>
            <span class="label-input">
                <label for="user_card">Credit Card</label>
                <input type="text" name="user_card">
            </span>
            <span id="card-type-select">
                <span>
                    <input type="radio" name="card_type" value="Visa">
                    <label for="card_type">Visa</label>
                </span>
                <span>
                    <input type="radio" name="card_type" value="Mastercard">
                    <label for="card_type">Mastercard</label>
                </span> 
            </span>
            <button type="submit">I am giant sucker</button>
        </form>
    </section>
</body>
</html>