-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Mar-2019 às 17:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pessoas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoas_fisicas`
--

CREATE TABLE `tb_pessoas_fisicas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `nascimento` date NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoas_fisicas`
--

INSERT INTO `tb_pessoas_fisicas` (`id`, `nome`, `sobrenome`, `email`, `apelido`, `telefone`, `celular`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `nascimento`, `idade`) VALUES
(16, 'Guilherme', 'Augusto', 'gui_2512@hotmail.com', 'Chapa', '11964458904', '11964458904', '09760600', 'SP', 'São Bernardo do Campo', 'Baeta Neves', 'Rua Sétimo Guazzelli', 169, 'Casa', '1999-12-25', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoas_juridicas`
--

CREATE TABLE `tb_pessoas_juridicas` (
  `id` int(11) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cnpj` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `fundacao` date NOT NULL,
  `setor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoas_juridicas`
--

INSERT INTO `tb_pessoas_juridicas` (`id`, `nome_fantasia`, `razao_social`, `email`, `cnpj`, `telefone`, `celular`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `fundacao`, `setor`) VALUES
(13, 'Apple', 'Apple Inc', 'apple@teste.com', '1245487512', '000000000', '0000000000', '0000000', 'RJ', 'Jacarezinho', 'Bairro do Limão', 'Rua das Mandalas', 545, 'ap32B1', '1964-04-01', 'Tecnologia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pessoas_fisicas`
--
ALTER TABLE `tb_pessoas_fisicas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pessoas_juridicas`
--
ALTER TABLE `tb_pessoas_juridicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pessoas_fisicas`
--
ALTER TABLE `tb_pessoas_fisicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pessoas_juridicas`
--
ALTER TABLE `tb_pessoas_juridicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
