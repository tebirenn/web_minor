<?php
include "./config/base_url.php";
session_start();
if (!$_SESSION["isAuthorized"]) {
    header("Location: $BASE_URL/pages/login.php");
} else {
    header("Location: $BASE_URL/pages/recomend.php");
}
?>