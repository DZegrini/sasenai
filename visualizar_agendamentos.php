</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-tJGsCG1vVL" once="menu" id="menu01-1">
	

	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="inicio.html">
						<img src="assets/images/eletrotech-2.png" alt="Mobirise Website Builder" style="height: 3rem;">
					</a>
				</span>
				
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
						<a class="nav-link link text-info text-primary display-4" href="inicio.html"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Retornar</a>

	</nav>
</section>
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
            <th>Endereço</th>
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
