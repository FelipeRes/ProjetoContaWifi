<?php
	include_once("conectar.php");
	$_nome = $_POST["nome"];
	$_categoria = $_POST["categoria"];
	$_campus = $_POST["campus"];
	$_setor = $_POST["setor"];
	$_cpf = $_POST["CPF"];
	$_matricula = $_POST["matricula"];
	$_email = $_POST["email"];
	$_celular = $_POST["celular"];
	$_senha = $_POST["senha"];
	$_senha = md5($_senha);

	$insertQuery = "insert into formulario(nome, categoria, campus, setor, cpf, matricula, email, celular, senha)".
	"values('$_nome', '$_categoria', '$_campus', '$_setor', '$_cpf', '$_matricula', '$_email', '$_celular', '$_senha')";
	$resultado = mysqli_query($con, $insertQuery);
	if($resultado != null){
		echo "Solicitação enviada com sucesso";
		header("Location: index.html");
	}else{
		echo "Erro: ". mysqli_error($con);
	}
?>