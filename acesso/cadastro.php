<?php
include_once('../includes/conexao/conexao.php');

if (isset($_POST['submit'])) {

    $nome = $_POST["nome"];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];
    $cpf = $_POST['cpf'];

    $sql =  "INSERT INTO usuarios(nome,email,senha,tipo,cpf) VALUES('$nome','$email','$senha','$tipo','$cpf')";

    if (mysqli_query($conexao, $sql)) {
        echo $nome . " cadastrado com sucesso!";
    } else {
        echo $nome . ": Erro no cadastro!";
    }


    // $sql_verifica = "SELECT * FROM usuarios WHERE email = ? OR cpf = ?";
    // $stmt = $mysqli->prepare($sql_verifica);
    // $stmt->bind_param("ss", $email, $cpf);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     echo "Email ou Cpf ja cadrastado!!";
    //     # co""de...
    // } else {
    //     $sql = "INSERT INTO usuarios (nome, email, senha, tipo, cpf) VALUES (?, ?, ?, ?, ?)";
    //     $stmt = $mysqli->prepare($sql);
    //     $stmt->bind_param("sssss", $nome, $email, $senha, $tipo, $cpf);
    //     if ($stmt->execute()) {
    //         echo "Cadastro realizado com sucesso!";
    //     } else {
    //         echo "Erro ao cadastrar: " . $stmt->error;
    //     }
    // }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
</head>

<body>
    <form action="cadastro.php" method="POST">

        <p><label for="nome">Nome:</label> <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required></p>
        <p><label for="cpf">cpf:</label> <input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" required></p>
        <p><label for="email">Email:</label> <input type="email" id="email" name="email" placeholder="Digite seu email" required></p>
        <p><label for="senha">Senha:</label> <input type="password" id="senha" name="senha" placeholder="Crie uma nova senha" required></p>
        <p><label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="morador">Morador</option>
                <option value="admin">Administrador</option>
            </select>
        <p><button type="submit" name="submit">Entrar</button></p>
    </form>
    <button><a href="../inicio.php">Voltar para o ínicio</a></button>
</body>

</html>