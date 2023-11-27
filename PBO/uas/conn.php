<?php
$dns = 'mysql:host=localhost;dbname=test';
$user = 'root'; // Change with your username
$pass = ''; // Change with your password

try {
    $conn = new PDO($dns, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
