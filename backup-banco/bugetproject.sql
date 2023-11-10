-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 07:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugetproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `NomeEmpresa` varchar(255) NOT NULL,
  `CelularWhatsapp` varchar(20) NOT NULL,
  `CNPJ` varchar(14) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `Cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `data_registro`, `NomeEmpresa`, `CelularWhatsapp`, `CNPJ`, `CEP`, `Cidade`) VALUES
(1, '2023-11-10 16:52:19', 'Roni', '38999999999', '10725637625', '38610280', 'Unaí');

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `nome_servico` varchar(255) NOT NULL,
  `descricao_servico` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `duracao_em_horas` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicos`
--

INSERT INTO `servicos` (`id`, `data_registro`, `nome_servico`, `descricao_servico`, `preco`, `duracao_em_horas`) VALUES
(1, '2023-11-10 17:18:30', 'Produção de curta duração', 'Criação e produção de vídeos curtos, ideais para promoções rápidas, anúncios ou conteúdos de destaque em plataformas como redes sociais.', 350.00, 2.50),
(2, '2023-11-10 17:33:11', 'Produção de Longa Duração', 'Elaboração e execução de projetos mais extensos, como vídeos institucionais, documentários ou outros formatos de longa duração.', 550.00, 4.00),
(3, '2023-11-10 17:48:04', 'Desenvolvimento de Layouts', 'Criação de conceitos visuais e designs que serão utilizados em mídias publicitárias, garantindo uma estética consistente e atraente.', 79.90, 1.50),
(5, '2023-11-10 17:53:17', 'Produção de Reels', 'Criação de vídeos curtos e dinâmicos, especialmente formatados para plataformas como Instagram, destacando momentos especiais ou resumindo eventos.', 350.00, 3.00),
(6, '2023-11-10 17:55:41', 'Edição de Vídeo', 'Serviços de edição profissional para aprimorar e polir o material bruto, garantindo uma produção final de alta qualidade.', 160.00, 2.00),
(7, '2023-11-10 17:58:12', 'Projeto de Identidade Visual', 'Desenvolvimento de uma identidade visual única para seus clientes, assegurando consistência em todos os elementos visuais de sua marca.', 790.00, 40.00),
(8, '2023-11-10 18:03:19', 'Assessoria de Marketing', 'Suporte contínuo na estratégia de marketing por meio das redes sociais, auxiliando na promoção e posicionamento da marca.', 1200.00, 40.00),
(9, '2023-11-10 18:05:05', 'Consultoria', '4 encontros de aprox. 1 hora de consultoria personalizada, oferecendo insights e orientações estratégicas para otimizar a presença digital e a utilização de vídeos na estratégia de marketing.', 850.00, 10.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
