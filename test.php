<?php
    require("api/api.php");

    add("----", "You have been banned!");
    var_dump(get("----"));
    remove("----");
?>