<?php
include_once("../Model/bancoLivro.php");
include_once("../Model/conexao.php");

session_start();
isset($_SESSION['id_usuario']);
include_once("../Model/usuarios.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="20x20" href="img/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Visualizar Livros</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 60px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/meu.png" alt="logo" style="height: 80px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Livros
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item nav-link" href="../View/CadLivro.php">Cadastrar</a></li>
              <li><a class="dropdown-item nav-link" href="../View/VisualizarLivro.php">Buscar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quadrinhos
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item nav-link" href="../View/CadQuadrinho.php">Cadastrar</a></li>
              <li><a class="dropdown-item nav-link" href="../View/VisualizarQuadrinho.php">Buscar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Revistas
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item nav-link" href="../View/CadRevista.php">Cadastrar</a></li>
              <li><a class="dropdown-item nav-link" href="../View/VisualizarRevista.php">Buscar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link" href="../Controller/logout.php">
              Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <form action="" method="post" class="row g-3">

      <div class="col-12">
        <label class="form-label">Digite o nome do Livro</label>
        <input type="text" required class="form-control" name="livro">
        </br>
    </form>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Livro</th>
          <th scope="col">Capa</th>
          <th scope="col">Gênero</th>
          <th scope="col">Ano</th>
          <th scope="col">Editora</th>
          <th scope="col">Autor</th>
          <th scope="col">Alterar</th>
          <th scope="col">Deletar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $livro = isset($_POST["livro"]) ? $_POST["livro"] : "";
        $dado = visuNomeLivro($conexao, $livro);
        foreach ($dado as $dados) :
        ?>
          <tr>
            <th scope="row"><?= $dados["codlivro"] ?></th>
            <td><?= $dados["nomelivro"] ?></td>
            <td><img src="<?= $dados["capalivro"] ?>" width="50"> </td>
            <td><?= $dados["generolivro"] ?></td>
            <td><?= $dados["anolivro"] ?></td>
            <td><?= $dados["editoralivro"] ?></td>
            <td><?= $dados["autorlivro"] ?></td>
            <td>
              <a class="btn btn-primary" href="alterarLivro.php?codigo=<?= $dados["codlivro"] ?>">Alterar</a>
            </td>
            <td>
              <form action="../Controller/deleteLivro.php" method="POST">
                <input type="hidden" name="codlivro" value="<?= $dados["codlivro"] ?>">
                <button class="btn btn-danger" type="submit">Deletar</button>
              </form>
            </td>
          </tr>
        <?php
        endforeach
        ?>
      </tbody>
    </table>