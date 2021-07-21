<?php
include_once("../Model/bancoLivro.php");
include_once("../Model/conexao.php");

session_start();
isset($_SESSION['id_usuario']);
include_once("../Model/usuarios.php");
include_once("Header.php");
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
  <link rel="stylesheet" href="css/index.css">
  <title>Visualizar Livros</title>
</head>

<body>

  <div class="container">
    <form action="" method="post" class="row g-3">

      <div class="col-12">
        <label class="form-label">Digite o nome do Livro</label>
        <input type="text" required class="form-control" name="livro">
        </br>
        <div class="col-12 mb-3">
          <button type="submit" class="btn-login btn-default">Localizar</button>
        </div>
      </div>
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
              <button class="btn-login btn-default" href="alterarLivro.php?codigo=<?= $dados["codlivro"] ?>">Alterar</button>
            </td>
            <td>
              <form action="../Controller/deleteLivro.php" method="POST">
                <input type="hidden" name="codlivro" value="<?= $dados["codlivro"] ?>">
                <button class="btn-cancel btn-default" type="submit">Deletar</button>
              </form>
            </td>
          </tr>
        <?php
        endforeach
        ?>
      </tbody>
    </table>