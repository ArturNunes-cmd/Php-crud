CREATE TABLE `cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(100) NOT NULL,
  `cpf_cliente` CHAR(11) NULL,
  `email_cliente` VARCHAR(100) NULL,
  `telefone_cliente` VARCHAR(20) NULL,
  `endereco_cliente` VARCHAR(100) NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pizza` (
  `id_pizza` INT NOT NULL AUTO_INCREMENT,
  `nome_pizza` VARCHAR(100) NOT NULL,
  `borda_pizza` VARCHAR(20) NULL,
  `preco_pizza` VARCHAR(100) NULL,
  PRIMARY KEY (`id_pizza`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `venda` (
  `id_venda` INT NOT NULL AUTO_INCREMENT,
  `data_venda` VARCHAR(45) NULL,
  `valor_venda` DECIMAL(10,2) NULL,
  `cliente_id_cliente` INT NOT NULL,
  `pizza_id_pizza` INT NOT NULL,
  `endereco_cliente` VARCHAR(100) NULL,
  `preco_venda` DECIMAL(10,2) NULL,
  PRIMARY KEY (`id_venda`, `cliente_id_cliente`, `pizza_id_pizza`),
  INDEX `fk_venda_cliente1_idx` (`cliente_id_cliente` ASC),
  INDEX `fk_venda_pizza1_idx` (`pizza_id_pizza` ASC),
  CONSTRAINT `fk_venda_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venda_pizza1`
    FOREIGN KEY (`pizza_id_pizza`)
    REFERENCES `pizza` (`id_pizza`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

