<?php
include_once("../View/Header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoLivro.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteLivro($conexao, $codlivro)) {
    echo ("<h4 class='alert alert-primary text-center role='alert'><strong>O livro foi excluído.</strong></h4>");
} else {
    echo ("<h4 class='alert alert-danger text-center' role='alert'><strong>Erro! O livro não foi excluído.</strong></h4>");
}
