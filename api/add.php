<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
        echo("key");
        return;
    }

    if (isset($_POST["id"])) {
        update($_POST["id"], $_POST["uuid"], $_POST["reason"]);
        $id = $_POST["id"];
    }

    else {
        $id = add($_POST["uuid"], $_POST["reason"]);
    }

    echo $id;
?>