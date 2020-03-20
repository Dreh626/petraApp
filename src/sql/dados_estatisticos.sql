-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20-Mar-2020 às 10:17
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
-- Estrutura da tabela `dados_estatisticos`
--

CREATE TABLE `dados_estatisticos` (
  `id` int(11) NOT NULL,
  `numero` decimal(10,2) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `dados_estatisticos`
--

INSERT INTO `dados_estatisticos` (`id`, `numero`, `descricao`) VALUES
(1, '20.00', 'toneladas de CO2 poupados.'),
(2, '5000.00', 'kw de energia gerada.'),
(3, '2.50', 'milhões economizados por nossos clientes'),
(4, '60.00', 'Estudos realizados');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_estatisticos`
--
ALTER TABLE `dados_estatisticos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_estatisticos`
--
ALTER TABLE `dados_estatisticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
