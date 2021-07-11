<?php
include_once("Header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoLivro.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoLivro($conexao, $codigo);
$livro = mysqli_fetch_assoc($resul);
?>

<div class="container">
    <form action="../Controller/alteraLivro.php" method="post" class="row g-3">

        <div class="col-md-1">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $livro['codlivro'] ?>" name="codlivro" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome do Livro</label>
            <input type="text" value="<?= $livro['nomelivro'] ?>" name="livro" class="form-control" id="inputNome">
        </div>

        <div class="col-md-3">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" value="<?= $livro['generolivro'] ?>" name="genero" class="form-control" id="inputGenero">
        </div>
        <div class="col-md-2">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="number" value="<?= $livro['anolivro'] ?>" name="ano" class="form-control" id="inputAno">
        </div>

        <div class="col-md-5">
            <label for="inputAutor" class="form-label">Autor</label>
            <input type="text" value="<?= $livro['autorlivro'] ?>" name="autor" class="form-control" id="inputAutor">
        </div>

        <div class="col-md-5">
            <label for="inputEditora" class="form-label">Editora</label>
            <input type="text" value="<?= $livro['editoralivro'] ?>" name="editora" class="form-control" id="inputEditora">
        </div>

        <div class="col-md-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $livro['urllivro'] ?>" name="url" class="form-control" id="inputURL">
        </div>

        <div class="col-md-12">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $livro['capalivro'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="resenha" id="floatingTextarea2" style="height: 100px"><?= $livro['resenhalivro'] ?></textarea>
            <label for="floatingTextarea2"></label>
        </div>
    </form>

    <div class="btn-group mt-4" role="group">
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>