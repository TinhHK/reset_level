<?php

session_start();

if (!isset($_SESSION["datetime"])) {
    $now = new DateTime("now");
    $_SESSION["datetime"] = $now->format("Y-m-d H:i:s");
}

echo "Session has created at " . $_SESSION["datetime"];

