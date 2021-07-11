<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoLivro.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (alteraLivro($conexao, $codlivro, $livro, $capa, $genero, $resenha, $ano, $editora, $autor, $url)) {
    echo ("<p class='alert alert-primary' role='alert'>O Filme foi alterado com sucesso.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O Filme não foi alterado.</p>");
}

?>