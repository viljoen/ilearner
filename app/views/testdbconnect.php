<?php

$host = 'localhost';
$db = 'ilearner';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $conn = new PDO($dsn, $user, $pass, $options);

    if ($conn) {
        echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    echo "Connection failed reason:" . $e->getMessage();
}
?>
