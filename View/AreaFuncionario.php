<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: Login.php");
    exit;
}

include_once("../View/Header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Funcionário</title>
</head>

<body>
    <h1 style="text-align: center;">Área do Funcionário</h1>
</body>

</html>