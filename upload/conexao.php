<?php
try {
	$conexao = new PDO ("mysql:host=localhost;dbname=inove", "root", "",
	array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	if (!$conexao) {
		echo "erro ao conectar no banco de dados";
	}

} catch (PDOException $e) {
	echo "Erro: " . $e->getMessage();
	}
?>
