<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <?php 
    $procurar = $_POST['Buscar'] ?? '';
    include('../includes/conexao/conexao.php');

    $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$procurar%'";
    $dados = mysqli_query($mysqli, $sql);
    ?>

   
    
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="./index.php" method="post">
      <input class="form-control me-2" type="search" name="Buscar" placeholder="Nome" aria-label="Procurar" autofocus/>
      <button class="btn btn-outline-success" type="submit">Procurar</button>
    </form>
  </div>
</nav>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">tipo</th>
      <th scope="col">senha</th>
      <th scope="col">Opições</th>
    </tr>
  </thead>
        <tbody>
    <?php 
     while($linha = mysqli_fetch_assoc($dados)){
        $id = $linha['id'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $tipo = $linha['tipo'];
        $senha = $linha['senha'];
        echo"<tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$email</td>
            <td>$tipo</td>
            <td>$senha</td>
            <td>
                <a href='#' class='btn btn-primary btn-sm me-1' title='Editar'>
                    <span class='bi bi-pencil'></span> Editar
                </a>
                <a href='#' class='btn btn-danger btn-sm' title='Excluir' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?');\">
                    <span class='bi bi-trash'></span> Excluir
                </a>
            </td>
            </tr>";
       
        }
    ?>
        </tbody>
      </table>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>