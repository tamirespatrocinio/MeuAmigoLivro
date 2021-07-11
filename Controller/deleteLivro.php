<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoLivro.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteLivro($conexao, $codlivro)) {
    echo ("<p class='alert alert-primary' role='alert'>O livro foi excluído.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O livro não foi excluído.</p>");
}