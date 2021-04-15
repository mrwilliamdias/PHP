CREATE DATABASE jmmarmitex;

USE jmmarmitex;

create table produto(
	id_produto int not null ,
	nome varchar(20) not null,
	valor_unitario decimal(10,2)not null
);


create table marmita(
	id_marmita int not null,
	valor_unitario decimal(10,2) not null,
	descrição varchar(50) not null,
	nome_refeicao varchar(30) not null
);


create table funcionario(
	cpf_funcionario varchar(11) not null,
	nome_completo varchar(30) not null,
	endereço varchar(30) not null,
	email varchar(40) not null,
	telefone char(16) not null
);

create table cliente(
	cpf_cliente varchar(11) not null,
	nome_completo varchar(30) not null,
	email varchar(40) not null,
	endereço varchar(30) not null,
	telefone char(16) not null
);

create table venda(
	id_venda int not null,
	hora_e_data timestamp not null,
	Qtd_de_produto int not null,
	sub_total decimal(10,2) not null,
	cpf_funcionario varchar(11) not null,
	cpf_cliente varchar(11) not null,
	id_marmita int not null
);

create table compra(
	id_compra int not null,
	hora_e_data timestamp not null,
	Qtd_de_produto int not null,
	sub_total int not null,
	valor_final decimal(10,2) not null,
	id_produto int not null,
	cpf_funcionario varchar(11) not null
);
