<?php
$servidor = "localhost";
$usuario = "root";
$senha = "databasekey@31";
$banco = "db_sistema";
// $senha = "dvd1224@";


$conexao = mysqli_connect("$servidor", "$usuario", "$senha", "$banco");


// VERIFICAR CONEXÃO COM BANCO DE DADOS.
// if ($conexao) {
//     echo "conectado com sucesso!";
// } else {
//     echo "A conexão falhou";
// }
