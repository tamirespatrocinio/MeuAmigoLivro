<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoRevista.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoRevista($conexao, $codigo);
$revista = mysqli_fetch_assoc($resul);
?>
<div class="container">
    <form action="../Controller/alteraRevista.php" method="post" class="row g-3">

        <div class="col-md-2">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $revista['codrevista'] ?>" name="codrevista" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome da Revista</label>
            <input type="text" value="<?= $revista['nomerevista'] ?>" name="revista" class="form-control" id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="number" value="<?= $revista['anorevista'] ?>" name="ano" class="form-control" id="inputAno">
        </div>

        <div class="col-md-6">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $revista['caparevista'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="col-md-6">
            <label for="inputEditora" class="form-label">Editora</label>
            <input type="text" value="<?= $revista['editorarevista'] ?>" name="editora" class="form-control" id="inputEditora">
        </div>

        <div class="col-md-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $revista['urlrevista'] ?>" name="url" class="form-control" id="inputURL">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
    </form>
</div>