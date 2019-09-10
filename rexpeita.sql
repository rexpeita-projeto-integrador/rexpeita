-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2019 às 21:01
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rexpeita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `cpf`, `email`, `password`, `name`, `address`) VALUES
(1, 2147483647, 'rexpeita@gmail.com', '123', 'Rexpeita Brasil', 'Avenida Bahia, 1739 - IndaiÃ¡, Caraguatatuba - SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(20) NOT NULL,
  `creditcard` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `category`, `creditcard`) VALUES
(1, 'Processador AMD Ryzen 7 2700X Zen 1+', 'img/produtos/2700x.jpg', 1599.9, 'processador', 1882.24),
(2, 'Processador Intel Core i9-9900k Coffee Lake', 'img/produtos/intel%20i9%209900k.jpg', 2599.89, 'processador', 3058.71),
(3, 'Placa-MÃ£e ASRock A320M-HD mATX AM4', 'img/produtos/a320m_asrock.jpg', 299.9, 'placa-mae', 352.82),
(4, 'Placa-MÃ£e Gigabyte Z370M Aorus Gaming', 'img/produtos/Z370M Aorus Gaming.jpg', 659.9, 'placa-mae', 733.22),
(5, 'Processador AMD Athlon 200GE Vega 3', 'img/produtos/200ge.jpg', 319.9, 'processador', 376.35),
(6, 'Processador AMD Threadripper 2990WX', 'img/produtos/2990wx.jpg', 9.559, 'processador', 10.666),
(7, 'Processador Intel Core i5-8400 Coffee Lake', 'img/produtos/intel%20i5%208400.jpg', 1049.9, 'processador', 1166.9),
(8, 'Placa-MÃ£e Gigabyte GA-A320M-S2H', 'img/produtos/a320m_gigabyte.jpg', 369.9, 'placa-mae', 425.17),
(9, 'Placa-MÃ£e MSI MAG Z390 Tomahawk', 'img/produtos/MSI%20MAG%20Z390%20Tomahawk.jpg', 1032.9, 'placa-mae', 1215.18),
(10, 'Processador AMD Ryzen 7 2700 Zen 1+', 'img/produtos/2700.jpg', 1269.9, 'processador', 1336.74),
(11, 'Processador AMD Ryzen 3 2200G Zen 1+', 'img/produtos/2200g.jpg', 519.9, 'processador', 547.26),
(12, 'MemÃ³ria Ram HyperX Fury, 4GB, 2400MHz', 'img/produtos/MemoriaHyperXFury4GB2400MHz.jpg', 148.9, 'ram', 175.18),
(13, 'MemÃ³ria Ram HyperX Fury, 8GB, 2400MHz', 'img/produtos/MemoriaHyperXFury8GB2400MHz.jpg', 228.9, 'ram', 269.29),
(14, 'HD Seagate BarraCuda, 1TB, SATA 3', 'img/produtos/HDSeagateBarraCuda%201TB.jpg', 239.9, 'hd', 266.56),
(15, 'HD Seagate BarraCuda, 2TB, SATA 3', 'img/produtos/HDSeagateBarraCuda%202TB.jpg', 309.9, 'hd', 364.59),
(16, 'SSD Kingston A400, 120GB SATA 3', 'img/produtos/SSDKingstonA400120GB.jpg', 114.9, 'ssd', 135.18),
(17, 'SSD Kingston A400, 240GB SATA 3', 'img/produtos/SSDKingstonA400120GB.jpg', 169.9, 'ssd', 199.68),
(18, 'SSD Kingston A400, 480GB SATA 3', 'img/produtos/SSDKingstonA400480GB.jpg', 334.9, 'ssd', 394),
(19, 'Fonte One Power 500W PFC Passivo White Plus', 'img/produtos/FonteOnePower500W.jpg', 99.9, 'fonte', 117.53),
(20, 'Fonte Corsair 550W 80 Plus Bronze CX550', 'img/produtos/FonteCorsair550W80PlusBronzeCX550.jpg', 342.9, 'fonte', 403.11),
(21, 'Fonte Nox 600W 80 Plus Bronze Semi-Modular', 'img/produtos/FonteNox600W80PlusBronzeSemi-Modular.jpg', 249.99, 'fonte', 294.9),
(22, 'Fonte PCYes 750W 80 Plus Bronze PFC Ativo', 'img/produtos/FontePCYes750W80PlusBronze.jpg', 319.9, 'fonte', 376.35),
(23, 'Fonte Corsair 1600W 80 Plus Titanium Modular', 'img/produtos/FonteCorsair1600W80PlusTitaniumModular.jpg', 1887.9, 'fonte', 2209.29),
(24, 'Gabinete NOX COOLBAY MX2 Micro ATX', 'img/produtos/GabineteNOXCOOLBAYMX2.jpg', 97.9, 'gabinete', 115.18),
(25, 'Gabinete Gamer Corsair Obsidian Series 1000D', 'img/produtos/GabineteGamerCorsairObsidianSeries1000D.jpg', 3000.2, 'gabinete', 3532.82),
(26, 'Gabinete Hydra Desk Case em AÃ§o Preto NR-01', 'img/produtos/GabineteHydraDeskCaseemAcoPretoNR-01.jpg', 449.9, 'gabinete', 529.29),
(27, 'Gabinete Sharkoon TG5 Vidro Temperado', 'img/produtos/GabineteSharkoonTG5GreenVidroTemperado.jpg', 317.53, 'gabinete', 269.9),
(28, 'SSD Intel 600p, 128GB, M.2 PCIe NVMe 3.0 x4', 'img/produtos/SSDIntel600p128GBM2NVMe.jpg', 380.9, 'm2', 448.12),
(29, 'Placa de VÃ­deo Zotac NVIDIA GeForce GTX 1060 6GB', 'img/produtos/gtx1060_6gb.jpg', 1059.9, 'graphicscard', 1246.94),
(30, 'Placa de VÃ­deo Gigabyte AMD Radeon RX 580 Gaming 8G', 'img/produtos/rx580_8gb.jpg', 949.9, 'graphicscard', 1117.53),
(31, 'Placa de VÃ­deo MSI NVIDIA GeForce RTX 2070 Ventus 8G, GDDR6', 'img/produtos/rtx2070.jpg', 2599.9, 'graphicscard', 3058.71);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf_index` (`cpf`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
