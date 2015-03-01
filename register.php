<?php
    require("api/api.php");
    session_start();

    register($_POST["username"], $_POST["password"]);

    header("Location: index.php");
?>