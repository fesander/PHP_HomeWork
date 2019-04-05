<?php
require_once "../controllers/config/database.php";


function isTableEmpty($connect, $table)
{
    $query = "SELECT * FROM {$table}";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    if (mysqli_num_rows($result) == 0)
        return true;
    else
        return false;
}

function getAll($connect, $table, $orderBy = 'id')
{
    $query = "SELECT * FROM {$table} order by {$orderBy} desc";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    return $res;
}

function getOne($connect, $id, $table)
{
    $query = sprintf("SELECT * FROM {$table} where id=%d", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}

function getByColumn($connect, $column, $value, $table)
{
    $query = sprintf("SELECT * FROM {$table} where %s=%d", $column, (int)$value);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    return $res;
}

function newUser($connect, $name, $login, $email, $pass)
{

    $t = "INSERT INTO users (name, login, email, password) VALUES ('%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $login), mysqli_real_escape_string($connect, $email), mysqli_real_escape_string($connect, $pass));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    return true;
}