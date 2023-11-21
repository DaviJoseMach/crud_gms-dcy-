-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 21:07
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dcy_oficial`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `fabricante` varchar(255) DEFAULT NULL,
  `tipo` enum('game','pc','console') DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `status`, `nome`, `fabricante`, `tipo`, `quantidade`) VALUES
(2, NULL, 'Minecraft', 'Mojang', 'game', 10),
(3, '', 'Memoria Ram 16gb', 'ONPress', 'pc', 30),
(4, NULL, 'Vbucks', 'Epic-Games', 'game', 1000000),
(5, NULL, 'RTX 4090', 'Nvidia', 'pc', 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `email`, `senha`) VALUES
(5, 'Davi José', 'usuario.adm@gmail.com', '$2y$10$1CT8NSHZ1FYkeb5ekR5lMuV.9hkPi0hKO/tf2GDMj.FMUjaGbfx2K'),
(6, 'Yasmin', 'usuario.adm@gmail.com', '$2y$10$X8AnlNJypKsC2NHzKtLFA.tBJ1s1K1PHW.m5N5oMXqjKtnDVQT.uS'),
(7, 'Caua Ribeiro', 'usuario.adm@gmail.com', '$2y$10$dV8OFmx4/xRQ.OPw3Dpwtuek4nc1Bk/dtlU0J8NS.aKqMljucCx/m'),
(8, 'egeg', 'teste123123@gmail.com', '$2y$10$fbbZl9gSYdFNj8Ia6qvxM.r.CjWDyrjBw0YNg0IBaSCSjPeZbxqcG'),
(9, 'agente47', 'teste47@gmail.com', '$2y$10$lQ1otM3B5.VSEIYoxTleZe6fCkIMEUDey8RTzLF8G4kpf4dR7kTG6'),
(10, 'teste0121412', 'tessaasfe@gmail.com', '$2y$10$8KPPT.TfHC5n.V9dv.VwjujIU2FRRuI4FVIIvXGGjrwSAaeTCqdCC'),
(11, '', '', '$2y$10$HHIG40dUOfYwaUiqEIIjd.w9.VLvODW3OiK1WxewBQHhXpTfgiDj2'),
(12, 'sfafasfafas', 'sfafas@gmail.com', '$2y$10$3s3Q5e1a0CHANCHypp9sw.QWoFOlL9h9Kiw2u3pfuUY7yMwZnP0N.'),
(13, 'teste01', 'teste@gmail.com', '$2y$10$JG6qepP1cHcZbrEjlP5kLOo1zM6BF7CqK1KvyDRzmaGV2sbiRmg82'),
(14, 'davvzin', 'teste23@gmail.com', '$2y$10$YgN1wiXOOdFn9r2JbNSI0.v.0rI1vrxbWkkkk7RdMfneYE.osM9Yi'),
(15, '', '', '$2y$10$xN4qftvPNuR3xGXsOyR5Eue7Pp3bzMEVE4g49T50RnurlRJLK2n56'),
(16, 'Luciano', 'luaciano123@gmail.com', '$2y$10$6/yCZjkMY8deXQoU5cSuXeTLVshldSHHGWUvcwbvDHH7UHreR/G7S'),
(17, 'clu', 'ckiouijfg@gmail.com', '$2y$10$ahjhTWEF8P70khaatwvHxOSCEzy0vEYSBsc68ojcw0SARFZDZx9lu'),
(18, 'davi123', 'davi123@gmail.com', '$2y$10$3M8ltdvYoQd4./ZB.KaVpuDXMJasYUJ0qZ3tDaWfwaeCtqAtm91zO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
