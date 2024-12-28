-- MySQL Script generated by MySQL Workbench
-- Wed Jun 26 20:35:18 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema 35936x
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema 35936x
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `35936x` DEFAULT CHARACTER SET utf8 ;
USE `35936x` ;

-- -----------------------------------------------------
-- Table `35936x`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `35936x`.`funcionarios` (
  `Cod_FUN` INT(11) NOT NULL AUTO_INCREMENT,
  `Nome_FUN` VARCHAR(45) NOT NULL,
  `Login_FUN` VARCHAR(45) NOT NULL,
  `Senha_FUN` VARCHAR(45) NOT NULL,
  `Status_FUN` VARCHAR(45) NOT NULL,
  `Funcao_FUN` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Cod_FUN`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `35936x`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `35936x`.`vendas` (
  `Cod_VEND` INT(11) NOT NULL AUTO_INCREMENT,
  `Data_VEND` DATE NOT NULL,
  `Funcionarios_Cod_FUN` INT(11) NOT NULL,
  PRIMARY KEY (`Cod_VEND`),
  INDEX `fk_vendas_funcionarios_idx` (`Funcionarios_Cod_FUN` ASC) ,
  CONSTRAINT `fk_vendas_funcionarios`
    FOREIGN KEY (`Funcionarios_Cod_FUN`)
    REFERENCES `35936x`.`funcionarios` (`Cod_FUN`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `35936x`.`fabricantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `35936x`.`fabricantes` (
  `Cod_FAB` INT(11) NOT NULL AUTO_INCREMENT,
  `Nome_FAB` VARCHAR(45) NOT NULL,
  `Endereco_FAB` VARCHAR(45) NOT NULL,
  `Telefone_FAB` VARCHAR(45) NOT NULL,
  `Encarregado_Vendas_FAB` VARCHAR(45) NOT NULL,
  `Produto_FAB` VARCHAR(45) NOT NULL,
  `Empresa_FAB` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Cod_FAB`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `35936x`.`amplificadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `35936x`.`amplificadores` (
  `Cod_AMP` INT(11) NOT NULL AUTO_INCREMENT,
  `Tipo_AMP` VARCHAR(45) NOT NULL,
  `Marca_AMP` VARCHAR(45) NOT NULL,
  `Modelo_AMP` VARCHAR(45) NOT NULL,
  `Preco_AMP` DECIMAL(10,2) NOT NULL,
  `Foto_AMP` VARCHAR(100) NOT NULL,
  `Fila_Compra_AMP` CHAR(1) NOT NULL DEFAULT 'N',
  `Vendas_Cod_VEND` INT(11) NULL,
  `Fabricantes_Cod_FAB` INT(11) NOT NULL,
  PRIMARY KEY (`Cod_AMP`),
  INDEX `fk_amplificadores_vendas1_idx` (`Vendas_Cod_VEND` ASC) ,
  INDEX `fk_amplificadores_fabricantes1_idx` (`Fabricantes_Cod_FAB` ASC) ,
  CONSTRAINT `fk_amplificadores_vendas1`
    FOREIGN KEY (`Vendas_Cod_VEND`)
    REFERENCES `35936x`.`vendas` (`Cod_VEND`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_amplificadores_fabricantes1`
    FOREIGN KEY (`Fabricantes_Cod_FAB`)
    REFERENCES `35936x`.`fabricantes` (`Cod_FAB`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;