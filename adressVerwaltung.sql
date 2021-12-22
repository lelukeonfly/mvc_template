-- MySQL Script generated by MySQL Workbench
-- Wed Dec 22 09:56:32 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema adressVerwaltung
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adressVerwaltung
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adressVerwaltung` DEFAULT CHARACTER SET utf8 ;
USE `adressVerwaltung` ;

-- -----------------------------------------------------
-- Table `adressVerwaltung`.`adressen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adressVerwaltung`.`adressen` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vorname` VARCHAR(45) NULL,
  `nachname` VARCHAR(45) NULL,
  `email` VARCHAR(128) NULL,
  `tel` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;