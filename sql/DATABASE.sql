

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `CCEE`;
CREATE DATABASE `CCEE` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `CCEE`;

GRANT USAGE ON * . * TO `ccee`@`localhost`;
  DROP USER `ccee`@`localhost`;

CREATE USER IF NOT EXISTS `ccee`@`localhost` IDENTIFIED BY 'ccee';
GRANT USAGE ON *.* TO `ccee`@`localhost` REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `ccee`.* TO `ccee`@`localhost` WITH GRANT OPTION;




CREATE TABLE `TRABAJO_SOCIAL` ( 
	`titulacion` VARCHAR(30) NOT NULL , 
	`cursoAcademico` VARCHAR(9) NOT NULL , 
	`nombre` VARCHAR(30) COLLATE utf8_spanish_ci  NOT NULL , 
	`apellidos` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`dni` VARCHAR(9) NOT NULL , 
	`provincia` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`localidad` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`direccion` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`cp` INT(5) NOT NULL , 
	`telefono` INT(9) NULL , 
	`email` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`tutorA` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`horasT` VARCHAR(60) COLLATE utf8_spanish_ci NULL , 
	`nombreIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`cif` VARCHAR(9) NULL , 
	`provinciaIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`localidadIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`direccionIns` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`cpIns` INT(5) NOT NULL ,
	`telefonoIns` INT(9) NULL , 
	`emailIns` VARCHAR(50) COLLATE utf8_spanish_ci NULL , 
	`fechaIni` DATE NOT NULL , 
	`fechaFin` DATE NOT NULL , 
	`horasPrac` FLOAT(4,2) NOT NULL,
	PRIMARY KEY (dni)) 	ENGINE = InnoDB DEFAULT  COLLATE=utf8_spanish_ci;

CREATE TABLE `EDUCACION_SOCIAL` ( 
	`titulacion` VARCHAR(30) NOT NULL , 
	`cursoAcademico` VARCHAR(9) NOT NULL , 
	`nombre` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`apellidos` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`dni` VARCHAR(9) NOT NULL , 
	`practicum` INT(1) NOT NULL , 
	`tutorA` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL ,
	`tutorE` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL ,
	`nombreIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL ,  
	`fechaIni` DATE NOT NULL , 
	`fechaFin` DATE NOT NULL , 
	`horasPrac` FLOAT(4,2) NOT NULL,
	PRIMARY KEY (dni)) ENGINE = InnoDB DEFAULT  COLLATE=utf8_spanish_ci;

CREATE TABLE `EDUCACION_INFANTIL` ( 
	`titulacion` VARCHAR(30) NOT NULL , 
	`cursoAcademico` VARCHAR(9) NOT NULL , 
	`nombre` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`apellidos` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`dni` VARCHAR(9) NOT NULL ,
	`mencion` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL ,  
	`tutorA` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`tutorE` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`nombreIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`cif` VARCHAR(9) NULL , 
	`provinciaIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`localidadIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`direccionIns` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`cpIns` INT(5) NOT NULL ,
	`fechaIni` DATE NOT NULL , 
	`fechaFin` DATE NOT NULL,
	PRIMARY KEY (dni)) ENGINE = InnoDB DEFAULT  COLLATE=utf8_spanish_ci;
	

CREATE TABLE `EDUCACION_PRIMARIA` ( 
	`titulacion` VARCHAR(30) NOT NULL , 
	`cursoAcademico` VARCHAR(9) NOT NULL , 
	`nombre` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`apellidos` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`dni` VARCHAR(9) NOT NULL ,
	`mencion` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL ,  
	`tutorA` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`tutorE` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`nombreIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`cif` VARCHAR(9) NULL , 
	`provinciaIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`localidadIns` VARCHAR(30) COLLATE utf8_spanish_ci NOT NULL , 
	`direccionIns` VARCHAR(50) COLLATE utf8_spanish_ci NOT NULL , 
	`cpIns` INT(5) NOT NULL ,
	`fechaIni` DATE NOT NULL , 
	`fechaFin` DATE NOT NULL,
	PRIMARY KEY (dni)) ENGINE = InnoDB DEFAULT  COLLATE=utf8_spanish_ci;