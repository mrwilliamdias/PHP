use empresa;

alter table produto
add constraint pk_produto
primary key (id_produto);

alter table marmita
add constraint pk_marmita
primary key (id_marmita);

alter table cliente
add constraint pk_cliente
primary key (cpf_cliente);

alter table funcionario
add constraint pk_funcionario
primary key (cpf_funcionario);

alter table venda
add constraint pk_venda
primary key (id_venda);

alter table compra
add constraint pk_compra
primary key (id_compra);


