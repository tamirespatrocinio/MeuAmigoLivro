<?php
include_once("../View/header.php"); 
require_once("../Model/bancoQuadrinho.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereQuadrinho($conexao, $quadrinho, $capa, $genero, $resenha, $ano, $editora, $autor, $url)){
    echo("O quadrinho foi cadastrado com sucesso!");
}else{
    echo("O quadrinho não foi para o banco de dados!");
}


