create database empresa;

use empresa;

create table funcionario(
Cod int not null primary key,
Nome varchar(30) not null,
Salario Double(5,2)
);

Insert into funcionario(cod,nome,salario)
value(1,'João Nelson',990.99);
