Create database FormularioWifi;
use FormularioWifi;
create table formulario(id int primary key not null auto_increment, 
nome varchar(255) not null,
categoria varchar(255) not null,
campus varchar(255) not null,
setor varchar(255),
cpf varchar(255) not null,
matricula varchar(255) not null,
email varchar(255) not null,
celular varchar(255),
senha varchar(255) not null
);