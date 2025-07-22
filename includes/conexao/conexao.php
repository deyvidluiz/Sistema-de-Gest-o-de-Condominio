<?php
$servidor = "localhost";
$usuario = "root";  
$senha = "databasekey@31";
$banco = "sistema_condominio"; 


$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>
