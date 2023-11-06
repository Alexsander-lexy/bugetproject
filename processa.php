<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome_empresa',FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST,'celular_whatsapp',FILTER_SANITIZE_NUMBER_INT);
$cnpj = filter_input(INPUT_POST,'cnpj',FILTER_SANITIZE_NUMBER_INT);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);

//echo "Nome: $nome<br>";
//echo "Celular: $celular<br>";
//echo "CNPJ: $cnpj<br>";
//echo "CEP: $cep<br>";
//echo "Cidade: $cidade";

$result_usuario = "INSERT INTO clientes (NomeEmpresa,CelularWhatsapp,CNPJ,CEP,Cidade) VALUES ('$nome','$celular','$cnpj','$cep','$cidade')";
$resultado_usuario =  mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Cliente cadastrado com sucesso!</p>";
    header("Location: cadastro_clientes.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Cliente não cadastrado com sucesso!</p>";
    header("Location: cadastro_clientes.php");
}