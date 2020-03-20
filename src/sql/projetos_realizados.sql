-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Mar-2020 às 10:16
-- Versão do servidor: 10.4.11-MariaDB-1:10.4.11+maria~bionic-log
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petraBD`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_realizados`
--

CREATE TABLE `projetos_realizados` (
  `id` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `projetos_realizados`
--

INSERT INTO `projetos_realizados` (`id`, `cidade`, `uf`, `descricao`, `foto`) VALUES
(1, 'Araraquara', 'SP', 'Descrição do Projeto Realizado', 'araraquara.jpg'),
(2, 'São Carlos', 'SP', 'Descrição do Projeto Realizado', 'saocarlos.jpg'),
(3, 'Sorocaba', 'SP', 'Descrição do Projeto Realizado', 'sorocaba.jpg'),
(4, 'Ribeirão Preto', 'SP', 'Descrição do Projeto Realizado', 'ribeiraopreto.jpg'),
(5, 'Campinas', 'SP', 'Descrição do Projeto Realizado', 'campinas.jpg'),
(6, 'Matão', 'SP', 'Descrição do Projeto Realizado', 'matao.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projetos_realizados`
--
ALTER TABLE `projetos_realizados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projetos_realizados`
--
ALTER TABLE `projetos_realizados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
