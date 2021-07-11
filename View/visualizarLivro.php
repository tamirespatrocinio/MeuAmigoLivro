<?php
include_once("../View/header.php");
include_once("../Model/bancoLivro.php");
include_once("../Model/conexao.php");
?>

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
