-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para pesqueiro
DROP DATABASE IF EXISTS `pesqueiro`;
CREATE DATABASE IF NOT EXISTS `pesqueiro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pesqueiro`;

-- Copiando estrutura para tabela pesqueiro.administrador
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pesqueiro.administrador: ~0 rows (aproximadamente)
DELETE FROM `administrador`;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`id`, `email`, `login`, `senha`) VALUES
	(1, 'teste@teste.com', 'testevaoldo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Copiando estrutura para tabela pesqueiro.comandasabertas
DROP TABLE IF EXISTS `comandasabertas`;
CREATE TABLE IF NOT EXISTS `comandasabertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `administradorID` int(11) NOT NULL,
  `horaabertura` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `administradorID` (`administradorID`),
  CONSTRAINT `comandasabertas_ibfk_1` FOREIGN KEY (`administradorID`) REFERENCES `administrador` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pesqueiro.comandasabertas: ~2 rows (aproximadamente)
DELETE FROM `comandasabertas`;
/*!40000 ALTER TABLE `comandasabertas` DISABLE KEYS */;
INSERT INTO `comandasabertas` (`id`, `nome`, `administradorID`, `horaabertura`, `estado`) VALUES
	(2, 'teste', 1, '2019-05-03 20:24:07', 1),
	(3, 'teste 2', 1, '2019-05-03 20:24:45', 1),
	(4, 'teste 3', 1, '2019-05-03 20:24:49', 1);
/*!40000 ALTER TABLE `comandasabertas` ENABLE KEYS */;

-- Copiando estrutura para tabela pesqueiro.comprasabertas
DROP TABLE IF EXISTS `comprasabertas`;
CREATE TABLE IF NOT EXISTS `comprasabertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produtoID` int(11) NOT NULL,
  `comandaID` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produtoID` (`produtoID`),
  KEY `comandaID` (`comandaID`),
  CONSTRAINT `comprasabertas_ibfk_1` FOREIGN KEY (`produtoID`) REFERENCES `produtos` (`id`),
  CONSTRAINT `comprasabertas_ibfk_2` FOREIGN KEY (`comandaID`) REFERENCES `comandasabertas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pesqueiro.comprasabertas: ~0 rows (aproximadamente)
DELETE FROM `comprasabertas`;
/*!40000 ALTER TABLE `comprasabertas` DISABLE KEYS */;
/*!40000 ALTER TABLE `comprasabertas` ENABLE KEYS */;

-- Copiando estrutura para tabela pesqueiro.estoque
DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produtoID` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `dataUltimaAlteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `estoque_ibfk_1` (`produtoID`),
  CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`produtoID`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pesqueiro.estoque: ~0 rows (aproximadamente)
DELETE FROM `estoque`;
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;

-- Copiando estrutura para tabela pesqueiro.produtos
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela pesqueiro.produtos: ~0 rows (aproximadamente)
DELETE FROM `produtos`;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `nome`, `valor`) VALUES
	(1, 'coca', 12.1),
	(2, 'jaca', 1231);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

INSERT INTO administrador(email, login, senha) VALUES('admin@admin.com', 'admin@admin.com', SHA1('123456'));
INSERT INTO administrador(email, login, senha) VALUES('caio@caio.com', 'logincaio', SHA1('senhacaio'));