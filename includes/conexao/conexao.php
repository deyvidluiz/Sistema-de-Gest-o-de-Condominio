<?php
$servidor = "localhost";
$usuario = "root";
$senha = "databasekey@31";
$banco = "db_sistema";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida!";
