<?php
include_once("../View/Header.php");
?>

<div class="container">
  <form action="../Controller/inserirLivro.php" method="get" class="row g-3" style="margin-top: 20px;">

    <div class="col-md-6">
      <label for="inputNome" class="form-label">Nome do Livro</label>
      <input type="text" name="livro" class="form-control" id="inputNome">
    </div>
    <div class="col-md-6">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" name="genero" class="form-control" id="inputGenero">
    </div>

    <div class="col-md-4">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="number" name="ano" class="form-control" id="inputAno">
    </div>

    <div class="col-md-4">
      <label for="inputAutor" class="form-label">Autor</label>
      <input type="text" name="autor" class="form-control" id="inputAutor">
    </div>

    <div class="col-md-4">
      <label for="inputEditora" class="form-label">Editora</label>
      <input type="text" name="editora" class="form-control" id="inputEditora">
    </div>

    <div class="col-12">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-12">
      <label for="inputURL" class="form-label">URL</label>
      <input type="text" name="url" class="form-control" id="inputURL">
    </div>


    <div class="col-md-12">
      <label for="inputResenha" class="form-label">Resenha</label>
      <textarea type="text" name="resenha" class="form-control" id="inputResenha" rows="6"></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </form>
</div>