<?php
include_once("../View/header.php");
include_once("../Model/bancoRevista.php");
include_once("../Model/conexao.php");
?>

<div class="container">
  <form action="" method="post" class="row g-3">

    <div class="col-12">
      <label class="form-label">Digite o nome da Revista</label>
      <input type="text" required class="form-control" name="revista">
      </br>
  </form>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Revista</th>
        <th scope="col">Capa</th>
        <th scope="col">Ano</th>
        <th scope="col">Editora</th>
        <th scope="col">Alterar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $revista = isset($_POST["revista"]) ? $_POST["revista"] : "";
      $dado = visuNomeRevista($conexao, $revista);
      foreach ($dado as $dados) :
      ?>
        <tr>
          <th scope="row"><?= $dados["codrevista"] ?></th>
          <td><?= $dados["nomerevista"] ?></td>
          <td><img src="<?= $dados["caparevista"] ?>" width="50"> </td>
          <td><?= $dados["anorevista"] ?></td>
          <td><?= $dados["editorarevista"] ?></td>
          <td>
            <a class="btn btn-primary" href="alterarRevista.php?codigo=<?= $dados["codrevista"] ?>">Alterar</a>
          </td>
          <td>
            <form action="../Controller/deleteRevista.php" method="POST">
              <input type="hidden" name="codrevista" value="<?= $dados["codrevista"] ?>">
              <button class="btn btn-danger" type="submit">Deletar</button>
            </form>
          </td>
        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>
