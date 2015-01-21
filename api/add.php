<?php
    require("api.php");

    if (!isset($_POST["key"]) || $_POST["key"] != key) {
//        die("Incorrect key.");
    }

    if (isset($_POST["id"])) {
        update($_POST["id"], $_POST["uuid"], $_POST["reason"]);
    }

    else {
        add($_POST["uuid"], $_POST["reason"]);
    }

    header("Location: ../index.php");
?>