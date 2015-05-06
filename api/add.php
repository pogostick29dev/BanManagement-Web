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

    if (isset($_POST["id"])) {
        update($_POST["id"], $_POST["uuid"], $_POST["reason"]);
        $id = $_POST["id"];
    }

    else {
        $id = add($_POST["uuid"], $_POST["reason"]);
    }

    echo $id;
?>