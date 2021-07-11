<?php
function insereQuadrinho($conexao, $quadrinho, $capa, $genero, $resenha, $ano, $editora, $autor, $url)
{
    $query = "insert into tbquadrinho(nomequadrinho,capaquadrinho,generoquadrinho,resenhaquadrinho,anoquadrinho,editoraquadrinho,autorquadrinho,urlquadrinho) values('{$quadrinho}', '{$capa}', '{$genero}', '{$resenha}', '{$ano}', '{$editora}', '{$autor}', '{$url}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuNomeQuadrinho($conexao, $quadrinho)
{
    $query = "select * from tbquadrinho where nomequadrinho like '%{$quadrinho}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function visuCodigoQuadrinho($conexao, $codigo){
    $query ="Select * from tbquadrinho where codquadrinho={$codigo}";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function alteraQuadrinho($conexao,$codquadrinho, $quadrinho, $capa, $genero, $resenha, $ano, $editora, $autor, $url)
{
    $query = "update tbquadrinho set nomequadrinho='{$quadrinho}',
    capaquadrinho='{$capa}',
    generoquadrinho='{$genero}', 
    resenhaquadrinho='{$resenha}',
    anoquadrinho='{$ano}',
    editoraquadrinho='{$editora}',
    autorquadrinho='{$autor}',
    urlquadrinho='{$url}' where codquadrinho='{$codquadrinho}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteQuadrinho($conexao, $codquadrinho)
{
    $query = "delete from tbquadrinho where codquadrinho='{$codquadrinho}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}