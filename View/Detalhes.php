<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Detalhes</title>
</head>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <?php
        $noticia = $_GET['paginaListar'];
        include "Matriz_Noticias.inc";
        ?>
        <h1 class="p-2 m-2 bg-info text-white text-center">Notícias sobre Tecnologia</h1>
        <div class='row mt-5'>
            <div class='container w-75'>
                <?php
                echo ("<div class='col text-center'>
                <p class='font-weight-bold text-uppercase'>" . $matriz_noticias[$noticia][1] . "</p>
                <img class='img-thumbnail' src='" . $matriz_noticias[$noticia][3] . "' alt='Foto da Notícia'/>
                <p class='text-justify mt-2'>" . $matriz_noticias[$noticia][2] . "</p
                </div>");
                ?>
            </div>
        </div>
    </div>
    <button class="btn btn-light btn-sm mb-2 mx-2" onclick="history.go(-1)">Voltar</button>
</body>

</html>