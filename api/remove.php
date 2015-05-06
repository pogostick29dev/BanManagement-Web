<?php
    require("api.php");
    session_start();

    $auth = false;

    if (isset($_SESSION["username"])) {
        $auth = true;
    }

    if (isset($_POST["key"]) && $_POST["key"] == key) {
        $auth = true;
    }

    if (!$auth) {
        echo("key");
        return;
    }

    if (isset($_POST["uuid"])) {
        remove($_POST["uuid"]);
    }

    else if (isset($_GET["id"])) {
        remove_by_id($_GET["id"]);
    }

    header("Location: /");
?>