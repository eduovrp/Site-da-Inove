<?php 
	require 'conexao.php';

	date_default_timezone_set("America/Sao_Paulo"); //Definindo timezone padrão
	 
	$dir = 'imagens/'; //Diretório para uploads
	 
		move_uploaded_file($_FILES['arquivo']['tmp_name'], "../img/imagens/".$_FILES['arquivo']['name']); //Fazer upload do arquivo


	$url = "http://localhost/Site-da-Inove/img/" . $dir . $_FILES['arquivo']['name'];

try {
		$cod_img = $_POST['cod_img'];
		

	$sql = "UPDATE imagens SET url = :url WHERE cod_img = :cod_img";

	$inserir = $conexao->prepare($sql);
	$inserir->bindParam('url',$url);
	$inserir->bindParam('cod_img',$cod_img);
	$inserir->execute();
	
	$_SESSION['msg_sucesso'] = "Imagem alterada com Sucesso!";
	header("Location: cases.php");
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage();
	}
?>