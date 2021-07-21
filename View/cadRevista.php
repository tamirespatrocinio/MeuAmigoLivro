<?php
include_once("../View/Header.php");
?>

<div class="container">
  <form action="../Controller/inserirRevista.php" method="get" class="row g-3" style="margin-top: 20px;">
    <div class="col-md-4">
      <label for="inputNome" class="form-label">Nome da Revista</label>
      <input type="text" name="revista" class="form-control" id="inputNome">
    </div>
    <div class="col-md-8">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" name="capa" class="form-control" id="inputCapa">
    </div>
    <div class="col-md-4">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="number" name="ano" class="form-control" id="inputAno">
    </div>
    <div class="col-md-8">
      <label for="inputEditora" class="form-label">Editora</label>
      <input type="text" name="editora" class="form-control" id="inputEditora">
    </div>
    <div class="col-md-12">
      <label for="inputURL" class="form-label">URL</label>
      <input type="text" name="url" class="form-control" id="inputURL">
    </div>
    <div class="col-12">
      <button type="submit" class="btn-login btn-default">Cadastrar</button>
    </div>
  </form>
</div>