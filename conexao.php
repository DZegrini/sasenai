<?php
$servername = "localhost"; // Endereço do servidor do banco de dados
$dbname = "eletrotech_bd"; // Nome do banco de dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?>
