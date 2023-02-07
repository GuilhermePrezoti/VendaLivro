create database Livraria;

use Livraria;

create table pessoa(
	cod int not null auto_increment primary key,
    nome varchar(50) not null,
    endereco int, 
    telefone varchar(8) not null,
    dataDeNascimento varchar(10) not null,
    login varchar(100) not null,
    senha varchar(100) not null
)Engine = InnoDB;

drop table endereco;
create table endereco(
	codigo int not null primary key,
    rua varchar(100) not null,
    cidade varchar(50) not null,
    estado varchar(50) not null,
    cep int(9) not null
)Engine = InnoDB;

select * from pessoa, endereco;




        