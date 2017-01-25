<?php
$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
	die('Could not connect: ' . mysqli_error());
}
$sql = 'CREATE DATABASE FormularioWifi';
if (mysqli_query($link,$sql)) {
	echo "Database my_db created successfully\n";
	$sql = 'create table formulario(id int primary key not null auto_increment, 
	nome varchar(255) not null,
	categoria varchar(255) not null,
	campus varchar(255) not null,
	setor varchar(255),
	cpf varchar(255) not null,
	matricula varchar(255) not null,
	email varchar(255) not null,
	celular varchar(255),
	senha varchar(255) not null
	);';
	$link = mysqli_connect('localhost', 'root', '', 'FormularioWifi');
	mysqli_query($link,$sql);
	if(!$link){
        die("Falha na criacao da tabela: " . mysqli_connect_error());
    }else{
        echo "Criacao de baco com sucesso";
    }  
} else {
	echo 'Error creating database: ' . mysqli_error($link) . "\n";
}
?>