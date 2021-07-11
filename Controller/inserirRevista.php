<?php
include_once("../View/header.php"); 
require_once("../Model/bancoRevista.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereRevista($conexao, $revista, $capa, $ano, $editora, $url)){
    echo("A revista foi cadastrada com sucesso!");
}else{
    echo("A revista não foi para o banco de dados!");
}


