<?php
session_start();
include_once("conexao.php");

$nome_servico = filter_input(INPUT_POST, 'nome_servico', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao_servico = filter_input(INPUT_POST, 'descricao_servico', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$duracao_em_horas = filter_input(INPUT_POST, 'duracao_em_horas', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

// Use prepared statements para evitar SQL injection
$stmt = $conn->prepare("INSERT INTO servicos (nome_servico, descricao_servico, preco, duracao_em_horas) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssdd", $nome_servico, $descricao_servico, $preco, $duracao_em_horas);

// Execute a query
$stmt->execute();

// Verifique se a inserção foi bem-sucedida
if ($stmt->insert_id) {
    $_SESSION['msg'] = "<p style='color:green;'>Serviço cadastrado com sucesso!</p>";
    header("Location: cadastro_servicos.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Serviço não cadastrado com sucesso!</p>";
    header("Location: cadastro_servicos.php");
}

// Feche o statement
$stmt->close();

// Feche a conexão
$conn->close();
?>