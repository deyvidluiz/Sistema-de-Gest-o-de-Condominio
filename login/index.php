<?php 
    if (isset($_POST['submit'])){
        
        //  print_r($_POST['email']);
        // echo ('<br>');
        //  print_r($_POST['senha']);

        //  print_r($_POST['nome']);
        
         include_once('c:\xampp\htdocs\Sistema_de_condominio\conexão\conexão.php'); 

         $nome = $_POST["nome"];
         $email = $_POST['email'];
         $senha = $_POST['senha'];
         $tipo = $_POST['tipo'];
         $status = $_POST['status'];

         $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,tipo,status) VALUES('$nome','$email','$senha','$tipo','$status')");


    }


?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <p><input type="text" name="nome" placeholder="Digite seu nome:"></p>
        <p><input type="email" name="email" placeholder="Digite seu email:"></p>
        <p><input type="password" name="senha" placeholder="Digite sua senha:"></p>
        <p><input type="text" name="tipo" placeholder="Digite seu tipo:"></p>
        <p><input type="number" name="status" placeholder="Digite seu status:"></p>
        <p><button type="submit" name="submit">Entrar</button></p>
        <p><a href="">Esqueceu sua senha?</a></p>
        </form>
</body>
</html>
