-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Nov-2022 às 14:41
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cafedb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `celular`, `telefone`, `senha`) VALUES
(1, 'Teste', 'teste@gmail.com', NULL, NULL, '123'),
(7, 'thiago', 'thiago@gmail.com', '91987571489', '9187571489', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'thiago2', 'thiago2@gmail.com', '91912123434', '9121214343', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'thiago3', 'thiago3@gmail.com', '91911112222', '911112222', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'thiago5', 'thiago5@gmail.com', '12345678910', '1234567891', '25d55ad283aa400af464c76d713c07ad'),
(16, 'weqr', '', '21431243', '13243124', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'thiago20', 'thiago20@gmail.com', '91912341234', '9112341234', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'teste3', 'teste3@gmail.com', '91912341234', '9112341234', 'teste3'),
(19, 'teste4', 'teste4@gmail.com', '9912341234', '912341234', 'teste4'),
(20, 'qwertty', 'qwertty@qwertty.com', '91912341234', '9112341234', 'qwertty'),
(21, 'aÃ§dsljflk', 'klÃ§dsfmg', '12341234', '12341234', '123'),
(22, 'Ã§alndsfkla', 'Ã§dsjagklÃ§', '1', '1', '123'),
(23, 'alkÃ§sjdfkl', 'Ã‡LK~SAJFMÃ‡', '123', '213', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
