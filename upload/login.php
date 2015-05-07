<?php
if(!isset($_SESSION))
{
  session_start();
}
header("Content-Type: text/html; charset=utf-8", true);
require 'classes/Login.php';

$login = new Login();

// ... verifica se o usuario está logado
if ($login->usuarioLogado() == true) {
    header('Location: index.php');
}
 ?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <h1>Acesso Restrito</h1>
        <p>Você precisa se identificar para prosseguir.</p>
    </div>
    <div class="container">

    <?php include 'mensagens.php'; ?>
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default row">
                        <div class="panel-heading">
                            <h3>
                                Identificação
                                <span class="pull-right glyphicon glyphicon-user"></span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="login">Usuário</label>
                                <input class="form-control" type="text" name="login" id="login" placeholder="Seu usuário de acesso">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha" placeholder="Sua senha de acesso">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Entrar</button>
                    </div>                   
                </div>
            </div>
        </form>
    </div>

</body>
</html>
