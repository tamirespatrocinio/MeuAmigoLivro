<?php
session_start();
isset($_SESSION['id_usuario']);
include_once("../Model/usuarios.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/index.css">

  <title>Livros</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark" style="margin-bottom: 60px;">

    <div class="container-fluid">
      <a class="navbar-brand" href="Index.php"><img src="../View/img/livro.png" alt="" width="140px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 80px;">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link active" aria-current="page" style="color: white;" href="../View/Index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="../View/Livros.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
              Livros
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="../View/Quadrinhos.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
              Quadrinhos
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="../View/Revistas.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
              Revistas
            </a>
          </li>
      </div>
      <li class="dropdown-toggle d-flex align-items-center hidden-arrow"><a href="Login.php"><button class="btn-nav login-btn">Login</button></a>
    </div>
    </div>
  </nav>

  <div class="row mb-5">
    <div class="col-lg-4 mx-auto">
      <form action="" method="POST">
        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
          <div class="input-group px-1">
            <input type="search" name="busca" placeholder="Qual livro deseja procurar?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
            <div class="input-group-append ">
              <button type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>