-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2019 às 00:11
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rexpeita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'LG'),
(2, 'Samsung'),
(3, 'AOC'),
(4, 'AMD'),
(5, 'Microsoft\r\n'),
(6, 'Razer'),
(7, 'Intel\r\n'),
(9, 'Wd'),
(10, 'Water cooler\r\n'),
(11, 'Bronze\r\n'),
(12, 'Hyper'),
(13, 'Gigabyte'),
(14, 'Asus\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `sub` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `sub`, `name`) VALUES
(6, NULL, 'Monitor'),
(14, NULL, 'Som'),
(15, 14, 'Headphones'),
(16, 14, 'Microfones'),
(17, 15, 'Com Fio'),
(18, 15, 'Sem Fio'),
(19, NULL, 'Processador\r\n'),
(20, NULL, 'Console\r\n'),
(22, NULL, 'Hd\r\n'),
(23, NULL, 'Cooler'),
(24, NULL, 'Fonte\r\n'),
(25, NULL, 'Memória Ram\r\n'),
(26, NULL, 'Placa de video\r\n'),
(27, NULL, 'Placa mãe\r\n'),
(28, NULL, 'SSD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `coupon_type` int(11) NOT NULL,
  `coupon_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `options`
--

INSERT INTO `options` (`id`, `name`) VALUES
(1, 'Cor'),
(2, 'Tamanho'),
(3, 'Memória RAM'),
(4, 'Polegadas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `price_from` float NOT NULL,
  `rating` float NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `new_product` tinyint(1) NOT NULL,
  `options` varchar(200) DEFAULT NULL,
  `weight` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `length` float NOT NULL,
  `diameter` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `id_category`, `id_brand`, `name`, `description`, `stock`, `price`, `price_from`, `rating`, `featured`, `sale`, `bestseller`, `new_product`, `options`, `weight`, `width`, `height`, `length`, `diameter`) VALUES
(1, 6, 1, 'Monitor 21 polegadas', 'Alguma descrição do produto.', 10, 499, 599, 0, 1, 1, 1, 0, '1,2,4', 0.9, 20, 15, 20, 15),
(2, 6, 2, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 399, 999, 2, 1, 1, 1, 0, '1,2', 0.8, 20, 15, 20, 15),
(3, 6, 2, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 1, 0, 0, 1, '1,2', 0.7, 20, 15, 20, 15),
(4, 6, 3, 'Monitor 17 polegadas', 'Alguma outra descrição', 10, 3779, 900, 2, 1, 0, 0, 0, '1,4', 0.6, 20, 15, 20, 15),
(5, 6, 1, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 299, 499, 0, 1, 0, 0, 1, '1', 0.5, 20, 15, 20, 15),
(6, 6, 3, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 699, 0, 0, 1, 0, 0, 0, '1,2,4', 0.4, 20, 15, 20, 15),
(7, 6, 3, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 889, 999, 5, 1, 1, 0, 0, '2,4', 0.3, 20, 15, 20, 15),
(8, 6, 1, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 1, 0, 0, 0, '4', 0.2, 20, 15, 20, 15),
(9, 19, 4, 'Processador AMD Ryzen 3 2200G', 'Características:\r\n\r\n- Marca: AMD\r\n\r\n- Modelo: YD2200C5FBBOX\r\n\r\n\r\n\r\nEspecificações:\r\n\r\n- CPU Cores: 4\r\n\r\n- Base Clock: 3.5GHz\r\n\r\n- Cache L3 total: 4MB\r\n\r\n- Threads: 4\r\n\r\n- Máx. Boost Clock: 3.7GHz\r\n\r\n- Default TDP / TDP: 65W\r\n\r\n- GPU Cores: 8\r\n\r\n- Total L2 Cache: 2MB\r\n\r\n- cTDP: 46-65W\r\n\r\n- Plataforma: Desktop\r\n\r\n \r\n\r\nGráficos:\r\n\r\n- Frequência: 1100 MHz\r\n\r\n- Modelo: Radeon VEGA 8 Processor Graphics (integrado no chip do processador)\r\n\r\n- Core Count: 8 \r\n\r\n\r\n\r\nTecnologias compatíveis:\r\n\r\n- Tecnologia AMD SenseMI\r\n\r\n- Utilitário AMD Ryzen™ Master\r\n\r\n- Enmotus FuzeDrive™ para AMD Ryzen™\r\n\r\n- Software Radeon\r\n\r\n\r\n\r\nConteúdo da embalagem:\r\n\r\n- Processador AMD Ryzen\r\n\r\n- Cooler Wraith Stealth\r\n\r\n\r\nGarantia\r\n1 ano de garantia\r\n(9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n665 gramas (bruto com embalagem)\r\n» Políticas do Site', 5, 399, 470, 5, 5, 1, 1, 1, '2,5,1\r\n', 0, 0, 0, 0, 0),
(10, 19, 4, 'Processador AMD Ryzen 5 3600X Cache', 'Características:\r\n\r\n- Marca: AMD \r\n\r\n- Modelo: 100-100000022BOX\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Nº de núcleos de CPU: 6\r\n\r\n- Nº de threads: 12\r\n\r\n- Clock básico: 3.8GHz\r\n\r\n- Clock de Max Boost: 4.4GHz\r\n\r\n- Cachê L2 total: 3MB\r\n\r\n- Cachê L3 total: 32MB\r\n\r\n- Desbloqueado: Sim\r\n\r\n- CMOS: TSMC 7nm FinFET\r\n\r\n- Package: AM4\r\n\r\n- Versão do PCI Express: PCIe 4.0 x16\r\n\r\n- Solução térmica: Wraith Spire\r\n\r\n- TDP / TDP Padrão: 95W\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Velocidade máxima da memória: 3200MHz\r\n\r\n- Tipo de memória: DDR4\r\n\r\n- Canais de memória: 2\r\n\r\n \r\n\r\nConteúdo da embalagem:\r\n\r\n- 01 Processador AMD Ryzen 5 3600X\r\n\r\n- 01 Cooler\r\n\r\n \r\n\r\nESTE PROCESSADOR NÃO POSSUI VÍDEO INTEGRADO!\r\n\r\n\r\n\r\n* Fiquei Ligado: Para montar um setup com esse modelo de processador, é necessário a instalação de uma placa de vídeo, pois o mesmo não possui vídeo integrado.\r\n\r\n\r\nGarantia\r\n1 ano de garantia\r\n(9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n680 gramas (bruto com embalagem)', 50, 1099.9, 1458.71, 4, 5, 1, 0, 0, '4,2,3', 0, 0, 0, 0, 0),
(11, 19, 4, 'Processador AMD Ryzen Threadripper 2990WX', 'Características:\r\n\r\n- Marca: AMD\r\n\r\n- Modelo: YD299XAZAFWOF\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Nº de núcleos de CPU: 32\r\n\r\n- Nº de threads: 64\r\n\r\n- Clock básico: 3GHz\r\n\r\n- Clock de Max Boost: 4,2 GHz\r\n\r\n- Cachê L1 total: 3MB\r\n\r\n- Cachê L2 total: 16MB\r\n\r\n- Cachê L3 total: 64MB\r\n\r\n- Desbloqueado\r\n\r\n- CMOS: 12nm\r\n\r\n- Socket: TR4\r\n\r\n- Versão do PCI Express: 3.0\r\n\r\n- TDP / TDP Padrão: 250W\r\n\r\n- Temps máx: 68º C\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Velocidade máxima: 2933 MHz\r\n\r\n- Tipo: DDR4\r\n\r\n- Canais: 4\r\n\r\n \r\n\r\nTecnologias compatíveis:\r\n\r\n- Arquitetura do núcleo “Zen”\r\n\r\n- Tecnologia AMD SenseMI\r\n\r\n- Utilitário AMD Ryzen Master\r\n\r\n \r\n\r\nConteúdo da Embalagem:\r\n\r\n- Processador AMD Ryzen Threadripper 2990WX\r\n\r\n \r\n\r\nObservação:\r\n\r\n* Refrigeração não incluída.\r\n\r\n\r\n\r\nESTE PROCESSADOR NÃO POSSUI VÍDEO INTEGRADO!\r\n\r\n\r\n\r\n\r\n* Fiquei Ligado: Para montar um setup com esse modelo de processador, é necessário a instalação de uma placa de vídeo, pois o mesmo não possui vídeo integrado.\r\n\r\n\r\nGarantia\r\n1 ano de garantia\r\n(9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n910 gramas (bruto com embalagem)', 1, 10102.9, 11225.4, 5, 0, 1, 0, 1, '5,3,1', 0, 0, 0, 0, 0),
(12, 20, 5, 'Console Microsoft Xbox One S 1TB Branco', '\r\nCaracterísticas:\r\n\r\n- Marca: Microsoft\r\n\r\n- Modelo: 234-01120\r\n\r\nEspecificações:\r\n\r\n- Cor: Branco\r\n\r\n- Plataforma: Xbox One S\r\n\r\n- Espaço de armazenamento: 1TB\r\n\r\n- Voltagem: Bivolt', 150, 1999, 0, 4.5, 5, 0, 0, 1, '0,5,3', 0, 0, 0, 0, 0),
(13, 20, 5, 'Controle Microsoft Wireless Preto Xbox', 'Características:\r\n\r\n- Marca: Microsoft\r\n\r\n- Modelo: TF5-00002\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Plataforma: Xbox One\r\n\r\n- Alimentação: 2x Pilhas AA\r\n\r\n- Cor: Branco\r\n\r\n- Conectividade sem fio\r\n\r\n \r\n\r\nInformações Adicionais:\r\n\r\n- O controle sem fio de Xbox One agora apresenta plug de fone de ouvido estéreo 3,5 milímetros que permite que você conecte seu fone de ouvido diretamente no controle.\r\n\r\n- Pode ser atualizado sem fio sem a necessidade de conectar um cabo USB.\r\n\r\n- Sinta a ação com trickers de impulso.\r\n\r\n- Com motores de vibração nos gatilhos que fornecem feedback imediato dos tiros e ações no jogo, a experiência de jogo chega um novo nível de realismo.\r\n\r\n- O D -pad é sensível a todos os movimentos direcionais. Grips e contornos foram projetados para atender ao contorno das mãos mais confortavelmente.\r\n\r\n- O controle de combate com design em branco e detalhes metálicos.\r\n\r\n- Possui de uma entrada para headset estéreo de 3,5 mm que permite que você conecte seu fone de ouvido diretamente no controle.\r\n\r\n- Com motores de vibração nos gatilhos que fornecem feedback imediato dos tiros e ações no jogo, a experiência de jogo chega um novo nível de realismo.\r\n\r\n- O D-pad é sensível a todos os movimentos direcionais. \r\n\r\n- Grips e contornos foram projetados para atender ao contorno das mãos mais confortavelmente.\r\n\r\n- Controle seu console ou PC com o novo controle bluetooth\r\n\r\n \r\n\r\nConteúdo da Embalagem:\r\n\r\n- Controle Microsoft Xbox One\r\n\r\n\r\n\r\n\r\nGarantia\r\n3 meses de garantia\r\n(correspondente à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n445 gramas (bruto com embalagem)', 150, 239, 282, 0, 0, 0, 1, 0, '3,2,3', 0, 0, 0, 0, 0),
(14, 20, 6, 'Controle Razer Wolverine Gaming Ultimate Xbox One', 'Especificações:\r\n- Funciona com Xbox One e PC (Windows 10)\r\n- 6 amortecedores e gatilhos remappable adicionais\r\n- Pivô intercambiáveis ​​e D-Pad\r\n- Iluminação Razer Chroma\r\n- 2 para-choques multifunção Hyperesponse de ombro\r\n- 4 disparadores multifunções\r\n- 4 botões de ação ABXY do interruptor tátil\r\n- Painel de controle rápido de 4 botões\r\n- Multi-Color Razer Chroma Lighting Strip\r\n- Porta de áudio de 3,5 mm para saída de áudio estéreo e entrada de microfone\r\n- Funcionalidade do cabo de liberação rápida\r\n- Cabo de fibra trançado leve de 3 m / 10 pés removível com conector Micro-USB\r\n- Tamanho aproximado: 106 mm / 4.17 in (Comprimento) x 156 mm / 6.14 in (Largura) x 66 mm / 2.60 in (Altura)', 150, 899.9, 1058.71, 4, 12, 1, 0, 1, '1,2,0', 0, 0, 0, 0, 0),
(15, 19, 7, 'Processador Intel Core i3', 'Características:\r\n\r\n- Marca: Intel\r\n\r\n- Modelo: i3-9100F Coffee Lake\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Litografia: 14 nm\r\n\r\n \r\n\r\nDesempenho:\r\n\r\n- Número de núcleos: 4\r\n\r\n- Número de threads: 4\r\n\r\n- Frequência baseada em processador: 3.60 GHz\r\n\r\n- Frequência turbo max: 4.20 GHz\r\n\r\n- Cache: 6 MB SmartCache\r\n\r\n- Velocidade do barramento: 8 GT/s DMI3\r\n\r\n- TDP: 65 W\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Tamanho máximo de memória: 64 GB\r\n\r\n- Tipos de memória: DDR4-2400\r\n\r\n- Nº máximo de canais de memória: 2\r\n\r\n- Largura de banda máxima da memória: 37.5 GB/s\r\n\r\n- Compatibilidade com memória ECC', 100, 399.9, 499.99, 3, 12, 1, 0, 0, '1,2,3', 0, 0, 0, 0, 0),
(16, 19, 7, 'Processador Intel Core i5', 'Características:\r\n- Marca: Intel\r\n- Modelo: BX80684I59400F\r\n\r\nEspecificações:\r\n- Segmento Vertical: Desktop\r\n- Litografia: 14 nm\r\n- Soquetes suportados: FCLGA1151\r\n- Configuração Máxima da CPU: 1\r\n- Solução térmica: PCG 2015C (65W)\r\n- TJUNCTION: 100ºC\r\n\r\nPerformance:\r\n- Núcleos: 6x\r\n- Segmentos: 6x\r\n- Frequência básica: 2,90 GHz\r\n- Freqüência máxima: 4,10 GHz\r\n- SmartCache de 9 MB\r\n- Velocidade do Bus: 8 GT / s DMI3\r\n- TDP: 65 W\r\n\r\nMemória:\r\n- Tamanho Máximo da Memória: 64GB (depende do tipo de memória)\r\n- Tipos de memória: DDR4-2666\r\n- Número Máximo de Canais de Memória: 2\r\n- Largura de banda máxima da memória: 41,6 GB / s\r\n\r\nOpções de Expansão:\r\n- Escalabilidade: Apenas 1S\r\n- Revisão PCI Express: 3.0\r\n- Configurações PCI Express: Até 1x16, 2x8, 1x8 + 2x4\r\n- Número Máximo de Pistas PCI Express: 16', 150, 988, 0, 0, 0, 0, 1, 0, '5,4,2', 0, 0, 0, 0, 0),
(17, 19, 7, 'Processador Intel Core i9', 'Características:\r\n\r\n- Marca: Intel\r\n\r\n- Modelo: BX80684I99900KF\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n \r\n\r\nPerfomance:\r\n\r\n- Núcleos: 8\r\n\r\n- Threads: 16\r\n\r\n- Freqüência básica: 3.60 GHz\r\n\r\n- Freqüência Máxima Turbo: 5.00 GHz\r\n\r\n- Cache de 16 MB do SmartCache\r\n\r\n- Velocidade do barramento: 8 GT / s DMI3\r\n\r\n- TDP: 95 W', 250, 2449.9, 2882.24, 1, 12, 1, 0, 0, '2,1,4', 0, 0, 0, 0, 0),
(18, 22, 9, 'HD WD Blue, 1TB', 'Características:\r\n- Marca: WD\r\n- Modelo: WD10EZEX\r\n\r\nEspecificações:\r\n- Interface: SATA 6 Gb/s\r\n- Capacidade: 1TB\r\n- Form factor: 3.5-inch\r\n- RoHS compliant\r\n- Cache: 64MB\r\n- Rotação: 7200 rpm\r\n- Buffer para host: 6 Gb/s \r\n\r\nTemperaturas:\r\n- Em Operação: 0º a 60º C\r\n- Em espera: -40º a 70ºC\r\n\r\nInformações adicionais:\r\n- O original: Os drives WD Blue são projetados e fabricados com a tecnologia comprovada presente nos premiados HDs móveis e para desktop originais da WD.\r\n- A qualidade WD: Construídas segundo os mais altos níveis de qualidade e confiabilidade, essas unidades oferecem recursos e capacidade ideais para suas necessidades diárias de computação.\r\n- Mais opções: Essas unidades estão disponíveis em uma vasta gama de capacidades e interfaces, para você ter a unidade perfeita para seu sistema, de várias maneiras.\r\n- Interface SATA ou PATA: Embora o SATA tenha se convertido na interface padrão do setor, a WD continua fabricando HDs para computadores de mesa com a interface PATA para sistemas exclusivos ou legados.\r\n- Tecnologia de carga de rampa NoTouch™: O cabeçote de gravação nunca toca a mídia do disco, garantindo um desgaste muito menor do cabeçote de gravação e da mídia, bem como uma melhor proteção do drive em trânsito.\r\n- É fácil atualizar sua unidade: Com o software Acronis® True Image™ WD Edition, disponível para download gratuito no site de Suporte da WD, você copia todos os dados em uma nova unidade, assim você não precisa reinstalar o sistema operacional para ter todas as vantagens de uma nova unidade. ', 125, 239.9, 282.24, 0, 0, 0, 1, 0, '2,1,5', 0, 0, 0, 0, 0),
(19, 22, 9, 'HD Seagate BarraCuda, 2TB,', 'Características:\r\n\r\n- Marca: Seagate\r\n\r\n- Modelo: ST2000DM008\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Interface: SATA 6Gb/s\r\n\r\n- Taxa de transferência suportado SATA: 6.0 / 3.0 / 1.5 Gb/s\r\n\r\n- Taxa de transferência sustentada OD: 220MB/s\r\n\r\n- Cache: 256 MB\r\n\r\n- Bytes por setor: 4096\r\n\r\n- Capacidade: 2TB\r\n\r\n \r\n\r\nConteúdo da Embalagem:\r\n\r\n- HD Seagate BarraCuda\r\n\r\n\r\nGarantia\r\n1 ano de garantia\r\n(9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n395 gramas (bruto com embalagem)', 0, 0, 0, 0, 0, 0, 0, 0, '1,2,5', 0, 0, 0, 0, 0),
(20, 22, 9, 'HD WD Purple Surveillance', 'Especificações:\r\n\r\n- Capacidade: 1TB\r\n\r\n- Fator de forma: 3.5 polegadas\r\n\r\n- Formato avançado\r\n\r\n- Cumpre as normas RoHS\r\n\r\n \r\n\r\nRecursos do produto:\r\n\r\n- Câmera suportadas: Até 64\r\n\r\n- Nímero máximo de compartimentos para unidades suportado: 8\r\n\r\n \r\n\r\nDesempenho:\r\n\r\n- Cache: 64 MB\r\n\r\n- Classe de desempenho: Classe de 5400 RPM\r\n\r\n\r\n\r\nTaxa de transferência da interface (máx):\r\n\r\n- Buffer para host: 6 Gb/s\r\n\r\n- Host para/desde drive (mantido): 110 MB/s\r\n\r\n \r\n\r\nConfiabilidade/Integridade dos dados:\r\n\r\n- Ciclos de carga e descarga: 300.000\r\n\r\n- Carga de trabalho nominal anualizada: 180 TB/ano\r\n\r\n- Erros de leitura irrecuperáveis por bits lidos: <1 em 10\r\n\r\n\r\n\r\nGerenciamento de energia:\r\n\r\n- Leitura/Gravação: 3,3\r\n\r\n- Ocioso: 2,9\r\n\r\n- Standby e dormindo: 0,4\r\n\r\n', 150, 249, 294.9, 1, 0, 0, 0, 1, '1,3,5', 0, 0, 0, 0, 0),
(21, 23, 10, 'WaterCooler Cooler Master MasterLiquid ML240R RGB ', 'Características:\r\n- Marca: Cooler Master\r\n- Modelo: MLX-D24M-A20PC-R1\r\n\r\n\r\nEspecificações:\r\n\r\n\r\nSoquete da CPU:\r\n\r\n- Intel LGA 2066/2011-v3 / 2011/1151/1150/1155 / 1156/1366/775 \r\n\r\n- AMD AM4 / AM3 + / AM3 / AM2 + / AM2 / FM2 + / FM2 / o FM1 \r\n\r\n \r\n\r\nRadiador:\r\n\r\n- Material: Alumínio\r\n\r\n- Dimensões: 277 x 119,6 x 27 mm (10,9 x 4,71 x 1,06 \")\r\n\r\n \r\n\r\nVentilador:\r\n\r\n- Dimensões: 120 x 120 x 25 mm (4,7 x 4,7 x 1 \")\r\n\r\n- Quantidade: 2 PCS\r\n\r\n- Rapidez: 650 ~ 2000 RPM (PWM) ± 10%\r\n\r\n- Fluxo de ar: 66,7 CFM (máx.)\r\n\r\n- Pressão do ar: 2,34 mmH 2 O (máx)\r\n\r\n- MTTF: 160.000 horas\r\n\r\n- Nível de ruído: 6 ~ 30 dBA\r\n\r\n- Conector: 4 pinos (PWM)\r\n\r\n- Tensão nominal: 12 VDC\r\n\r\n \r\n\r\nBomba:\r\n\r\n- Dimensões: 83,6 x 71,8 x 52,7 mm (3,3 x 2,8 x 2,1 \")\r\n\r\n- MTTF: 70.000 horas\r\n\r\n- Nível de ruído: <15 dBA\r\n\r\n- Conector: 3 pinos\r\n\r\n- Tensão nominal: 12 VDC\r\n\r\n \r\n\r\nConteúdo da embalagem:\r\n- WaterCooler Cooler Master \r\n\r\n', 300, 633.9, 745.76, 4, 12, 1, 1, 1, '5,3,4', 0, 0, 0, 0, 0),
(22, 23, 10, 'WaterCooler PCYes Nix RGB 240mm, 2 Fans, Preto', 'Características:\r\n- Marca: PCYes\r\n- Modelo: PWC240H40PTRGB\r\n\r\nEspecificações:\r\n- Conector da bomba: SATA\r\n- TDP: 200W\r\n- Dimensão do radiador: 274×120×27mm\r\n- Material do Radiador: Alumínio\r\n- Material do Tubo: Tubulação Premium\r\n- Comprimento do tubo: 400mm\r\n- Dimensão do waterblock: Ф68×65×36mm\r\n- Material da Chapa Fria: Cobre\r\n- Corrente da bomba: 0.25A\r\n- Velocidade da bomba: 2100RPM\r\n- Rolamento da bomba: Rolamento cerâmico\r\n- Expectativa de vida da bomba: 50.000 horas\r\n- Dimensão do fan: 120×120×25mm\r\n- Fan incluídos: 2 peças\r\n- Velocidade do Fan: 700～1800RPM\r\n- Máx. Fluxo de Ar: 74.5CFM\r\n- Máx. Pressão estática: 2.15mmH2O\r\n- Ruído: 18～35.2dB(A)\r\n- Tensão nominal: 12VDC\r\n- Tensão de operação: 10.8~13.2VDC\r\n- Tensão iniciada: 7VDC\r\n- Corrente Nominal: 0.25A\r\n- Entrada de alimentação: 3W\r\n- Tipo do rolamento: Rolamento hidráulico\r\n- Bomba de Alto Desempenho\r\n- Sincroniza com Placa-mãe RGB\r\n- Base de Cobre Microfin\r\n- Tubos com Revestimento Premiun\r\n\r\n\r\nCompatibilidade:\r\n- Intel LGA2066/2011/1366/1150/1151/1155/1156/775\r\n- AMD FM2+/FM2/FM1/AM4/AM3+/AM3/AM2+/AM2\r\n\r\n\r\nConteúdo da embalagem:\r\n- WaterCooler PCYes Nix RGB 240mm', 150, 416.35, 458.71, 5, 0, 1, 0, 0, '1,5,4', 0, 0, 0, 0, 0),
(23, 23, 10, 'WaterCooler NOX AURA RGB ', ' \r\n\r\nCaracterísticas:\r\n- Marca: Nox\r\n- Modelo: NXH240AURA\r\n\r\nEspecificações:\r\n\r\nFan:\r\n- Tipo: Hidrálico\r\n- Velocidade da Fan: 00 - 1800 RPM\r\n- Fluxo de Ar: 74.5 CFM (máx.)\r\n- Ruído acústico: < 18\"-\'35.2 dBA (Max.)\r\n- Tensão nominal: 12V\r\n- Pressão estática: 2.15 mm H2O (Max.)\r\n- Entrada de energia: 1.8V\r\n- MTBF: 50.000h\r\n- Conector: 4-pin (PWM)\r\n- Dimensões: 120 x 120 x 25 mm\r\n\r\n\r\nBlock:\r\n- Dimensões: 68 x65x 36 mm \r\n- Material: Cobre (base), plástico (corpo principal, caixa)\r\n\r\n\r\nBomba:\r\n- Rolamento: Cerâmica\r\n- Velocidade do motor: 2100 RPM ( +/- 10%)\r\n- Tensão nominal: 12V\r\n\r\n\r\nRadiador:\r\n- Dimensões: 27 4 x 120 x 27 mm\r\n- Material: Alumínio\r\n\r\n\r\nTubulação:\r\n- Dimensões: 2 mm de diâmetro / 320 mm de comprimento\r\n- Material: Tubo Premium Sleeved \r\n\r\n\r\nCompatibilidade:\r\n- Soquete Intel: LGA 2066 / 2011 / 1366 / 1151 / 1150 / 1155 / 1156 / 775\r\n- Soquete AMD: AM4 / FM2 + / FM2 / FM1 / AM3 + / AM3 AM2 + AM', 400, 396.9, 0, 0, 0, 0, 1, 0, '2,4,5', 0, 0, 0, 0, 0),
(24, 24, 11, 'Fonte Corsair 550W 80 Plus Bronze CX550', 'Características:\r\n\r\n- Marca: Corsair\r\n\r\n- Modelo: CP-9020121-WW\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- MTBF: 100,000 horas\r\n\r\n- Nível de certificação 80 PLUS Bronze\r\n\r\n- Power: 550W\r\n\r\n- PFC Ativo\r\n\r\n- Tecnologia de rolamentos do ventilador: Rifle\r\n\r\n- Tamanho do ventilador: 120mm\r\n\r\n- Temperatura nominal de saída contínua: 40°C\r\n\r\n- Dimensões: 150 mm x 140 mm x 86 mm\r\n\r\n- Tipo de cabo: Sleeved\r\n\r\n- Plug Tipo: WW\r\n\r\n- Entrada de CA: 100V - 240V\r\n\r\n\r\n\r\nConectores:\r\n\r\n- Conector ATX: 1x\r\n\r\n- Conector EPS: 1x\r\n\r\n- Conector Floppy: 1x\r\n\r\n- Conector 4-Pin: 4x\r\n\r\n- Conector PCIe: 2x\r\n\r\n- Conector SATA: 5x', 400, 341.6, 0, 0, 0, 0, 1, 1, '5,4,3', 0, 0, 0, 0, 0),
(25, 24, 11, 'Fonte Corsair 650W 80 Plus Bronze CX650', 'Características:\r\n\r\n- Marca: Corsair\r\n\r\n- Modelo: CP-9020121-WW\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- MTBF: 100,000 horas\r\n\r\n- Nível de certificação 80 PLUS Bronze\r\n\r\n- Power: 550W\r\n\r\n- PFC Ativo\r\n\r\n- Tecnologia de rolamentos do ventilador: Rifle\r\n\r\n- Tamanho do ventilador: 120mm\r\n\r\n- Temperatura nominal de saída contínua: 40°C\r\n\r\n- Dimensões: 150 mm x 140 mm x 86 mm\r\n\r\n- Tipo de cabo: Sleeved\r\n\r\n- Plug Tipo: WW\r\n\r\n- Entrada de CA: 100V - 240V\r\n\r\n\r\n\r\nConectores:\r\n\r\n- Conector ATX: 1x\r\n\r\n- Conector EPS: 1x\r\n\r\n- Conector Floppy: 1x\r\n\r\n- Conector 4-Pin: 4x\r\n\r\n- Conector PCIe: 2x\r\n\r\n- Conector SATA: 5x', 0, 364.59, 500, 0, 0, 1, 0, 0, '5,4,3', 0, 0, 0, 0, 0),
(26, 24, 11, 'Fonte Corsair 650W 80 Plus White VS650 - ', 'Características:\r\n\r\n- Marca: Corsair\r\n\r\n- Modelo: CP-9020121-WW\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- MTBF: 100,000 horas\r\n\r\n- Nível de certificação 80 PLUS Bronze\r\n\r\n- Power: 550W\r\n\r\n- PFC Ativo\r\n\r\n- Tecnologia de rolamentos do ventilador: Rifle\r\n\r\n- Tamanho do ventilador: 120mm\r\n\r\n- Temperatura nominal de saída contínua: 40°C\r\n\r\n- Dimensões: 150 mm x 140 mm x 86 mm\r\n\r\n- Tipo de cabo: Sleeved\r\n\r\n- Plug Tipo: WW\r\n\r\n- Entrada de CA: 100V - 240V\r\n\r\n\r\n\r\nConectores:\r\n\r\n- Conector ATX: 1x\r\n\r\n- Conector EPS: 1x\r\n\r\n- Conector Floppy: 1x\r\n\r\n- Conector 4-Pin: 4x\r\n\r\n- Conector PCIe: 2x\r\n\r\n- Conector SATA: 5x', 100, 299.9, 0, 0, 0, 1, 1, 0, '2,1,5', 0, 0, 0, 0, 0),
(27, 25, 12, '\r\nMemória HyperX Fury, 8GB, 2400MHz, DDR4, CL15, RGB', 'Especificações:\r\n- Formato: UDIMM\r\n- Pinos: 288\r\n- XMP-Ready\r\n- Plug & Play\r\n- Velocidades: 2400MHz\r\n- Latências CAS: 15\r\n- Voltagem: 1.2V\r\n- Capacidades de módulo: 8GB\r\n- Temperatura de operação: 0o C até +70o C\r\n- Temperatura de armazenamento: -40o C até +85o C\r\n- Cor do PCB: Preto\r\n- Cor do dissipador de calor: Preto\r\n- Dimensões do Módulo: 133.35mm x 34.10mm x 7mm', 300, 211.65, 0, 0, 0, 0, 1, 0, '5,2,1', 0, 0, 0, 0, 0),
(28, 25, 12, 'Memória HyperX Fury RGB, 64GB', 'Especificações:\r\n- Formato: UDIMM\r\n- Pinos: 288\r\n- XMP-Ready\r\n- Plug & Play\r\n- Velocidades: 2400MHz\r\n- Latências CAS: 15\r\n- Voltagem: 1.2V\r\n- Capacidades de módulo: 8GB\r\n- Temperatura de operação: 0o C até +70o C\r\n- Temperatura de armazenamento: -40o C até +85o C\r\n- Cor do PCB: Preto\r\n- Cor do dissipador de calor: Preto\r\n- Dimensões do Módulo: 133.35mm x 34.10mm x 7mm', 100, 3176.35, 0, 0, 0, 0, 0, 0, '3,2,1', 0, 0, 0, 0, 0),
(29, 25, 12, '\r\nMemória Crucial Ballistix Sport LT, 8GB', 'Características:\r\n\r\n- Marca: Crucial\r\n\r\n- Modelo: BLS8G4D26BFSEK\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Fator de forma: UDIMM \r\n\r\n- Capacidade Total: 8GB \r\n\r\n- Tipo: DDR4\r\n\r\n- PC4-21300\r\n\r\n- Latência: 16-18-18\r\n\r\n- Sem buffer\r\n\r\n- Não-ECC\r\n\r\n- Velocidade: 2666 MHz\r\n\r\n- Tensão: 1.2V\r\n\r\n- 1024Meg x 64\r\n\r\n- Série: Ballistix Sport\r\n\r\n- ECC: não-ECC', 300, 189.9, 300, 0, 0, 1, 0, 0, '3,5,4', 0, 0, 0, 0, 0),
(30, 26, 13, 'Placa de Vídeo Gigabyte NVIDIA GeForce GTX 1050', ' \r\n\r\nCaracterísticas:\r\n\r\n- Marca: Gigabyte\r\n\r\n- Modelo: GV-N105TD5-4GD \r\n\r\n \r\n\r\nEspecificações: \r\n\r\n \r\n\r\nInterface:\r\n\r\n- PCI-E 3.0 x 16\r\n\r\n \r\n\r\nChipset:\r\n\r\n- GPU: GeForce® GTX 1050 Ti\r\n\r\n- Base Clock: OC Mode: 1316MHz  / Gaming Mode: 1290MHz\r\n\r\n- Boost Clock: OC Mode: 1430MHz / Gaming Mode: 1392MHz\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Clock efetivo: 7008 MHz\r\n\r\n- Tamanho: 4GB\r\n\r\n- Interface: 128 bit\r\n\r\n- Tipo: GDDR5\r\n\r\n \r\n\r\nAPI 3D:\r\n\r\n- DirectX 12\r\n\r\n- OpenGL 4.5\r\n\r\n \r\n\r\nPortas:\r\n\r\n- 1 x HDMI (Max Resolution: 4096x2160 @60 Hz)\r\n\r\n- 1 x DisplayPort (Max Resolution: 7680x4320 @60 Hz)\r\n\r\n- 1 x Dual-link DVI-D\r\n\r\n \r\n\r\nGeral:\r\n\r\n- Resolução Máxima: 7680x4320\r\n\r\n- Requisitos do sistema: Alimentação mínima 300W\r\n\r\n- Fator de Forma: ATX\r\n\r\n- Mult-View: 3\r\n\r\n- Dimensões: 30 x 172 x 113 mm\r\n\r\n \r\n\r\nConteúdo da embalagem:\r\n\r\n- 01 Placa de Video VGA GigaByte \r\n\r\n- 01 Drive de instação\r\n\r\n- Guia do usuário\r\n\r\n', 500, 729.29, 0, 0, 0, 0, 0, 1, '3,5,4', 0, 0, 0, 0, 0),
(31, 26, 13, '\r\nPlaca de Vídeo Gigabyte AMD Radeon RX 590', ' \r\n\r\nCaracterísticas:\r\n\r\n- Marca: Gigabyte\r\n\r\n- Modelo: GV-N105TD5-4GD \r\n\r\n \r\n\r\nEspecificações: \r\n\r\n \r\n\r\nInterface:\r\n\r\n- PCI-E 3.0 x 16\r\n\r\n \r\n\r\nChipset:\r\n\r\n- GPU: GeForce® GTX 1050 Ti\r\n\r\n- Base Clock: OC Mode: 1316MHz  / Gaming Mode: 1290MHz\r\n\r\n- Boost Clock: OC Mode: 1430MHz / Gaming Mode: 1392MHz\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Clock efetivo: 7008 MHz\r\n\r\n- Tamanho: 4GB\r\n\r\n- Interface: 128 bit\r\n\r\n- Tipo: GDDR5\r\n\r\n \r\n\r\nAPI 3D:\r\n\r\n- DirectX 12\r\n\r\n- OpenGL 4.5\r\n\r\n \r\n\r\nPortas:\r\n\r\n- 1 x HDMI (Max Resolution: 4096x2160 @60 Hz)\r\n\r\n- 1 x DisplayPort (Max Resolution: 7680x4320 @60 Hz)\r\n\r\n- 1 x Dual-link DVI-D\r\n\r\n \r\n\r\nGeral:\r\n\r\n- Resolução Máxima: 7680x4320\r\n\r\n- Requisitos do sistema: Alimentação mínima 300W\r\n\r\n- Fator de Forma: ATX\r\n\r\n- Mult-View: 3\r\n\r\n- Dimensões: 30 x 172 x 113 mm\r\n\r\n \r\n\r\nConteúdo da embalagem:\r\n\r\n- 01 Placa de Video VGA GigaByte \r\n\r\n- 01 Drive de instação\r\n\r\n- Guia do usuário\r\n\r\n', 250, 1500, 1700, 4, 0, 1, 0, 0, '5,4,3', 0, 0, 0, 0, 0),
(32, 26, 13, 'Placa de Vídeo Gigabyte Radeon RX 570 Armor', ' \r\n\r\nCaracterísticas:\r\n\r\n- Marca: Gigabyte\r\n\r\n- Modelo: GV-N105TD5-4GD \r\n\r\n \r\n\r\nEspecificações: \r\n\r\n \r\n\r\nInterface:\r\n\r\n- PCI-E 3.0 x 16\r\n\r\n \r\n\r\nChipset:\r\n\r\n- GPU: GeForce® GTX 1050 Ti\r\n\r\n- Base Clock: OC Mode: 1316MHz  / Gaming Mode: 1290MHz\r\n\r\n- Boost Clock: OC Mode: 1430MHz / Gaming Mode: 1392MHz\r\n\r\n \r\n\r\nMemória:\r\n\r\n- Clock efetivo: 7008 MHz\r\n\r\n- Tamanho: 4GB\r\n\r\n- Interface: 128 bit\r\n\r\n- Tipo: GDDR5\r\n\r\n \r\n\r\nAPI 3D:\r\n\r\n- DirectX 12\r\n\r\n- OpenGL 4.5\r\n\r\n \r\n\r\nPortas:\r\n\r\n- 1 x HDMI (Max Resolution: 4096x2160 @60 Hz)\r\n\r\n- 1 x DisplayPort (Max Resolution: 7680x4320 @60 Hz)\r\n\r\n- 1 x Dual-link DVI-D\r\n\r\n \r\n\r\nGeral:\r\n\r\n- Resolução Máxima: 7680x4320\r\n\r\n- Requisitos do sistema: Alimentação mínima 300W\r\n\r\n- Fator de Forma: ATX\r\n\r\n- Mult-View: 3\r\n\r\n- Dimensões: 30 x 172 x 113 mm\r\n\r\n \r\n\r\nConteúdo da embalagem:\r\n\r\n- 01 Placa de Video VGA GigaByte \r\n\r\n- 01 Drive de instação\r\n\r\n- Guia do usuário\r\n\r\n', 150, 664.9, 470.47, 5, 0, 0, 0, 1, '3,2,1', 0, 0, 0, 0, 0),
(33, 27, 14, 'Placa-Mãe Asus Prime B450M Gaming/BR', 'Características:\r\n- Marca: ASUS\r\n- Modelo: Prime B450M Gaming/BR\r\n\r\nEspecificações:\r\n\r\nProcessadores:\r\n- AMD Socket AM4 AMD Ryzen 2ª Geração/ Ryzen com Radeon Vega Graphics/Ryzen 1ª Geração / Athlon Radeon Vega Graphics\r\n\r\nChipset:\r\n- AMD B450\r\n\r\nMemória:\r\n- Memória 4 x DIMM, máximo de 64GB, DDR4 3466(O.C.)/3200(O.C.)/3000(O.C.)/2800(O.C.)/2666/2400/2133 MHz Un-buffered\r\n- Processadores AMD Ryzen 2ª Geração/ Ryzen com Radeon Vega Graphics/ Athlon™ com Radeon™ Vega Graphics/ Ryzen™ 1ª Geração\r\n- Arquitetura de memória: Dual Channel\r\n- Suporte a ECC Memory (modo ECC) varia de acordo com a CPU.\r\n\r\nGráfico:\r\n- Processador Gráfico Integrado\r\n- Múltiplas saídas de vídeo: portas HDMI/DVI-D/D-Sub (VGA)\r\n- Suporta DVI-D com resolução máxima de 1920 x 1200 @ 60 Hz\r\n- Suporta HDMI 2.0b com resolução máxima de 4096 x 2160 @ 60 Hz\r\n- Suporta D-sub com resolução máxima de 1920 x 1200 @ 60 Hz\r\n', 250, 440.9, 694, 4, 0, 1, 1, 0, '1,5,2', 0, 0, 0, 0, 0),
(34, 27, 13, 'Placa-Mãe Gigabyte GA-A320M-S2H', 'Características:\r\n- Marca: Gigabyte\r\n- Modelo: GA-A320M-S2H\r\n\r\nEspecificações:\r\n\r\nCPU:\r\n- Processador AMD Ryzen\r\n- Processador AMD 7ª Geração A / série Athlon\r\n(Consulte \"Lista de Suporte da CPU\" para obter mais informações.)\r\n\r\n\r\nChipset:\r\n- AMD A320\r\n\r\n\r\nMemória:\r\n- 2 x soquetes DIMM DDR4 que suportam até 32 GB de memória do sistema\r\n- Arquitetura de memória de canal duplo\r\n- Suporte para módulos de memória DDR4 3200 (OC) / 2933 (OC) / 2667 * / 2400/2133 MHz  * O suporte real pode variar de acordo com a CPU.\r\n- Suporte para módulos de memória ECC Un-buffered DIMM 1Rx8 / 2Rx8 (operar em modo não ECC)\r\n- Suporte para módulos de memória não DIMM 1Rx8 / 2Rx8 / 1Rx16 não-ECC\r\n- Suporte para módulos de memória de perfil de memória Extreme (XMP)\r\n(Consulte \"Lista de Suporte de Memória\" para obter mais informações.)\r\n\r\n\r\nGráficos a bordo:\r\n- 1 porta D-Sub, suportando uma resolução máxima de 1920x1200 @ 60 Hz\r\n- 1 porta DVI-D, suportando uma resolução máxima de 1920x1200 @ 60 Hz * A porta DVI-D não suporta conexão D-Sub por adaptador.\r\n- 1 porta HDMI, suportando uma resolução máxima de 4096x2160 @ 24 Hz * Suporte para a versão HDMI 1.4.\r\n- Memória compartilhada máxima de 2 GB * O suporte real pode variar de acordo com a CPU\r\n\r\n\r\nÁudio:\r\n- Realtek codec ALC887\r\n- Áudio de alta definição\r\n- 2/4 / 5.1 / 7.1-channel * Para configurar o áudio de 7.1 canais, você precisa usar um módulo de áudio do painel frontal HD e habilitar o recurso de áudio multicanal através do driver ', 150, 360, 424, 0, 0, 1, 0, 0, '3,5,4', 0, 0, 0, 0, 0),
(35, 27, 13, 'Placa-Mãe Gigabyte H310M M.2 2.0,', 'Características:\r\n- Marca: Gigabyte\r\n- Modelo: GA-A320M-S2H\r\n\r\nEspecificações:\r\n\r\nCPU:\r\n- Processador AMD Ryzen\r\n- Processador AMD 7ª Geração A / série Athlon\r\n(Consulte \"Lista de Suporte da CPU\" para obter mais informações.)\r\n\r\n\r\nChipset:\r\n- AMD A320\r\n\r\n\r\nMemória:\r\n- 2 x soquetes DIMM DDR4 que suportam até 32 GB de memória do sistema\r\n- Arquitetura de memória de canal duplo\r\n- Suporte para módulos de memória DDR4 3200 (OC) / 2933 (OC) / 2667 * / 2400/2133 MHz  * O suporte real pode variar de acordo com a CPU.\r\n- Suporte para módulos de memória ECC Un-buffered DIMM 1Rx8 / 2Rx8 (operar em modo não ECC)\r\n- Suporte para módulos de memória não DIMM 1Rx8 / 2Rx8 / 1Rx16 não-ECC\r\n- Suporte para módulos de memória de perfil de memória Extreme (XMP)\r\n(Consulte \"Lista de Suporte de Memória\" para obter mais informações.)\r\n\r\n\r\nGráficos a bordo:\r\n- 1 porta D-Sub, suportando uma resolução máxima de 1920x1200 @ 60 Hz\r\n- 1 porta DVI-D, suportando uma resolução máxima de 1920x1200 @ 60 Hz * A porta DVI-D não suporta conexão D-Sub por adaptador.\r\n- 1 porta HDMI, suportando uma resolução máxima de 4096x2160 @ 24 Hz * Suporte para a versão HDMI 1.4.\r\n- Memória compartilhada máxima de 2 GB * O suporte real pode variar de acordo com a CPU\r\n\r\n\r\nÁudio:\r\n- Realtek codec ALC887\r\n- Áudio de alta definição\r\n- 2/4 / 5.1 / 7.1-channel * Para configurar o áudio de 7.1 canais, você precisa usar um módulo de áudio do painel frontal HD e habilitar o recurso de áudio multicanal através do driver ', 150, 423.41, 470, 0, 0, 0, 1, 0, '3,1,2', 0, 0, 0, 0, 0),
(36, 27, 7, 'Placa-Mãe Asus TUF H310M-Plus Gaming/BR, Intel LGA 1151, mATX, DDR4', 'Especificações:\r\n\r\n \r\n\r\nProcessador:\r\n\r\n- Intel Socket 1151 para 9ª e 8ª geração de processadores Core i7/Core i5/Core i3/Pentium/Celeron\r\n\r\n- Suporta processadores Intel de 14 nm\r\n\r\n- Suporta a tecnologia Intel Turbo Boost 2.0\r\n\r\n* Suporta a tecnologia Intel Turbo Boost 2.0 dependendo do tipo do processador.\r\n\r\n \r\n\r\nChipset:\r\n\r\n- Intel H310\r\n\r\n \r\n\r\nMemória:\r\n\r\n- 2x DIMM, máximo de 32GB, DDR4 2666/2400/2133 MHz Non-ECC, Un-buffered\r\n\r\n* Suporte Hyper DIMM depende das características físicas de cada CPU.\r\n\r\n* Consulte www.asus.com.br ou o manual do usuário para a lista de vendedores qualificados de memória.\r\n\r\n** DDR4 2666MHz e módulos de memória mais altos serão executados no máximo. 2666MHz em processadores Intel® 8th Gen. 6-core ou superior; DDR4 2400MHz e módulos de memória mais altos serão executados no máximo. 2400MHz em processadores Intel® 8ª Geração 4-core.\r\n\r\n \r\n\r\nGráfico:\r\n\r\n- Processador Gráfico Integrado\r\n\r\n- Múltiplas saídas de vídeo: portas HDMI/D-Sub (VGA) \r\n\r\n- Suporta VGA com resolução máxima de 1920 x 1200 @ 60 Hz\r\n\r\n- Suporta HDMI com resolução máxima de 4096 x 2160 @ 24 Hz / 2560 x 1600 @ 60 Hz\r\n\r\n- Máximo de memória compartilhada 1024 MB (Exclusivo para iGPU)\r\n\r\n- Suporta Intel InTru 3D, Quick Sync Video, Clear Video HD Technology, Insider\r\n\r\n \r\n\r\nSlots de expansão:\r\n\r\n\r\n\r\nIntel H310 Chipset:\r\n\r\n- 1 x PCIe 3.0/2.0 x16 (x16) \r\n\r\n- 2 x PCIe 2.0 x1', 150, 588.12, 465.76, 3, 0, 1, 0, 1, '3,1,2', 0, 0, 0, 0, 0),
(37, 27, 13, 'Placa-Mãe Gigabyte GA-AB350M-DS3H V2, AMD AM4', 'CPU:\r\n\r\n- Soquete AM4: Suporte para a segunda geração Ryzen / Ryzen com Radeon Vega Graphics / Athlon com processadores Radeon Vega Graphics / Ryzen de 1ª geração / 7ª geração da série A / Athlon X4\r\n\r\n(Por favor, consulte \"Lista de Suporte da CPU\" para mais informações.)\r\n\r\n \r\n\r\nChipset:\r\n\r\n- AMD B350\r\n\r\n \r\n\r\nMemória:\r\n\r\n- 4x Soquetes DDR4 DIMM suportando até 64 GB de memória do sistema\r\n\r\n- Arquitetura de memória dual channel\r\n\r\n- Suporte para módulos de memória DDR4 3200 (OC) / 2933 (OC) / 2667 * / 2400 / 2133 MHz \r\n\r\n* O suporte real pode variar de acordo com a CPU.\r\n\r\n- Suporte para módulos de memória DIMM 1Rx8 / 2Rx8 sem buffer ECC (operam em modo não-ECC)\r\n\r\n- Suporte para módulos de memória DIMM não-bufferizados 1Rx8 / 2Rx8 / 1Rx16 não-ECC\r\n\r\n- Suporte para módulos de memória Extreme Memory Profile (XMP)\r\n\r\n(Por favor, consulte \"Lista de Suporte de Memória\" para mais informações.)\r\n\r\n \r\n\r\nGráficos Onboard:\r\n\r\n- Processador gráfico integrado: 1 porta DVI-D, suportando uma resolução máxima de 1920x1200 @ 60 Hz\r\n\r\n* A porta DVI-D não suporta conexão D-Sub por adaptador.\r\n\r\n- 1x Porta HDMI, suportando uma resolução máxima de 4096x2160 @ 24 Hz \r\n\r\n* Suporte para a versão HDMI 1.4.\r\n\r\n- Memória compartilhada máxima de 2 GB \r\n\r\n* O suporte real pode variar de acordo com a CPU.\r\n\r\n \r\n\r\nÁudio:\r\n\r\n- Codec Realtek ALC887\r\n\r\n- Áudio de alta definição: 2 / 4 / 5.1 / 7.1-channel \r\n\r\n* Para configurar o áudio de 7.1 canais, é necessário usar um módulo de áudio do painel frontal de HD e ativar o recurso de áudio multicanal através do driver de áudio.\r\n\r\n- Suporte para saída S / PDIF\r\n\r\n \r\n\r\nLAN:\r\n\r\n- Chip LAN Realtek GbE (10/100/1000 Mbit)\r\n\r\n ', 150, 458.71, 399.88, 5, 1, 1, 0, 0, '3,1,2', 0, 0, 0, 0, 0),
(38, 27, 7, 'Placa-Mãe Asus TUF X299 MARK 1, Intel LGA ', 'Características: \r\n\r\n- Marca: ASUS\r\n\r\n- Modelo: TUF X299 MARK 1\r\n\r\n \r\n\r\nEspecificações: \r\n\r\n \r\n\r\nProcessador:\r\n\r\n- Intel Socket 2066 para processadores Core X-Series \r\n\r\n*Intel Turbo Boost Max Technology 3.0 o suporte depende dos tipos de CPU.\r\n\r\n \r\n\r\nChipset:\r\n\r\n- Intel X299\r\n\r\n \r\n\r\nMemória:\r\n\r\n- 8x DIMM, máximo de 128GB, DDR4 4000 (O.C.) / 3600(O.C.) / 2666 / 2400 / 2133 MHz Non-ECC, Un-buffered\r\n\r\n- Intel Core X-series Processors (6-core above)\r\n\r\n* Suporte Hyper DIMM depende das características físicas de cada CPU.\r\n\r\n- Intel Core X-series Processors (4-core)\r\n\r\n- 4x DIMM, Max. 64GB, DDR4 4000(O.C.)/3600(O.C.)/2666/2400/2133 MHz Non-ECC, Un-buffered Memory\r\n\r\n \r\n\r\nSuporte Multi-GPU:\r\n\r\n- Suporta NVIDIA Quad-GPU SLI\r\n\r\n- Suporta NVIDIA 3-Way SLI\r\n\r\n- Suporta NVIDIA 2-Way SLI Tecnologia\r\n\r\n- Suporta Tecnologia AMD Quad-GPU CrossFireX\r\n\r\n- Suporta AMD 3-Way Tecnologia CrossFireX\r\n\r\n \r\n\r\nSlots de expansão:\r\n\r\n \r\n\r\n44-Lane CPU:\r\n\r\n- 3x PCIe 3.0 / 2.0 x16 (x16, x16 / x16, x16 / x16 / x8)\r\n\r\n- 2x PCIe 3,0 x4 (max no modo 4x)*\r\n\r\n*PCIEX4_1 máx. no modo x1, PCIEX4_2 máx. em modo x4 \r\n\r\n \r\n\r\n28-Lane CPU:\r\n\r\n- 3x PCIe 3.0 / 2.0 x16 (x16, x16 / x8 x16 / x8 / x4)\r\n\r\n- 2x 3,0 PCIe x4 (max no modo 4x)*\r\n\r\n*PCIEX4_1 máx. no modo x1, PCIEX4_2 máx. em modo x4 \r\n\r\n \r\n\r\n16-Lane CPU:\r\n\r\n- 3x PCIe 3.0 / 2.0 x16 (x16 x8 / x8 x8 / x8 / x1)\r\n\r\n- 2x 3,0 PCIe x4 (max no modo 4x)*\r\n\r\n*PCIEX4_1 máx. no modo x1, PCIEX4_2 máx. em modo x4 \r\n\r\n \r\n\r\nArmazenamento:\r\n\r\n\r\n\r\nIntel X299 Chipset:\r\n\r\n- 1x M.2 x4 soquete 3, com a chave H, suporte tipo 2242/2260/2280 dispositivos de armazenamento (SATA & PCIE 3,0 x 4 Modo) \r\n\r\n- 1x M.2 x4 soquete 3, com a chave H, tipo 2242/2260/2280/22110 dispositivos de armazenamento de apoio (PCIE 3,0 x 4 modo) \r\n\r\n- 8x Porta (s) de SATA 6 Gb/s\r\n\r\n- Suporta RAID 0, 1, 5, 10 \r\n\r\n- Suporta Tecnologia Smart Response Intel, Intel Rapid Start Technology*\r\n\r\n- Intel Memória Pronto Optane\r\n\r\n*SATA6G_4 / 5/6/7 largura de banda share com PCIEX4_2', 200, 2.119, 2.494, 3, 0, 1, 0, 0, '3,1,2', 0, 0, 0, 0, 0),
(39, 28, 9, 'SSD WD Black SN750 Heatsink,', NULL, 150, 2494, 3225.44, 0, 0, 0, 0, 0, '3,1,2', 0, 0, 0, 0, 0),
(40, 28, 9, 'SSD A400, 240GB, SATA, Leitura 500MB/s,', NULL, 200, 188.12, 250, 0, 5, 1, 0, 0, '3,1,2', 0, 0, 0, 0, 0),
(41, 28, 9, 'SSD NS100, 128GB, SATA, Leitura 520MB/s ', '\r\nCaracterísticas:\r\n\r\n- Marca: Lexar\r\n\r\n- Modelo: LNS100-128RBNA\r\n\r\n \r\n\r\nEspecificações:\r\n\r\n- Capacidade: 128GB\r\n\r\n- Cor: Cinza\r\n\r\n- Interface: 2.5\" SATA III (6Gb/s)\r\n\r\n- Leitura Sequencial: 520 MB/s\r\n\r\n- TBW: 64 TB\r\n\r\n- DWPD: 0.46\r\n\r\n- Dimensões: 100.2 x 69.85 x 7 mm\r\n\r\n \r\n\r\nInformações Adicionais:\r\n\r\n- Temperatura de operação: 0º C a 70º C\r\n\r\n- Temperatura de armazenamento: -40º C a 85º C\r\n\r\n- Resistente a Choques: 1500G, duração 0.5ms, meia onda senoidal\r\n\r\n- Resistente à vibração: 10 ~ 2000Hz, 1,5mm, 20G, 1 out / min, 30min / eixo (X, Y, Z)\r\n\r\n \r\n\r\nConteúdo da Embalagem:\r\n\r\n- SSD NS100\r\n\r\n\r\nGarantia\r\n1 ano de garantia\r\n(9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)\r\n\r\n\r\nPeso\r\n70 gramas (bruto com embalagem', 200, 132.82, 255, 5, 0, 1, 0, 0, '3,1,2', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products_images`
--

INSERT INTO `products_images` (`id`, `id_product`, `url`) VALUES
(1, 1, '1.jpg'),
(2, 2, '2.jpg'),
(3, 3, '3.jpg'),
(4, 4, '4.jpg'),
(5, 5, '1.jpg'),
(6, 6, '3.jpg'),
(7, 7, '7.jpg'),
(8, 8, '7.jpg'),
(9, 2, '3.jpg'),
(10, 2, '4.jpg'),
(11, 2, '7.jpg'),
(12, 9, '9.png'),
(13, 10, '10.png'),
(14, 11, '11.png'),
(15, 12, '12.png'),
(16, 12, '12.png'),
(17, 13, '13.png'),
(18, 14, '14.png'),
(19, 15, '15.png'),
(20, 16, '16.png'),
(21, 17, '17.PNG'),
(22, 18, '18.png'),
(23, 19, '19.png'),
(24, 20, '20.png'),
(25, 21, '21.png'),
(26, 22, '22.png'),
(27, 23, '23.png'),
(28, 24, '24.png'),
(29, 25, '25.png'),
(30, 26, '26.png'),
(31, 27, '27.png'),
(32, 28, '28.png'),
(35, 29, '29.png'),
(36, 30, '30.png'),
(37, 31, '31.png'),
(38, 32, '32.png'),
(39, 33, '33.png'),
(40, 34, '34.png'),
(41, 35, '35.png'),
(42, 36, '36.png'),
(43, 37, '37.png'),
(44, 38, '38.png'),
(45, 39, '39.png'),
(46, 40, '40.png'),
(47, 41, '41.png'),
(48, 29, '29.png'),
(49, 30, '30.png'),
(50, 31, '31.png'),
(51, 32, '32.png'),
(52, 33, '33.png'),
(53, 34, '34.png'),
(54, 35, '35.png'),
(55, 36, '36.png'),
(56, 37, '37.png'),
(57, 38, '38.png'),
(58, 39, '39.png'),
(59, 40, '40.png'),
(60, 41, '41.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_options`
--

CREATE TABLE `products_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `p_value` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products_options`
--

INSERT INTO `products_options` (`id`, `id_product`, `id_option`, `p_value`) VALUES
(1, 1, 1, 'Azul'),
(2, 1, 2, '23cm'),
(3, 1, 4, '21'),
(4, 2, 1, 'Azul'),
(5, 2, 2, '19cm'),
(6, 3, 1, 'Vermelho'),
(7, 3, 2, '19cm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coupon` int(11) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchases_products`
--

CREATE TABLE `purchases_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchase_transactions`
--

CREATE TABLE `purchase_transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rates`
--

CREATE TABLE `rates` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_rated` datetime NOT NULL,
  `points` int(11) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rates`
--

INSERT INTO `rates` (`id`, `id_product`, `id_user`, `date_rated`, `points`, `comment`) VALUES
(1, 2, 1, '2017-01-01 00:00:00', 2, 'Produto muito legal.'),
(2, 2, 1, '2017-01-02 00:00:00', 2, 'Produto meio ruim.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `name` varchar(100) DEFAULT NULL,
  `administra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `administra`) VALUES
(1, 'suporte@b7web.com.br', '698dc19d489c4e4db73e28a713eab07b', 'Bonieky Lacerda', 0),
(2, 'pelego@gmail.com', 'yuri2002', NULL, 1),
(3, 'pelego@gmail.com', '12345678', NULL, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products_options`
--
ALTER TABLE `products_options`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `purchases_products`
--
ALTER TABLE `purchases_products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `products_options`
--
ALTER TABLE `products_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `purchases_products`
--
ALTER TABLE `purchases_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
