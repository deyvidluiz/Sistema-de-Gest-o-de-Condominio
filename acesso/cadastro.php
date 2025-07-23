<?php
if (isset($_POST['submit'])) {

    include_once('../includes/conexao/conexao.php');


    $nome = $_POST["nome"];
    $email = $_POST['email'];
    $senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];
    $cpf = $_POST['cpf'];
    
    $sql_verifica = "SELECT * FROM usuarios WHERE email = ? OR cpf = ?";
    $stmt = $mysqli->prepare($sql_verifica);
    $stmt->bind_param ("ss", $email, $cpf);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo"Email ou Cpf ja cadrastado!!";
        # co""de...
    }else {
        $sql = "INSERT INTO usuarios (nome, email, senha, tipo, cpf) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sssss", $nome, $email, $senha, $tipo, $cpf);
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }
    }
}
    // $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,tipo,cpf) VALUES('$nome','$email','$senha','$tipo','$cpf')");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
</head>

<body>
    <form action="cadastro.php" method="post">

        <p><label for="nome">Nome:</label> <input type="text" id="nome" name="nome" placeholder="Digite seu nome"></p>
        <p><label for="cpf">cpf:</label> <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx"></p>
        <p><label for="email">Email:</label> <input type="email" id="email" name="email" placeholder="Digite seu email"></p>
        <p><label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"></p>
        <p><label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="morador">Morador</option>
                <option value="adm">Administrador</option>
            </select>
        <p><button type="submit" name="submit">Entrar</button></p>
        <p><a href="">Esqueceu sua senha?</a></p>
    </form>
</body>

</html>