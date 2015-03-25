<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
        echo("key");
        return;
    }

    if (isset($_POST["uuid"])) {
        remove($_POST["uuid"]);
    }

    else if (isset($_GET["id"])) {
        remove_by_id($_GET["id"]);
    }
?>