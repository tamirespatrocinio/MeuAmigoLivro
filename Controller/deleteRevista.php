<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoRevista.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteRevista($conexao, $codrevista)) {
    echo ("<h4 class='alert alert-primary text-center role='alert'><strong>A Revista foi excluída.</strong></h4>");
} else {
    echo ("<h4 class='alert alert-danger text-center' role='alert'><strong>Erro! A Revista não foi excluída.</strong></h4>");
}
