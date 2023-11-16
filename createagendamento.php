

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.6, https://mobirise.com -->
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
</body> 

    <title>Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        form input[type="text"],
        form input[type="date"],
        form input[type="time"],
        form select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }
        form select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16"><path d="M2 8l14 14 14-14z"/></svg>');
            background-repeat: no-repeat;
            background-position-x: calc(100% - 10px);
            background-position-y: center;
            padding-right: 25px;
        }
        form input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
<?php
    require_once('Conn.php');
    require_once("agendamento.php");// Recebendo os valores em forma de array
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificação se algum campo está vazio
        if (empty($_POST["nome"]) || empty($_POST["data"]) || empty($_POST["hora"]) || $_POST["funcionario"] == "Escolha" || $_POST["servico"] == "Escolha" || $_POST["pagamento"] == "Escolha") {
             echo "<script>alert('Por favor, preeencha todos os campos')</script>";
        } else {
            // Todos os campos foram preenchidos, então proceda com o agendamento
            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $createAgendamento = new Agendamento();
            $createAgendamento->formData = $formData;
            $result = $createAgendamento->create();
    
            if ($result) {
                echo "<script>alert('Agendamento marcado com sucesso')</script>";
            } else {
                echo "<script>alert('Algo deu errado, tente novamente')</script>";
            }
        }
    }
    
    ?>
    


    <div class="container">

        <h1>Agendamento</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="opcao">Selecione um funcionário:</label>
            <select id="funcionario" name="funcionario">
                <option value="Escolha">Escolha</option>
                <option value="Leandra">Leandra</option>
                <option value="Karen">Karen</option>
                <option value="Adeilson">Adeilson</option>
                <option value="Danilp">Danilo</option>
            </select>

            <label for="opcao2">Selecione o tipo de serviço:</label>
            <select id="servico" name="servico">
                <option value="Escolha">Escolha</option>
                <option value="Reparo Residencial/Predial">Reparo Residencial/Predial</option>
                <option value="Instalações Elétricas">Instalações Elétricas</option>
            </select>

            <label for="opcao3">Escolha a forma de pagamento:</label>
            <select id="pagamento" name="pagamento">
                <option value="Escolha">Escolha</option>
                <option value="PIX">PIX</option>
                <option value="Dinheiro (pagamento na hora)">Dinheiro (pagamento na hora)</option>
                <option value="Cartão de Crédito">Cartão de crédito</option>
                <option value="Cartão de débito">Cartão de débito</option>
            </select>
            <br><input type="submit" value="Agendar"  name="add_Agendamento"><br>





            
        </form>
        <div class="mbr-section-btn item-footer"><a href="tiposdeplano.html" class="btn item-btn btn-info display-7">Retornar</a></div>
        <div class="mbr-section-btn item-footer"><a href="index.html" class="btn item-btn btn-info display-7">Logout</a></div>
    </div> 

</body>

</html>


