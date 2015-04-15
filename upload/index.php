<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Upload de Arquivo</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

</head>
<body>
	<form method="post" action="inserir.php" enctype="multipart/form-data" class="ui form segment">

		<div class="two fields">

		    <div class="field">
		      <label>Tipo *</label>
		      <input name="tipo" type="text" required>
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
</body>
</html>