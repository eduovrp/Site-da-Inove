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
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Cases</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
<style type="text/css">
	.container{
		width: 960px;
		margin: 0 auto;
		padding-top: 100px; 
	}
</style>
</head>
<body>
<div class="bs-example bs-navbar-top-example" data-example-id="navbar-fixed-to-top">
    <nav class="navbar navbar-default navbar-fixed-top">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Inove</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Upload</a></li>
            <li><a href="listar.php">Gerenciar Imagens</a></li>
            <li class="active"><a href="cases.php">Cases</a></li>
            <li><a href="index.php?logout">Sair</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->

<?php 
require 'functions.php';
$imagens = selectCases();
 ?>

	<div class="container">

	<?php include 'mensagens.php'; ?>
	<div class="row">
		<div class="col-md-8">
		<table class="ui striped table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Imagem</th>
					<th>#</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($imagens as $imagem) : ?>
					<tr>
						<td><?= $imagem['tipo']." - Imagem ".$imagem['cod_img']; ?></td>
						<td><img src="<?= $imagem['url'] ?>" width="250" height="140"></td>
						<td><a href="javascript:alterarImg(<?= $imagem['cod_img']; ?>)"><i class="fa fa-edit fa-2x"></i> Alterar Imagem</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>

		</table>
		</div>
		</div>
	</div>
	<form action="alterar.php" method="POST" id="alterarImg">
		<input type="hidden" name="cod_img">
	</form>
	<script>
	function alterarImg(cod_img){
		f = document.getElementById('alterarImg');
		f.cod_img.value = cod_img;
		f.submit();
	}
</script>
</body>
</html>
<?php
} else {
    header('Location: login.php');
}
 ?>