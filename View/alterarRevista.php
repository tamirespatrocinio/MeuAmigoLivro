<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: Login.php");
    exit;
}

include_once('../Model/conexao.php');
include_once('../Model/bancoRevista.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoRevista($conexao, $codigo);
$revista = mysqli_fetch_assoc($resul);
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
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar Revista</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 60px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/meu.png" alt="logo" style="height: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="AreaFuncionario.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livros
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item nav-link" href="../View/CadLivro.php">Cadastrar</a></li>
                            <li><a class="dropdown-item nav-link" href="../View/VisualizarLivro.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Quadrinhos
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item nav-link" href="../View/CadQuadrinho.php">Cadastrar</a></li>
                            <li><a class="dropdown-item nav-link" href="../View/VisualizarQuadrinho.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Revistas
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item nav-link" href="../View/CadRevista.php">Cadastrar</a></li>
                            <li><a class="dropdown-item nav-link" href="../View/VisualizarRevista.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="../Controller/logout.php">
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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