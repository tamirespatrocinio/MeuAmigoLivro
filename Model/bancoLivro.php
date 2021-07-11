<?php
function insereLivro($conexao, $livro, $capa, $genero, $resenha, $ano, $editora, $autor, $url)
{
    $query = "insert into tblivro(nomelivro,capalivro,generolivro,resenhalivro,anolivro,editoralivro,autorlivro,urllivro) values('{$livro}', '{$capa}', '{$genero}', '{$resenha}', '{$ano}', '{$editora}', '{$autor}', '{$url}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuNomeLivro($conexao, $livro)
{
    $query = "select * from tblivro where nomelivro like '%{$livro}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function visuCodigoLivro($conexao, $codigo)
{
    $query = "Select * from tblivro where codlivro={$codigo}";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function alteraLivro($conexao, $codlivro, $livro, $capa, $genero, $resenha, $ano, $editora, $autor, $url)
{
    $query = "update tblivro set nomelivro='{$livro}',
    capalivro='{$capa}',
    generolivro='{$genero}', 
    resenhalivro='{$resenha}',
    anolivro='{$ano}',
    editoralivro='{$editora}',
    autorlivro='{$autor}',
    urllivro='{$url}' where codlivro='{$codlivro}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteLivro($conexao, $codlivro)
{
    $query = "delete from tblivro where codlivro='{$codlivro}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
