<?php
	include_once("conectar.php");
	$query = "select * from formulario";
	$resultado = mysqli_query($con, $query);
	if($resultado != null){
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td>Nome</td>";
		echo "<td>Categoria</td>";
		echo "<td>Campus</td>";
		echo "<td>Setor</td>";
		echo "<td>Email</td>";
		echo "<td>Celular</td>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC)) {
			echo "<tr>";
			echo "<td>".$row["nome"]."</td>";
			echo "<td>".$row["categoria"]."</td>";
			echo "<td>".$row["campus"]."</td>";
			echo "<td>".$row["setor"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["celular"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		echo "Erro: ". mysqli_error($con);
	}
?>