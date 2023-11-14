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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $data_hora = $_POST['data_hora'];

    try {
        $stmt = $conn->prepare("INSERT INTO agendamentos (nome, cpf, email, telefone, endereco, data_hora) VALUES (:nome, :cpf, :email, :telefone, :endereco, :data_hora)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':data_hora', $data_hora);
        $stmt->execute();
        echo "Agendamento feito com sucesso!";
    } catch(PDOException $e) {
        echo "Erro ao agendar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Agendamento</title>
</head>
<body>
    <h1>Agendamento</h1>
    <form method="post" action="agendamento.php">
        Nome: <input type="text" name="nome"><br>
        Cpf: <input type="text" name="cpf"><br>
        Email: <input type="text" name="email"><br>
        Telefone: <input type="text" name="telefone"><br>
        Endereço: <input type="text" name="endereco"><br>
        Data e Hora: <input type="datetime-local" name="data_hora"><br>
      

        <input type="submit" value="Agendar">
    </form>
</body>
</html>

