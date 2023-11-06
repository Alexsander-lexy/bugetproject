<?php
session_start();
include_once("conexao.php");

$nome_servico = filter_input(INPUT_POST, 'nome_servico',FILTER_SANITIZE_SPECIAL_CHARS);
$descricao_servico = filter_input(INPUT_POST,'descricao_servico',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST,'preco',FILTER_SANITIZE_NUMBER_FLOAT);
$duracao_em_horas = filter_input(INPUT_POST,'duracao_em_horas',FILTER_SANITIZE_NUMBER_FLOAT);

echo "$nome_servico<br>";
echo "$descricao_servico<br>";
echo "$preco<br>";
echo "$duracao_em_horas<br>";


$result = "INSERT INTO servicos (nome_servico,descricao_servico,preco,duracao_em_horas) VALUES ('$nome_servico','$descricao_servico','$preco','$duracao_em_horas')";
$resultado =  mysqli_query($conn,$result);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Serviço cadastrado com sucesso!</p>";
    header("Location: cadastro_servicos.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Serviço não cadastrado com sucesso!</p>";
    header("Location: cadastro_servicos.php");
}