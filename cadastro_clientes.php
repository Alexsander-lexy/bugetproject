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
    <form method="POST" action="processa.php">
        <label for="nome_empresa">Nome/Empresa:</label><br>
        <input type="text" name="nome_empresa" id="nome_empresa" required><br><br>
    
        <label for="celular_whatsapp">Celular(Whatsapp):</label><br>
        <input type="text" name="celular_whatsapp" id="celular_whatsapp" required><br><br>
    
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" name="cnpj" id="cnpj" required><br><br>
    
        <label for="cep">CEP:</label><br>
        <input type="text" name="cep" id="cep" required><br><br>
    
        <label for="cidade">Cidade:</label><br>
        <input type="text" name="cidade" id="cidade" required><br><br>
    
        <input type="submit" value="Cadastrar Cliente"><br>
    </form>
    <a href="./index.php">
            <button><span class="material-symbols-outlined">keyboard_return</span></button>
     </a>
</body>
</html>