
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cadastro</title>
</head>

<body>
    <?php
    
    include_once('../includes/conexao/conexao.php'); 
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM usuarios WHERE id = $id";

        $dados = mysqli_query($mysqli, $sql);
        $linha = mysqli_fetch_assoc($dados);


    
    ?>
    <form action="./editarcad.php" method="post">

        <p><label for="nome">Nome:</label> <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $linha['nome'];?>"></p>
        <p><label for="cpf">cpf:</label> <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx"value="<?php echo $linha['cpf'];?>"></p>
        <p><label for="email">Email:</label> <input type="email" id="email" name="email" placeholder="Digite seu email"value="<?php echo $linha['email'];?>"></p>
        <p><label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"value="<?php echo $linha['senha'];?>"></p>
        <p><label for="tipo"value="<?php echo $linha['tipo'];?>">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="morador">Morador</option>
                <option value="adm">Administrador</option>
            </select>
        <p><button type="submit" name="submit">Entrar</button></p>
        <p><a href="">Esqueceu sua senha?</a></p>
    </form>
</body>

</html>