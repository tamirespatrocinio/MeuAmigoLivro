<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoQuadrinho.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoQuadrinho($conexao, $codigo);
$quadrinho = mysqli_fetch_assoc($resul);
?>
<div class="container">
    <form action="../Controller/alteraQuadrinho.php" method="post" class="row g-3">

        <div class="col-md-1">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $quadrinho['codquadrinho'] ?>" name="codquadrinho" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-6">
        <label for="inputNome" class="form-label">Nome do Quadrinho</label>
        <input type="text" value="<?= $quadrinho['nomequadrinho'] ?>" name="quadrinho" class="form-control" id="inputNome">
      </div>

      <div class="col-md-5">
        <label for="inputGenero" class="form-label">Gênero</label>
        <input type="text" value="<?= $quadrinho['generoquadrinho'] ?>" name="genero" class="form-control" id="inputGenero">
      </div>

      <div class="col-12">
        <label for="inputCapa" class="form-label">Capa</label>
        <input type="text" value="<?= $quadrinho['capaquadrinho'] ?>" name="capa" class="form-control" id="inputCapa">
      </div>

      <div class="col-md-4">
        <label for="inputAno" class="form-label">Ano</label>
        <input type="number" value="<?= $quadrinho['anoquadrinho'] ?>" name="ano" class="form-control" id="inputAno">
      </div>

      <div class="col-md-4">
        <label for="inputAutor" class="form-label">Autor</label>
        <input type="text" value="<?= $quadrinho['autorquadrinho'] ?>" name="autor" class="form-control" id="inputAutor">
      </div>

      <div class="col-md-4">
        <label for="inputEditora" class="form-label">Editora</label>
        <input type="text" value="<?= $quadrinho['editoraquadrinho'] ?>" name="editora" class="form-control" id="inputEditora">
      </div>

      <div class="col-md-12">
        <label for="inputResenha" class="form-label">Resenha</label>
        <input type="text" value="<?= $quadrinho['resenhaquadrinho'] ?>" name="resenha" class="form-control" id="inputResenha">
      </div>

      <div class="col-md-12">
        <label for="inputURL" class="form-label">URL</label>
        <input type="text" value="<?= $quadrinho['urlquadrinho'] ?>" name="url" class="form-control" id="inputURL">
      </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
    </form>
</div>