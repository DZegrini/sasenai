<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Clientes</title>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/eletrotech-1.png" type="image/x-icon">
  <meta name="description" content="Tipos de plano - Cliente">
  
  
  <title>Tipos de plano - Cliente</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Zen+Antique:400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Zen+Antique:400&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Manrope:200,300,400,500,600,700,800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:200,300,400,500,600,700,800&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
  </head>
<body>
  
  <section data-bs-version="5.1" class="menu menu4 cid-tVBKqlApYT" once="menu" id="menu04-1a">
	

	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="index.html">
						<img src="assets/images/eletrotech-2.png" alt="ELETROTECH" style="height: 4rem;">
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
						<a class="nav-link link text-info text-primary display-4" href="index.html"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Pagina Inicial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link show text-info text-primary display-4" href="sobre.html" aria-expanded="false"><span class="mobi-mbri mobi-mbri-help mbr-iconfont mbr-iconfont-btn"></span>Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-info text-primary display-4" href="login.php"><span class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn"></span>Login</a>
					</li></ul>
				
			</div>
		</div>
	</nav>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            color: #008000;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #008000;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #008000;
            color: #ffffff;
            cursor: pointer;
        }
    </style>
</head>
<body>



<?php
require_once("Conn.php");
require_once("User.php");

  
// Recebendo os valores em forma de array
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
// Verificando se o botão de cadastro foi acionado
if(!empty($formData['addUser'])){
    //Criando novo objeto e setando ao atributo formData o array
    $createUser = new User();
    $createUser->formData = $formData;
    $result = $createUser->create();

    if($result){
        echo "Usuário cadastrado com sucesso!";
    }
    else{
        echo "Usuário não cadastrado";
    }

}

?>

<h2>Cadastro</h2>
<form name="createUser"  method="POST" action="login.php">
    <label>Nome:</label><br>
    <input type="text" placeholdder="Nome completo" name="nome" required><br>

    <label>CPF:</label> <br>
    <input type="text" placeholdder="Cpf" name="cpf" required><br>
    
    <label>Telefone:</label><br>
    <input type="text" placeholdder="Telefone" name="telefone" required><br>
    
    <label>Endereço:</label><br>
    <input type="text" placeholdder="Endereço" name="endereco" required><br>



    <label>Email:</label><br>
    <input type="email" placeholdder="Email" name="email" required><br>



    <label>Senha:</label><br>
    <input type="password" placeholdder="Senha" name="password" required><br><br>


    <input type="submit" value="Cadastrar" name="addUser" >
</form>

</body>
<div class="mbr-section-btn item-footer"><a href="login.php" class="btn item-btn btn-info display-7">Já possui login?</a></div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="sobre2.html" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href="sobre.html">Unix</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  

	</nav>
</section>
</html> 