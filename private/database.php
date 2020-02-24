<?php

require_once('db_credentials.php');

function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

function db_escape($connection, $string)
{
    return mysqli_real_escape_string($connection, $string);
}

function confirm_db_connect()
{
    if (mysqli_connect_errno()) {
        $msj = "Database connection failed ";
        $msj .= mysqli_connect_error();
        $msj .= " (" . mysqli_connect_error() . ")";
        exit($msj);
    }
}

function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed");
    }
}
