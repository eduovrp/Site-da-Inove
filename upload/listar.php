<?php 
	require 'conexao.php';
 	
 	$sql = "SELECT * from imagens";
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listar</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<style type="text/css">
		.container{
			width: 960px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<table class="ui striped table">
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Arquivo</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($conexao->query($sql) as $listar) : ?>
					<tr>
						<td><?= $listar['tipo'] ?></td>
						<td><img src="<?= $listar['url'] ?>" width="250" height="140"></td>
					</tr>
				<?php endforeach ?>
			</tbody>

		</table>
	</div>
</body>
</html>