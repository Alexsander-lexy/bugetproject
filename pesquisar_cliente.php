<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

if (!empty($cpf)) {
    // Consulta SQL para pesquisar o cliente com o CNPJ especificado
    $result_cliente = "SELECT * FROM clientes WHERE CNPJ = '$cpf'";
    $resultado_cliente = mysqli_query($conn, $result_cliente);

    if (mysqli_num_rows($resultado_cliente) > 0) {
        // Cliente encontrado
        $cliente = mysqli_fetch_assoc($resultado_cliente);

        // Armazenar as informações do cliente nas variáveis de sessão
        $_SESSION['clienteEncontrado'] = true;
        $_SESSION['cliente'] = $cliente;

        header("Location: index.php"); // Redirecionar de volta para a página inicial
        exit();
    }
}

// Cliente não encontrado
$_SESSION['clienteEncontrado'] = false;
header("Location: index.php"); // Redirecionar de volta para a página inicial
exit();
?>