<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoRevista.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (alteraRevista($conexao,$codrevista, $revista, $capa, $ano, $editora, $url)) {
    echo ("<p class='alert alert-primary' role='alert'>A revista foi alterada com sucesso.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>A revista não foi alterada.</p>");
}