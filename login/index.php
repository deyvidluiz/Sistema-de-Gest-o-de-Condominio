<?php 
    if (isset($_POST['submit'])){
        
        //  print_r($_POST['email']);
        // echo ('<br>');
        //  print_r($_POST['senha']);

        //  print_r($_POST['nome']);
        
         include_once('../includes/conexao/conexao.php'); 

         $nome = $_POST["nome"];
         $email = $_POST['email'];
         $senha = $_POST['senha'];
        //  $tipo = $_POST['tipo'];
        //  $cpf = $_POST['cpf'];

         $sql_verifica = "SELECT * FROM usuarios WHERE nome = ? AND email = ? AND senha = ?";
         $stmt = $mysqli->prepare($sql_verifica);
         $stmt->bind_param ("sss", $nome, $email, $senha);
         $stmt->execute();
         $result = $stmt->get_result();

         if ($result->num_rows == 1) {
            echo"login efetuado com sucesso";
            # co""de...
        }else
        {
            echo 'Login invalido';
            echo '<br>Cadastrar-se <a href="../acesso/cadastro.php">Clique aqui</a>';
        }


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
    <<form action="index.php" method="post">

<p><label for="nome">Nome:</label> <input type="text" id="nome" name="nome" placeholder="Digite seu nome"></p>
<p><label for="email">Email:</label> <input type="email" id="email" name="email" placeholder="Digite seu email"></p>
<p><label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"></p>
<p><button type="submit" name="submit">Entrar</button></p>
<p><a href="">Esqueceu sua senha?</a></p>
</form>
</body>
</html>
