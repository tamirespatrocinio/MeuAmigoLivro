<?php
session_start();
unset($_SESSION['id_usuario']);
header("Location: ../View/Login.php");
