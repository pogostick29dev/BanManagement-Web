<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
        echo("key");
        return;
    }

    echo(json_encode(get($_POST["uuid"])));
?>