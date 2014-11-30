-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE `Admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Boleto`;
CREATE TABLE `Boleto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Compra_id` int(10) unsigned NOT NULL,
  `Cliente_id` int(10) unsigned NOT NULL,
  `flag_pagamento` tinyint(1) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `data_gerado` date DEFAULT NULL,
  `data_vencimento` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Cliente_id` (`Cliente_id`),
  KEY `Compra_id` (`Compra_id`),
  CONSTRAINT `Boleto_ibfk_1` FOREIGN KEY (`Cliente_id`) REFERENCES `Cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Boleto_ibfk_2` FOREIGN KEY (`Compra_id`) REFERENCES `Compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Categoria`;
CREATE TABLE `Categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Cliente`;
CREATE TABLE `Cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` int(10) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` int(10) unsigned NOT NULL,
  `telefone` int(10) unsigned NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `pergunta_secreta` varchar(50) NOT NULL,
  `resposta_secreta` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Cliente_Compra`;
CREATE TABLE `Cliente_Compra` (
  `Cliente_id` int(10) unsigned NOT NULL,
  `Compra_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Cliente_id`,`Compra_id`),
  KEY `Compra_id` (`Compra_id`),
  CONSTRAINT `Cliente_Compra_ibfk_1` FOREIGN KEY (`Cliente_id`) REFERENCES `Cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Cliente_Compra_ibfk_2` FOREIGN KEY (`Compra_id`) REFERENCES `Compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Compra`;
CREATE TABLE `Compra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_compra` date DEFAULT NULL,
  `total_compra` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Produto`;
CREATE TABLE `Produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Categoria_id` int(10) unsigned NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` text,
  `valor` float DEFAULT NULL,
  `flag_destaque_promocao` tinyint(1) DEFAULT NULL,
  `url_miniatura` text,
  `url_foto` text,
  `fabricante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Categoria_id` (`Categoria_id`),
  CONSTRAINT `Produto_ibfk_1` FOREIGN KEY (`Categoria_id`) REFERENCES `Categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Produto_Compra`;
CREATE TABLE `Produto_Compra` (
  `Produto_id` int(10) unsigned NOT NULL,
  `Compra_id` int(10) unsigned NOT NULL,
  `quantidade` int(10) unsigned DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  PRIMARY KEY (`Produto_id`,`Compra_id`),
  KEY `Compra_id` (`Compra_id`),
  CONSTRAINT `Produto_Compra_ibfk_1` FOREIGN KEY (`Produto_id`) REFERENCES `Produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Produto_Compra_ibfk_2` FOREIGN KEY (`Compra_id`) REFERENCES `Compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2014-11-30 18:38:07