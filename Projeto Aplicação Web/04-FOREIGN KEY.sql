use empresa;

alter table compra
add constraint fk_id_produto
foreign key (id_produto)
references produto(id_produto);

alter table  compra
add constraint fk_CPF_funcionario
foreign key (cpf_funcionario)
references funcionario(cpf_funcionario);

alter table  venda
add constraint fk_id_marmita
foreign key (id_marmita)
references marmita(id_marmita);

alter table  venda
add constraint fk_cpf_cliente
foreign key (cpf_cliente)
references cliente(cpf_cliente);

alter table  venda
add constraint fk_venda_cpf_funcionario
foreign key (cpf_funcionario)
references funcionario(cpf_funcionario);
