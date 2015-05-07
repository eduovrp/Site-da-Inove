<?php

class Login
{

    private $conexao = null;

    public function __construct()
    {
         if(!isset($_SESSION))
         {
             session_start();
         }

        if (isset($_GET["logout"])) {
            $this->logout();
        }

        elseif (isset($_POST["login"]) && isset($_POST['senha'])) {
            $this->login($_POST['login'],$_POST['senha']);
        }
    }

private function conexao()
{
        if ($this->conexao != null) {
            return true;
        } else {
            try {
                $dsn = 'mysql:host=localhost;dbname=inove;charset=utf8';
                $usuario = 'root';
                $pass = '';
                $this->conexao = new PDO($dsn, $usuario, $pass);
                return true;
            } catch (PDOException $e) {
                $_SESSION['erros'] = 'Erro ao Conectar-se ao Banco de Dados' . $e->getMessage();
            }
    }
    return false;
}


private function login($login,$senha)
{
        $login = $_POST['login'];
        $senha = sha1($_POST['senha']);
        $senha_hash = hash('sha512',$senha);

        if($this->conexao()){

        $sql = "SELECT id_usuario, usuario, senha FROM usuarios WHERE usuario = :login AND senha = :senha";

        $cmd = $this->conexao->prepare($sql);
        $cmd->bindParam('login',$login);
        $cmd->bindParam('senha',$senha_hash);
        $cmd->execute();

        $result = $cmd->fetch();
    }

        if($cmd->rowCount() == 1){
                $_SESSION['login_status'] = 1;
        } else {
        	$_SESSION['erros'] = " Login e/ou senha invalidos";
            unset($_SESSION['login_status']);
        }
}

public function logout()
{
        unset($_SESSION['login_status']);

        $_SESSION['msg_sucesso'] = " Sessão Encerrada com Sucesso.";
}

public function usuarioLogado()
{
        if (isset($_SESSION['login_status'])) {
            return true;
        } else {
            return false;
        }
    }
}
