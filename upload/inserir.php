<?php 
	require 'conexao.php';

	$sql = "INSERT INTO imagens (url, tipo)
			values (:url, :tipo)";

	
	date_default_timezone_set("America/Sao_Paulo"); //Definindo timezone padrão
	 
	$dir = 'banner/'; //Diretório para uploads
	 
		move_uploaded_file($_FILES['arquivo']['tmp_name'], "../img/banner/".$_FILES['arquivo']['name']); //Fazer upload do arquivo


	$url = "http://localhost/Site-da-Inove/img/" . $dir . $_FILES['arquivo']['name'];

try {
	$dados = array(
		'url' => $url,
		'tipo' => $_POST['tipo']
		);

	$inserir = $conexao->prepare($sql);
	$inserir->execute($dados);
	header("Location: listar.php");
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage();
	}
?>