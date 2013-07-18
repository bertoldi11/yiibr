SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `yiibr` ;
CREATE SCHEMA IF NOT EXISTS `yiibr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `yiibr` ;

-- -----------------------------------------------------
-- Table `yiibr`.`perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiibr`.`perfil` ;

CREATE  TABLE IF NOT EXISTS `yiibr`.`perfil` (
  `idPerfil` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(30) NOT NULL ,
  PRIMARY KEY (`idPerfil`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiibr`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiibr`.`usuario` ;

CREATE  TABLE IF NOT EXISTS `yiibr`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `idPerfil` INT NOT NULL ,
  `nome` VARCHAR(150) NOT NULL ,
  `email` VARCHAR(150) NOT NULL ,
  `senha` VARCHAR(35) NOT NULL ,
  `dataCadastro` DATETIME NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  INDEX `fk_usuario_perfil_idx` (`idPerfil` ASC) ,
  CONSTRAINT `fk_usuario_perfil`
    FOREIGN KEY (`idPerfil` )
    REFERENCES `yiibr`.`perfil` (`idPerfil` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiibr`.`hangouts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiibr`.`hangouts` ;

CREATE  TABLE IF NOT EXISTS `yiibr`.`hangouts` (
  `idHangouts` INT NOT NULL AUTO_INCREMENT ,
  `idUsuario` INT NOT NULL COMMENT ' /* comment truncated */ /*Usuario que cadastrou o hangout*/' ,
  `url` VARCHAR(150) NOT NULL ,
  `acontecendo` CHAR(1) NOT NULL COMMENT ' /* comment truncated */ /*S = Sim | N = Nao*/' ,
  PRIMARY KEY (`idHangouts`) ,
  INDEX `fk_hangouts_usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_hangouts_usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `yiibr`.`usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `yiibr` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `yiibr`.`perfil`
-- -----------------------------------------------------
START TRANSACTION;
USE `yiibr`;
INSERT INTO `yiibr`.`perfil` (`idPerfil`, `nome`) VALUES (1, 'Administrador');
INSERT INTO `yiibr`.`perfil` (`idPerfil`, `nome`) VALUES (2, 'Usuario');

COMMIT;
