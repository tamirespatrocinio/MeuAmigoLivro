<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoQuadrinho.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (alteraQuadrinho($conexao,$codquadrinho, $quadrinho, $capa, $genero, $resenha, $ano, $editora, $autor, $url)) {
    echo ("<p class='alert alert-primary' role='alert'>O quadrinho foi alterado com sucesso.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O quadrinho não foi alterado.</p>");
}