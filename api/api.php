<?php
    define("key", file_get_contents("../../key.txt"));

    function get_mysql() {
        $mysql = new mysqli("localhost", "root", "", "banmanagement"); // TODO: Remove password!

        if ($mysql->connect_error) {
            die($mysql->connect_error);
        }

        return $mysql;
    }

    function add($uuid, $reason) {
        $date = date("Y-m-d H:i:s");
        get_mysql()->query("insert into bans (uuid, date, reason) values ('$uuid', '$date', '$reason')");
        return get_mysql()->query("select id from bans where uuid = '$uuid' and date = '$date' and reason = '$reason'")->fetch_assoc()["id"];
    }

    function update($id, $uuid, $reason) {
        get_mysql()->query("update bans set uuid = '$uuid', reason = '$reason' where id = $id");
    }

    function remove($uuid) {
        get_mysql()->query("delete from bans where uuid = '$uuid'");
    }

    function remove_by_id($id) {
        get_mysql()->query("delete from bans where id = $id");
    }

    function get($uuid) {
        return get_mysql()->query("select * from bans where uuid = '$uuid'")->fetch_assoc();
    }

    function get_by_id($id) {
        return get_mysql()->query("select * from bans where id = $id")->fetch_assoc();
    }

    function get_bans() {
        return get_mysql()->query("select * from bans");
    }

    function login($username, $password) {
        $password = hash("sha256", $password);
        return get_mysql()->query("select count(*) from users where username = '$username' and password = '$password'")->num_rows > 0;
    }

    function register($username, $password) {
        $password = hash("sha256", $password);
        get_mysql()->query("insert into users (username, password) values ('$username', '$password')");
    }
?>