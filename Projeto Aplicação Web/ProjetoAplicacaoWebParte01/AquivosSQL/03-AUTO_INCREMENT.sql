use jmmarmitex;

    ALTER TABLE marmita  
	MODIFY id_marmita int  NOT NULL AUTO_INCREMENT;
    
    ALTER TABLE produto
	MODIFY id_produto INT NOT NULL AUTO_INCREMENT;
    
	ALTER TABLE compra
	MODIFY id_compra INT NOT NULL AUTO_INCREMENT;
    
	ALTER TABLE venda
	MODIFY id_venda INT NOT NULL AUTO_INCREMENT;