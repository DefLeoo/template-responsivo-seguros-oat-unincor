-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Out-2019 às 12:18
-- Versão do servidor: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TrabalhoAlexandreOptativaLeonardo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cotacao`
--

CREATE TABLE `cotacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cpf` int(20) NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cotacao`
--

INSERT INTO `cotacao` (`id`, `nome`, `sexo`, `cpf`, `telefone`, `email`) VALUES
(26, 'Bruna', 'Feminino', 123456, 32353691, 'dryca@gmail.com'),
(29, 'testeeeeee', 'Feminino', 123456, 3234, 'atendimento@horadedo'),
(30, 'testeeeeee', 'Feminino', 123456, 3234, 'atendimento@horadedo'),
(31, 'testeeeeee', 'Feminino', 123456, 3234, 'atendimento@horadedo'),
(32, 'testeeeeee', 'Feminino', 123456, 3234, 'atendimento@horadedo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cotacao`
--
ALTER TABLE `cotacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cotacao`
--
ALTER TABLE `cotacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
