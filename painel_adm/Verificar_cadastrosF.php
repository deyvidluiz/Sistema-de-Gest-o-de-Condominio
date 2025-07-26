<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificar cadastros</title>
</head>

<body>
    <?php
    include "../includes/conexao/conexao.php";

    if (isset($_POST['procurar'])) {
        $pesquisa = $_POST['procurar'];
    } else {
        $pesquisa = '';
    }

    $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conexao, $sql);

    ?>
    <form action="Verificar_cadastros.php" method="POST">
        <label for="procurar">Procurar cadastros </label><input type="search" name="procurar" placeholder="procurar nome">
        <br><br>
        <button type="submit">procurar</button>
    </form>
    <table border="2">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>e-mail</th>
                <th>senha</th>
                <th>tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($dados)) {
                $id = $linha['id'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $senha = $linha['senha'];
                $tipo = verificar_tipo($linha['tipo']);
                $cpf = $linha['cpf'];

                echo "<tr>
                    <th>$nome</th>
                    <th>$email</th>
                    <th>$cpf</th>
                    <th>$senha</th>
                    <th>$tipo</th>
                    ";
            }

            function verificar_tipo($type)
            {
                if ($type == "admin") {
                    return "administrador";
                }else{
                    return "morador";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>