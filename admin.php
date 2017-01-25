<?php
	include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head >
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/main.css">
	<title>Admin</title>
</head>
<body>
	<div class="header">
		<h1>Administrador</h1>
	</div>
	<hr>
	<div>
		<?php  
		include_once("buscaFormulario.php");
		?>
	</div>
	<hr>
	<a href="index.html">Retornar a página inical</a>
</body>
</html>