create database projeto5;

use projeto5;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar (40) not null,
     email varchar (40) not null,
     telefone varchar (14) not null,
    dtcadastro date,
    nomefoto varchar (50)
);
insert into cliente values(null, 'ana','ana@gmail.com', '4444-5555', '2022-11-09');

select * from cliente;