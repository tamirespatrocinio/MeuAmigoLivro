<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoRevista.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteRevista($conexao, $codrevista)) {
    echo ("<p class='alert alert-primary' role='alert'>A Revista foi excluída.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>A Revista não foi excluída.</p>");
}

