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

        <div class="col-md-4">
            <label for="inputAutor" class="form-label">Autor</label>
            <input type="text" value="<?= $livro['autorlivro'] ?>" name="autor" class="form-control" id="inputAutor">
        </div>

        <div class="col-md-4">
            <label for="inputEditora" class="form-label">Editora</label>
            <input type="text" value="<?= $livro['editoralivro'] ?>" name="editora" class="form-control" id="inputEditora">
        </div>

        <div class="col-md-10">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $livro['urllivro'] ?>" name="url" class="form-control" id="inputURL">
        </div>

        <div class="col-md-10">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $livro['capalivro'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="resenha" id="floatingTextarea2" style="height: 100px"><?= $livro['resenhalivro'] ?></textarea>
            <label for="floatingTextarea2">Resenha</label>
        </div>
    </form>

    <div class="btn-group mt-4" role="group">
        <div class="col-auto">
            <button type="submit" class="btn">Salvar</button>
        </div>

        <form method="get">
            <input type="hidden" name="codlivro" value="<?= $dados["codlivro"] ?>">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalToggle22" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggle22">Deseja realmente excluir o livro: <?= $livro['nomelivro'] ?> ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <?php
                    $r = isset($_POST["codlivro"]) ? $_POST["codlivro"] : "";
                    ?>
                    <form action="../Controller/deletelivro.php" method="Post">
                        <input type="hidden" name="codlivro" value="<?= $r ?>">
                        <button type="submit" class="btn">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("Footer.php")
?>