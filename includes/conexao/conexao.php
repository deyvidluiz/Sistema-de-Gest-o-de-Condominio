<?php
$servidor = "localhost";
$usuario = "root";
$senha = "dvd1224@";
$banco = "db_sistema";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// if ($conexao->connect_error) {
//     die("Falha na conexão: " . $conexao->connect_error);
// }

// echo "Conexão bem-sucedida!";
