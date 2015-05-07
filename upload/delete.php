<?php 
require 'functions.php';

if($_POST){
	if(isset($_POST['cod_img'])){
		excluirImg($_POST['cod_img']);
		$_SESSION['msg_sucesso'] = 'Imagem Excluida com Sucesso!';
		header('Location: listar.php');
	}
}
?>