<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoQuadrinho.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteQuadrinho($conexao, $codquadrinho)) {
    echo ("<p class='alert alert-primary' role='alert'>O quadrinho foi excluído.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O quadrinho não foi excluído.</p>");
}