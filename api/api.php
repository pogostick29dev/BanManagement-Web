<?php
    define("key", "KEY"); // TODO: Make key customizable.

    function get_mysql() {
        $mysql = new mysqli("localhost", "root", "•••••", "banmanagement");

        if ($mysql->connect_error) {
            die($mysql->connect_error);
        }

        return $mysql;
    }

    function add($uuid, $reason) {
        get_mysql()->query("insert into bans (uuid, date, reason) values ('$uuid', '" . date("Y-m-d H:i:s") . "', '$reason')");
    }

    function remove($uuid) {
        get_mysql()->query("delete from bans where uuid = '$uuid'");
    }

    function get($uuid) {
        return get_mysql()->query("select * from bans where uuid = '$uuid'")->fetch_assoc();
    }
?>