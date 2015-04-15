<?php

$dsn = 'mysql:host=localhost;dbname=inove;charset=utf8';
$usuario = 'root';
$pass = '';

$pdo = new PDO($dsn, $usuario, $pass);

function select_banner()
{
	global $pdo;
try{
	$sql = "SELECT * FROM imagens WHERE tipo = 'banner'";

	$cmd = $pdo->prepare($sql);
	$cmd->execute();

	return $cmd->fetchAll();

}catch(PDOException $e){
    echo $e->getMessage();
	}
}

function select_logos()
{
	global $pdo;
try{
	$sql = "SELECT * FROM imagens WHERE tipo = 'logo'";

	$cmd = $pdo->prepare($sql);
	$cmd->execute();

	return $cmd->fetchAll();

}catch(PDOException $e){
    echo $e->getMessage();
	}
}
