<?php
include_once('../Model/usuarios.php');
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="30x30" href="img/meu.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-md-6" id="img-bg"></div>
            <div class="col-md-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">

                        <h1 class="text-center mb-3">Login</h1>

                        <form method="POST">
                            <div class="form-group">
                                <label for="inputUsuario">Email</label>
                                <input class="form-control" type="email" name="email" id="inputUsuario">
                            </div>

                            <div class="form-group">
                                <label for="inputSenha">Senha</label>
                                <input class="form-control" type="password" name="senha" id="inputSenha">
                            </div>

                            <?php
                            if (isset($_POST['email'])) {
                                $email = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);

                                if (!empty($email) && !empty($senha)) {

                                    $u->conectar("bdmeuamigolivro", "localhost", "root", "");

                                    if ($u->msgErro == "") {

                                        if ($u->logar($email, $senha)) {
                                            header("location: AreaFuncionario.php");
                                        } else {
                            ?>
                                            <div class="container-fluid text-center mb-3 alert alert-danger">Email e/ou senha incorretos!</div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="container-fluid text-center mb-3 alert alert-danger">
                                            <?php echo "Erro: " . $u->msgErro; ?>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="container-fluid text-center mb-3 alert alert-danger">Preencha todos os campos!</div>
                            <?php
                                }
                            }
                            ?>
                            <p class="text-center ">
                                Não tem uma conta? <a href="Cadastrar.php">Cadastre-se</a>
                            </p>
                            <div class="d-flex justify-content-center">
                                <button onclick="window.history.go(-1); return false" type="submit" value="Cancel" class="btn btn-login">Voltar</button>
                                <button type="submit" value="acessar" class="btn btn-login">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>