<?php
$servidor = "localhost";
$usuario = "root";  
// <<<<<<< HEAD:includes/conexao/conexão.php
$senha = "dvd1224@";
$banco = "db_sistema"; 
// =======
// $senha = "databasekey@31";
// $banco = "sistema_condominio"; 
// >>>>>>> modfranciel:includes/conexao/conexao.php


$mysqli = new mysqli("$servidor", "$usuario", "$senha", "$banco");

// if ($conexao->connect_error) {
//     die("Falha na conexão: " . $conexao->connect_error);
// }

// echo "Conexão bem-sucedida!";
?>
