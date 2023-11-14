<?php

$dsn = 'mysql:host=localhost;dbname=eletrotech_bd';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    header('Location: login.php');
    exit();
}
?>
