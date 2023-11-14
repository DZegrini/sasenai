
<?php
include 'conexao.php';

try {
    $stmt = $conn->query("SELECT * FROM agendamentos");
    $result = $stmt->fetchAll();
} catch(PDOException $e) {
    echo "Erro ao buscar agendamentos: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agendamentos</title>
</head>
<body>
    <h1>Agendamentos</h1>
    <table>
        <tr>
           
            <th>Nome</th>
            <th>Cpf</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereco</th>
            <th>Data e Hora</th>
        </tr>
        <?php
        if ($result) {
            foreach ($result as $row) {
                echo "</td><td>" . $row["nome"] . "</td><td>"
                 . $row["cpf"] . "</td><td>". $row["email"] .  "</td><td>". $row["telefone"] .  "</td><td>". $row["endereco"] . "</td><td>"  . $row["data_hora"] . "</td></tr>";
            }
        } else {
            echo "0 resultados";
        }
        ?>
    </table>
</body>
</html>
