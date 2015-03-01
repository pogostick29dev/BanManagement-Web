<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
//        die("Incorrect key.");
    }

    echo(json_encode(get($_POST["uuid"])));
?>