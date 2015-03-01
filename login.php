<?php
    require("api/api.php");
    session_start();

    if (login($_POST["username"], $_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
    }

    header("Location: index.php");
?>