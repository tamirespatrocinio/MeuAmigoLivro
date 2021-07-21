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
    <link rel="icon" type="image/png" sizes="20x20" href="img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Funcionário</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-md-6" id="img-bg"></div>
            <div class="col-md-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <h1 class="text-center mb-3">Cadastro Funcionário</h1>

                        <form method="POST">
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input class="form-control" type="text" name="nome" id="nome" maxlength="100">
                            </div>

                            <div class="form-group pt-3">
                                <label for="tel">Telefone</label>
                                <input class="form-control" type="text" name="telefone" id="tel" maxlength="13">
                            </div>

                            <div class="form-group pt-3">
                                <label for="usuario">Email</label>
                                <input class="form-control" type="email" name="email" id="usuario" maxlength="100">
                            </div>


                            <div class="form-group pt-3">
                                <label for="senha">Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha" maxlength="15">
                            </div>

                            <div class="form-group pt-3">
                                <label for="confirmarSenha">Confirmar Senha</label>
                                <input class="form-control" type="password" name="confSenha" id="confirmarSenha" maxlength="15">
                            </div>

                            <?php
                            if (isset($_POST['nome'])) {
                                $nome = addslashes($_POST['nome']);
                                $telefone = addslashes($_POST['telefone']);
                                $email = addslashes($_POST['email']);
                                $senha = addslashes($_POST['senha']);
                                $confirmarSenha = addslashes($_POST['confSenha']);

                                if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
                                    $u->conectar("bdmeuamigolivro", "localhost", "root", "");
                                    if ($u->msgErro == "") {
                                        if ($senha == $confirmarSenha) {

                                            if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                            ?>
                                                <div class="container-fluid text-center mb-3 mt-3 alert alert-success">Cadastrado realizado com sucesso! Acesse para entrar.</div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="container-fluid text-center mb-3 mt-3 alert alert-danger">Email já cadastrado!</div>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="container-fluid text-center mb-3 mt-3 alert alert-danger">Senhas não correspondem!</div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="container-fluid text-center mb-3 mt-3 alert alert-danger">
                                            <?php echo "Erro: " . $u->msgErro; ?>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="container-fluid text-center mb-3 mt-3 alert alert-danger">Preencha todos os campos!</div>
                            <?php
                                }
                            }
                            ?>
                            <div class="btn-group d-flex justify-content-center mt-3">
                                <div class="col-auto px-2 ">
                                    <button onclick="window.history.go(-1); return false" type="submit" value="Cancel" class="btn-cancel btn-default">Cancelar</button>
                                </div>
                                <div class="col-auto px-2">
                                    <button type="submit" value="Cadastrar" class="btn-login btn-default">Cadastrar</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>