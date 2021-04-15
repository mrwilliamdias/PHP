use empresa;


/*Pelo id_venda da Venda, é possivél descorbri qual funcionario realizou a venda, e também descobrir qual foi o tipo de compra realizada pelo funcionario anteriormente*/
select nome,valor_unitario,nome_completo
	from produto 
		inner join compra 
			on produto.id_produto = compra.id_produto 
        inner join funcionario
			on compra.cpf_funcionario = funcionario.cpf_funcionario
		inner join venda
			on funcionario.cpf_funcionario = venda.cpf_funcionario
		where id_venda=3;
        
/*Sabendo o Nome do Cliente, é possivel saber qual produto ele comprou e qual foi Valor Unitario do Produto*/        
select descrição,nome_refeicao,valor_unitario
	from marmita
		inner join venda
			on marmita.id_marmita = venda.id_marmita
		inner join cliente
			on venda.cpf_cliente = cliente.cpf_cliente
		where nome_completo ='Tatuano Ano';