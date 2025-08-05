<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_login';

$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}
