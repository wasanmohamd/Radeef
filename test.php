<?php
$host = 'root';
$port = '4306';
$database = 'mydb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo 'Connection successful!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}