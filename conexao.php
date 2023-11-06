<?php
//incluir arquivo uma vez
include_once("conexao.php");

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bugetproject";
//$port = 3306;

//criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha,$dbname);
