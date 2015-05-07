-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2015 às 21:55
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inove`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id_case` int(11) NOT NULL,
  `url_1` varchar(256) DEFAULT NULL,
  `url_2` varchar(256) DEFAULT NULL,
  `url_3` varchar(256) DEFAULT NULL,
  `url_4` varchar(256) DEFAULT NULL,
  `url_5` varchar(256) DEFAULT NULL,
  `url_6` varchar(256) DEFAULT NULL,
  `url_7` varchar(256) DEFAULT NULL,
  `url_8` varchar(256) DEFAULT NULL,
  `url_9` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_case`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `cod_img` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`cod_img`, `url`, `tipo`) VALUES
(1, 'http://localhost/Site-da-Inove/img/imagens/big-img2.jpg', 'Case'),
(2, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(3, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(4, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(5, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(6, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(7, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(8, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(9, 'http://localhost/Site-da-Inove/img/imagens/big-img.jpg', 'Case'),
(19, 'http://localhost/Site-da-Inove/img/imagens/blue.jpg', 'Banner'),
(20, 'http://localhost/Site-da-Inove/img/imagens/purple.jpg', 'Banner'),
(21, 'http://localhost/Site-da-Inove/img/imagens/red.jpg', 'Banner'),
(22, 'http://localhost/Site-da-Inove/img/imagens/microlancer.jpg', 'Logo'),
(23, 'http://localhost/Site-da-Inove/img/imagens/themeforest.jpg', 'Logo'),
(24, 'http://localhost/Site-da-Inove/img/imagens/envato.jpg', 'Logo'),
(25, 'http://localhost/Site-da-Inove/img/imagens/creative-market.jpg', 'Logo'),
(37, 'http://localhost/Site-da-Inove/img/imagens/aetuts.jpg', 'Logo'),
(38, 'http://localhost/Site-da-Inove/img/imagens/designmodo.jpg', 'Logo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(256) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', '7eec6d7939aa68058ff430678e0ec939fa2f4940a341951fcd02245ad678b4dc6321ac66347d51c5d65ab77d68ccc2e920496fe300f3191e696635fb03464b5d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
