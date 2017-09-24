CREATE SCHEMA `etec` ;

-- noticia/evento --
CREATE TABLE `tipo_noticia` (
  `idtipo_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `etec`.`tipo_noticia` (`descricao`) VALUES ('Noticia');
INSERT INTO `etec`.`tipo_noticia` (`descricao`) VALUES ('Evento');


CREATE TABLE `etec`.`noticia_evento` (
  `idnoticia_evento` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `texto` LONGTEXT NOT NULL,
  `resumo` LONGTEXT NULL,
  `pasta` VARCHAR(100) NULL,
  `dia` DATE NULL,
  `autor` VARCHAR(100) NULL,
  `palavra_chave` VARCHAR(100) NULL,
  `idtipo_noticia` INT NULL,
  PRIMARY KEY (`idnoticia_evento`),
  INDEX `idtipo_noticia_idx` (`idtipo_noticia` ASC),
  CONSTRAINT `idtipo_noticia`
    FOREIGN KEY (`idtipo_noticia`)
    REFERENCES `etec`.`tipo_noticia` (`idtipo_noticia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	

CREATE TABLE `etec`.`galeria` (
  `idgaleria` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `idnoticia_evento` INT NOT NULL,
  PRIMARY KEY (`idgaleria`),
  UNIQUE INDEX `titulo_UNIQUE` (`titulo` ASC),
  INDEX `idnoticia_evento_idx` (`idnoticia_evento` ASC),
  CONSTRAINT `idnoticia_evento`
    FOREIGN KEY (`idnoticia_evento`)
    REFERENCES `etec`.`noticia_evento` (`idnoticia_evento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	

CREATE TABLE `etec`.`galeria_imagens` (
  `idgaleria_imagens` INT NOT NULL AUTO_INCREMENT,
  `pasta` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `idgaleria` INT NOT NULL,
  PRIMARY KEY (`idgaleria_imagens`),
  INDEX `idgaleria_idx` (`idgaleria` ASC),
  CONSTRAINT `idgaleria`
    FOREIGN KEY (`idgaleria`)
    REFERENCES `etec`.`galeria` (`idgaleria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- Inicio Curso/Disciplina/Modulo --
CREATE TABLE `etec`.`curso` (
  `idcurso` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` LONGTEXT NULL,
  `duracao_mes` VARCHAR(50) NOT NULL,
  `coordenador` VARCHAR(100) NULL,
  `atuacao` LONGTEXT NULL,
  PRIMARY KEY (`idcurso`));
  

CREATE TABLE `etec`.`modulo` (
  `idmodulo` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idmodulo`));
  

CREATE TABLE `etec`.`disciplina` (
  `iddisciplina` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `carga_horaria` VARCHAR(45) NOT NULL,
  `descricao` LONGTEXT NULL,
  `idcurso` INT NOT NULL,
  `idmodulo` INT NOT NULL,
  PRIMARY KEY (`iddisciplina`),
  INDEX `idcurso_idx` (`idcurso` ASC),
  INDEX `idmodulo_idx` (`idmodulo` ASC),
  CONSTRAINT `idcurso`
    FOREIGN KEY (`idcurso`)
    REFERENCES `etec`.`curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idmodulo`
    FOREIGN KEY (`idmodulo`)
    REFERENCES `etec`.`modulo` (`idmodulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- CADASTRO DE PROFESSOR --
CREATE TABLE `etec`.`professor` (
  `idprofessor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `formacao` LONGTEXT NULL,
  `etec_desde` VARCHAR(100) NULL,
  `habilitacao` LONGTEXT NULL,    
  `disciplina` LONGTEXT NULL,
  `pasta` VARCHAR(100) NULL,
  `curriculo_online` VARCHAR(100) NULL,
  PRIMARY KEY (`idprofessor`));


-- LOGIN DO ADMINISTRADOR --
CREATE TABLE `etec`.`adm` (
  `idadm` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idadm`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC));
INSERT INTO `etec`.`adm` (`login`, `senha`) VALUES ('adm', '123');