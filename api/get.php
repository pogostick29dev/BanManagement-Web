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

    $data = get($_POST["uuid"]);
    echo(json_encode($data != null ? $data : array()));
?>