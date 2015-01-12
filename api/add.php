<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
        die("Incorrect key.");
    }

    add($_POST["uuid"], $_POST["reason"]);
?>