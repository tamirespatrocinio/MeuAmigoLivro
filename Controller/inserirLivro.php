<?php
require_once("../Model/bancoLivro.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (insereLivro($conexao, $livro, $capa, $genero, $resenha, $ano, $editora, $autor, $url)) {
    echo ("O livro foi cadastrado com sucesso!");
} else {
    echo ("O livro não foi para o banco de dados!");
}
