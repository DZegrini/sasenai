<?php
// Conexão com o banco de dados (usando as mesmas variáveis $dsn, $username, $password)
include('conn.php');
// Processamento do formulário de login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM usuario WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        echo 'Login realizado!'; 
        echo '<script>window.location.href="inicio.html";</script>';
        
    } else {
        echo 'Login failed. Please check your username and password.';
    }
}

?>
