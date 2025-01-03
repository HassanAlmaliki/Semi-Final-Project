<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = 'registerdb';
try {
    $dsn = "mysql:host=$server;dbname=$dbname;charset=utf8mb4";
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    echo "connected Fails" . $e->getMessage();
}