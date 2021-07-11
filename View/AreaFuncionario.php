<?php
include_once("../View/Header.php");
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: Login.php");
    exit;
}
?>

Seja Bem vindo!