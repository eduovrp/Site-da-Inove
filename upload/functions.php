<?php
if(!isset($_SESSION))
{
  session_start();
}

$dsn = 'mysql:host=localhost;dbname=inove;charset=utf8';
$usuario = 'root';
$pass = '';

$pdo = new PDO($dsn, $usuario, $pass);

function mostraImagens()
{
	global $pdo;
try{
 	$sql = "SELECT * from imagens where tipo != 'Case' ORDER BY tipo";

 	$cmd = $pdo->prepare($sql);
 	$cmd->execute();

 	return $cmd->fetchAll();

}catch(PDOException $e){
    echo $e->getMessage();
	}
}

function excluirImg($cod_img)
{
	global $pdo;
try{
	$sql = "DELETE FROM imagens where cod_img = :cod_img";

	$cmd = $pdo->prepare($sql);
	$cmd->bindParam('cod_img',$cod_img);
	$cmd->execute();

}catch(PDOException $e){
    echo $e->getMessage();
	}
}

function selectCases()
{
	global $pdo;
try{
	$sql = "SELECT * FROM imagens where tipo = 'Case'";

	$cmd = $pdo->prepare($sql);
	$cmd->execute();

	return $cmd->fetchAll();

}catch(PDOException $e){
    echo $e->getMessage();
	}
}