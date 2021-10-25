<?php

$hname = 'localhost';
$username = 'root';
$password = '123456789';

$db_name = 'db_php_crud';

$conn = mysqli_connect($hname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
