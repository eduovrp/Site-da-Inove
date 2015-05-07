<?php
try {
	$conexao = new PDO ("mysql:host=localhost;dbname=inove;charset=utf8", "root", "");

	if (!$conexao) {
		echo "erro ao conectar no banco de dados";
	}

} catch (PDOException $e) {
	echo "Erro: " . $e->getMessage();
	}
?>
