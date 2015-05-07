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
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin - Upload</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <li class="active"><a href="index.php">Upload</a></li>
            <li><a href="listar.php">Gerenciar Imagens</a></li>
            <li><a href="cases.php">Cases</a></li>
            <li><a href="index.php?logout">Sair</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div><!-- /example -->
  <div class="container">
	<form method="post" action="inserir.php" enctype="multipart/form-data" class="ui form segment">

		<div class="two fields">
<?php include 'mensagens.php'; ?>
		    <div class="field">
		      <label>Tipo *</label>
		      <select name="tipo">
		      	<option value="Banner">Banner</option>
		      	<option value="Logo">Logo</option>
		      </select>
		    </div>
		</div>

		<div class="one fields">
			<div class="field">
		
			<label>Arquivo *</label>
		      <input name="arquivo" type="file" required>
		    </div>

		</div>
		<br>
		<div class="one filds">
			<p>
				<input type="submit" value="Fazer Upload" class="ui green button">
			</p>
		</div>

	</form>
		<div class="two fields">
		<p><strong>Dimensões das imagens</strong></p>
			<ul>
				<li>Banner - 1300x450px</li>
				<li>Logo - 200x50px</li>
			</ul>
		</div>
	</div>
</body>
</html>
<?php
} else {
    header('Location: login.php');
}
 ?>