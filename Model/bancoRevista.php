<?php
function insereRevista($conexao, $revista, $capa, $ano, $editora, $url)
{
    $query = "insert into tbrevista(nomerevista,caparevista,anorevista,editorarevista,urlrevista) values('{$revista}', '{$capa}', '{$ano}', '{$editora}','{$url}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuNomeRevista($conexao, $revista)
{
    $query = "select * from tbrevista where nomerevista like '%{$revista}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function visuCodigoRevista($conexao, $codigo){
    $query ="Select * from tbrevista where codrevista={$codigo}";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function alteraRevista($conexao,$codrevista, $revista, $capa, $ano, $editora, $url)
{
    $query = "update tbrevista set nomerevista='{$revista}',
    caparevista='{$capa}',
    anorevista='{$ano}',
    editorarevista='{$editora}',
    urlrevista='{$url}' where codrevista='{$codrevista}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteRevista($conexao, $codrevista)
{
    $query = "delete from tbrevista where codrevista='{$codrevista}'";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}