

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dfachei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `idAnuncio` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `empresa` varchar(100) NOT NULL,
  `cidade` char(8) NOT NULL,
  `uf` char(2) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `bairro1` varchar(80) DEFAULT NULL,
  `bairro2` varchar(80) DEFAULT NULL,
  `bairro3` varchar(80) DEFAULT NULL,
  `endereco` text NOT NULL,
  `horarioDeFuncionamento` text NOT NULL,
  `quemSomos` text NOT NULL,
  `informacoesAdicionais` text,
  `telefone` text NOT NULL,
  `email` text,
  `site` text,
  `categoria` varchar(80) NOT NULL,
  `categoria1` varchar(80) DEFAULT NULL,
  `categoria2` varchar(80) DEFAULT NULL,
  `categoria3` varchar(80) DEFAULT NULL,
  `url` text,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idAnuncio`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `idCadastro` int(11) NOT NULL AUTO_INCREMENT,
  `responsavel` varchar(100) NOT NULL,
  `cpf` char(14) DEFAULT NULL,
  `empresa` varchar(100) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `email` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha1` varchar(100) NOT NULL,
  `senha2` varchar(100) NOT NULL,
  `telefone1` char(14) NOT NULL,
  `telefone2` char(14) DEFAULT NULL,
  `cep` char(9) NOT NULL,
  `uf` char(2) DEFAULT NULL,
  `cidade` char(8) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idCadastro`),
  UNIQUE KEY `empresa` (`empresa`),
  UNIQUE KEY `cnpj` (`cnpj`,`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `idGaleria` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(45) DEFAULT NULL,
  `idAnunciofk` int(11) NOT NULL,
  `idUsuariofk` int(11) NOT NULL,
  PRIMARY KEY (`idGaleria`),
  KEY `idUsuariofk` (`idUsuariofk`),
  KEY `idAnunciofk` (`idAnunciofk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

--


