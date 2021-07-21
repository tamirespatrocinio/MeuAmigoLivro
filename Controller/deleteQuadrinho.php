<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoQuadrinho.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteQuadrinho($conexao, $codquadrinho)) {
    echo ("<h4 class='alert alert-primary text-center role='alert'><strong>O quadrinho foi excluído.</strong></h4>");
} else {
    echo ("<h4 class='alert alert-danger text-center' role='alert'><strong>Erro! O quadrinho não foi excluído.</strong></h4>");
}
