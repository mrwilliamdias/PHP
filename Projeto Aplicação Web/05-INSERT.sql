use empresa;

insert into cliente
	(cpf_cliente,nome_completo,email,endereço,telefone)
values
	('21038108472','Geraldo Aldo','geraldin66@yopmail.com','Rio de Janeiro - RJ','61981818271');

insert into cliente
	(cpf_cliente,nome_completo,email,endereço,telefone)
values
	('23894739476','Vanessa Essa','Venessa55@ual.com','Brasília - DF','61981789342');
    
insert into cliente
	(cpf_cliente,nome_completo,email,endereço,telefone)
values
	('43784632729','Tatuano Ano','Tatuanotatto@yahoo.com','São Paulo - SP','62991283741');
    
    
insert into funcionario
	(cpf_funcionario,nome_completo,endereço,email,telefone)
values
	('38913493269','Adaildo Ildo','empresaadaildo@hotmail.com','Brasilia - DF','61982837198');

insert into funcionario
	(cpf_funcionario,nome_completo,endereço,email,telefone)
values
	('39842374621','Maria Maria','mariamaria@hotmail.com','Brasilia - DF','61999387492');

insert into funcionario
	(cpf_funcionario,nome_completo,endereço,email,telefone)
values
	('41384762816','Cassio Inacio','cassioinacio@hotmail.com','Brasilia - DF','61997235462');


insert into produto
	(id_produto,nome,valor_unitario)
values
	(1,'Arroz',9.90);

insert into produto
	(nome,valor_unitario)
values
	('Feijão',8.90);

insert into produto
	(nome,valor_unitario)
values
	('Milho',5.50);


insert into marmita
	(id_marmita,valor_unitario,descrição,nome_refeicao)
values
	(1,12.90,'Arroz com Feijão e Milho','Marmita Sem Carne');

insert into marmita
	(valor_unitario,descrição,nome_refeicao)
values
	(15.90,'Arroz com Feijão e Milho e Carne de Porco','Marmita Com Carne de Porco');
    
insert into marmita
	(valor_unitario,descrição,nome_refeicao)
values
	(13.90,'Arroz com Feijão e Milho e Frango','Marmita Com Frango');


insert into compra
	(id_compra,qtd_de_produto,id_produto,cpf_funcionario)
values
	(1,8,1,'39842374621');

insert into compra
	(qtd_de_produto,id_produto,cpf_funcionario)
values
	(2,2,'41384762816');

insert into compra
	(qtd_de_produto,id_produto,cpf_funcionario)
values
	(4,3,'38913493269');
    
    
insert into venda
	(id_venda,qtd_de_produto,cpf_funcionario,cpf_cliente,id_marmita)
values
	(1,2,'38913493269','21038108472',1);
    
insert into venda
	(qtd_de_produto,cpf_funcionario,cpf_cliente,id_marmita)
values
	(4,'41384762816','23894739476',3);    

insert into venda
	(qtd_de_produto,cpf_funcionario,cpf_cliente,id_marmita)
values
	(3,'39842374621','43784632729',2); 
