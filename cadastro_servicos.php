<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="./img/logo-maker-producoes-favicon.png" type="image/x-icon">
    <!--Conectando à biblioteca de ícones do google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./css/style.css">
    <style>
        body{
            margin-top: 50px;
            text-align: center;
        }
    </style>

</head>
<body>
<div>
    <h1>Cadastro de Clientes</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
<h2>Formulário de Serviços</h2>
    <form action="processa_servicos.php" method="post">
        <label for="nome_servico">Nome do Serviço:</label>
        <input type="text" id="nome_servico" name="nome_servico" required><br>

        <label for="descricao_servico">Descrição do Serviço:</label>
        <textarea id="descricao_servico" name="descricao_servico" rows="4" required></textarea><br>

        <label for="preco">Preço do Serviço (em reais):</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br>

        <label for="duracao_em_horas">Duração do Serviço (em horas):</label>
        <input type="number" id="duracao_em_horas" name="duracao_em_horas" step="0.01" required><br>

        <input type="submit" value="Inserir Serviço">
    </form>
    <a href="./index.php">
            <button><span class="material-symbols-outlined">keyboard_return</span></button>
     </a>
</body>
</html>