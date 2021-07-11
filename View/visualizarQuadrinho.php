<?php
include_once("../View/header.php");
include_once("../Model/bancoQuadrinho.php");
include_once("../Model/conexao.php");
?>

<div class="container">
  <form action="" method="post" class="row g-3">

    <div class="col-12">
      <label class="form-label">Digite o nome do Quadrinho</label>
      <input type="text" required class="form-control" name="quadrinho">
      </br>
  </form>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Quadrinho</th>
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
      $quadrinho= isset($_POST["quadrinho"]) ? $_POST["quadrinho"] : "";
      $dado = visuNomeQuadrinho($conexao, $quadrinho);
      foreach ($dado as $dados) :
      ?>
        <tr>
          <th scope="row"><?= $dados["codquadrinho"] ?></th>
          <td><?= $dados["nomequadrinho"] ?></td>
          <td><img src="<?= $dados["capaquadrinho"] ?>" width="50"> </td>
          <td><?= $dados["generoquadrinho"] ?></td>
          <td><?= $dados["anoquadrinho"] ?></td>
          <td><?= $dados["editoraquadrinho"] ?></td>
          <td><?= $dados["autorquadrinho"] ?></td>
          <td>
            <a class="btn btn-primary" href="alterarQuadrinho.php?codigo=<?= $dados["codquadrinho"] ?>">Alterar</a>
          </td>
          <td>
            <form action="../Controller/deleteQuadrinho.php" method="POST">
              <input type="hidden" name="codquadrinho" value="<?= $dados["codquadrinho"] ?>">
              <button class="btn btn-danger" type="submit">Deletar</button>
            </form>
          </td>
        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>
