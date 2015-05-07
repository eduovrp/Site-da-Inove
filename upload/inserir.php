<?php 
	require 'conexao.php';

	

	
	date_default_timezone_set("America/Sao_Paulo"); //Definindo timezone padrão
	 
	$dir = 'imagens/'; //Diretório para uploads
	 
		move_uploaded_file($_FILES['arquivo']['tmp_name'], "../img/imagens/".$_FILES['arquivo']['name']); //Fazer upload do arquivo


	$url = "http://localhost/Site-da-Inove/img/" . $dir . $_FILES['arquivo']['name'];

try {
	$dados = array(
		'url' => $url,
		'tipo' => $_POST['tipo']
		);

	$sql = "INSERT INTO imagens (url, tipo)
			values (:url, :tipo)";

	$inserir = $conexao->prepare($sql);
	$inserir->execute($dados);
	$_SESSION['msg_sucesso'] = "Upload concluido";
	header("Location: index.php");
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage();
	}
?>