-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/12/2023 às 22:05
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojaroupa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `email`, `senha`, `nome`, `sobrenome`, `foto`, `token`) VALUES
(4, 'gabrieladm@gmail.com', '1234', 'Gabriel ', 'Silva Sousa', '322dbfb53ced542ca76c50cf462de50c.jpg', '7648a12542f8dcd749de1e9cc7a6077d'),
(5, 'brunoadm@gmail.com', '1234', 'Bruno ', 'Geanini', '', '705161ce1bd6ef1aadd2691d20085ce1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbavaliacao`
--

CREATE TABLE `tbavaliacao` (
  `idAvaliacao` int(11) NOT NULL,
  `estrela` int(11) NOT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbavaliacao`
--

INSERT INTO `tbavaliacao` (`idAvaliacao`, `estrela`, `comentario`, `data`, `idUsuario`) VALUES
(5, 1, 'eu sou fuleiro', '2023-11-27 20:12:32', 1),
(7, 2, 'Exclui a do palmeiras', '2023-11-27 20:12:32', 3),
(11, 5, 'muito bom', '2023-11-27 20:12:32', 8),
(12, 1, 'A camisa do Corinthians é a camisa mais bonita do Mundo', '2023-11-27 20:12:32', 3),
(16, 5, 'belo site', '2023-11-27 20:12:32', 9),
(17, 3, 'sitezinho mais ou menos', '2023-11-27 20:13:04', 9),
(18, 1, 'Quem nasceu para ser cu, nunca vai ser pica', '2023-12-07 03:56:51', 11),
(19, 5, 'Será que é bom', '2023-12-09 04:32:22', 14),
(20, 3, 'Loja boa', '2023-12-09 20:24:45', 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclube`
--

CREATE TABLE `tbclube` (
  `idClube` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `apelido` varchar(30) DEFAULT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `idLiga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbclube`
--

INSERT INTO `tbclube` (`idClube`, `nome`, `apelido`, `foto`, `idLiga`) VALUES
(1, 'Corinthians', 'Timão', '4bc9d1ce75bf0c14b32b62bc84a15484.jpg', 1),
(2, 'Athletico Paranaense', 'Furacão', '6fb58fe878cbb7abb79c68d32e7bbebc.jpg', 1),
(3, 'Atlético Mineiro', 'Galo', 'd18e463108ab586fa95e9994b3c5d07f.jpg', 1),
(4, 'Botafogo', 'Fogão', 'aa4ebd33f7443ba72ce640058f918880.jpg', 1),
(5, 'Coritiba', 'Coxa', 'fc1017ff53fce56aeb7dc75bed6a3121.jpg', 1),
(6, 'Criciuma', 'Tigre', '63c63032d7d9fbd669087f498db0da57.jpg', 1),
(7, 'Cruzeiro', 'Cabuloso', 'e1f363dc5c8d8894ef3ad02e6b185fb0.jpg', 1),
(8, 'Cuiabá', 'Dourado', 'f25ca6a5519cbfda3b7faeb665d18da8.jpg', 1),
(9, 'Flamengo', 'Cheirinho', '31634639eaad694b873be682ab306702.jpg', 1),
(10, 'Fluminense', 'Time de Guerreiros', '79d7286cfa656a68411bb9b56ea9d708.jpg', 1),
(11, 'Fortaleza', 'Leão', '5dc472364e0652746919a15722fdcb3f.jpg', 1),
(12, 'Goiás', 'Esmeraldino', 'fda260f65960fad809a11fbac0454785.jpg', 1),
(13, 'Grêmio', 'Imortal', '87065b2c23555eaacc993dcf49500f5a.jpg', 1),
(14, 'Internacional', 'Colorado', 'ca7675881c25458a47858c7e9f28212f.jpg', 1),
(15, 'Palmeiras', 'Porco', '0025897181274fd28e469552b32f656f.jpg', 1),
(16, 'Red Bull Bragantino', 'Massa Bruta', '8160b80e2833c158b340407dd1a2f9aa.jpg', 1),
(17, 'Santos', 'Peixe', 'dfd9dae377274a46660976c425a1dc43.jpg', 4),
(18, 'São Paulo', 'Trikas', '275e96f8a9d92524e6d22821b0d5d00b.jpg', 1),
(19, 'Vasco da Gama', 'Gigante da Colina', 'b57893445fe8dbf7c684b397cce2c2e2.jpg', 1),
(20, 'Vitória', 'Leão da Barra', 'caeaccdd0cedad462c21285ffd658e33.jpg', 1),
(21, 'Barcelona', 'Barça', '576a212430535fe09c5b03bd8f4ccbf6.jpg', 2),
(22, 'Real Madrid', 'Real', 'a71abdb592ea5fa27f5449bcb65ea08e.jpg', 2),
(23, 'Tottenham Hotspur', 'Spurs', 'c1eec5ddf8748b910c0fc947143b7308.jpg', 3),
(24, 'Atlético de Madrid', 'Colchonero', 'e1ea2b5a0906dd12baa8653a0a9c1c02.jpg', 2),
(25, 'Manchester City', 'Citizens', '7ab57fc17bd6324e80a0dbb5c662aba0.jpg', 3),
(26, 'Chelsea', 'Blues', 'f09d8bebc26269e1ef8608f900c6ea32.jpg', 3),
(27, 'Liverpool', 'The Reds', 'ab138ccdfea93142bfed6aed181969c1.jpg', 3),
(29, 'Manchester United', 'The Red Devils', 'a0a9c30e6624c323748d3669b0e9add4.jpg', 3),
(30, 'Arsenal', 'The Gunners', '22264c26b15ffbfc88e4d598b02c8e1e.jpg', 3),
(31, 'Al Nassr', 'Time do Cristiano Ronaldo', '53b7c81e520f1f203ce80a060aeb793c.jpg', 6),
(32, 'Al-Hilal', 'Time do Neymar', '8986139e7b2dcbeac87e226692e04bf2.jpg', 6),
(34, 'Inter Miami', 'Time do Messi', '9a82c8fe1eb6567165de577eedfdadae.jpg', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfornecedor`
--

CREATE TABLE `tbfornecedor` (
  `idFornecedor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cnpj` char(14) NOT NULL,
  `numero` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbfornecedor`
--

INSERT INTO `tbfornecedor` (`idFornecedor`, `nome`, `cnpj`, `numero`, `email`, `foto`) VALUES
(1, 'DJV Sports', '22222222222222', '22222222222', 'maneiro@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbliga`
--

CREATE TABLE `tbliga` (
  `idLiga` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `divisao` char(1) DEFAULT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `idPais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbliga`
--

INSERT INTO `tbliga` (`idLiga`, `nome`, `divisao`, `foto`, `idPais`) VALUES
(1, 'Brasileirão Série A', '1', '639f0de0bec60939390f20a665e06a1b.jpg', 1),
(2, 'La Liga', '1', '02b1733da890b402216aa43a5d571372.jpg', 7),
(3, 'Premier League', '1', 'fc3766297a3751f9e55f3d62603fb1d5.jpg', 10),
(4, 'Brasileirão Série B', '2', 'fddcd3059fc60a47fa06f0d7ff528e0c.jpg', 1),
(5, 'MLS', '1', '84fe7157f553b90dee5f9c60a2d2380e.jpg', 7),
(6, 'Saudi Pro League', '1', 'b355d17756fcd0d1999e999c2a34955e.jpg', 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmarca`
--

CREATE TABLE `tbmarca` (
  `idMarca` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `foto` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbmarca`
--

INSERT INTO `tbmarca` (`idMarca`, `nome`, `foto`) VALUES
(2, 'Nike', '21eb08ee71ea9c2127ea56aa872d5939.jpg'),
(3, 'Adidas', ''),
(4, 'Puma', ''),
(5, 'Volt', ''),
(6, 'Umbro', ''),
(7, '19Treze', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpais`
--

CREATE TABLE `tbpais` (
  `idPais` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `foto` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbpais`
--

INSERT INTO `tbpais` (`idPais`, `nome`, `foto`) VALUES
(1, 'Brasil', 'ad20bc62942fb4de1a770d4fa284d41a.jpg'),
(2, 'Argentina', 'b12f0302d2590daf2548dfae077369e6.jpg'),
(3, 'Alemanha', 'd28457e9a0af32e7487b2824de9c2065.jpg'),
(4, 'Itália', 'ab8e9f15cc6b6c25ed408852eeaaf32b.jpg'),
(5, 'França', '7d49f8ead3727887f3da43cf76435878.jpg'),
(6, 'Uruguai', 'db9db298433be1b056178bcd7b00d2e4.jpg'),
(7, 'Espanha', 'fdf10d261d27ca3f68f00fdd8f049a59.jpg'),
(8, 'Portugal', '0097b17d743ee79fbbe0d3b4e54db078.jpg'),
(9, 'Holanda', 'b8045786026492220c527e9ebdeb654b.jpg'),
(10, 'Inglaterra', '06445a53b42b870f268eb98d1e75115c.jpg'),
(11, 'Suécia', 'e0215b5598b7ea4c90f403a67bbc454d.jpg'),
(12, 'Rússia', 'bc895f8bf8b415086445a3853ed1642a.jpg'),
(13, 'Croácia', '8a2f3a4d145b27a4b6964891b09b2267.jpg'),
(14, 'México', '0ba3b866f96dd7248d3fc39909ea6c21.jpg'),
(15, 'Estados Unidos', '18ae502ec12edf6937061d9cb1bae8ea.jpg'),
(16, 'Colômbia', 'c8e6931cfe6ea7cf2843e1e00c2834e8.jpg'),
(17, 'Chile', '841863d76a5103ff11fe8e144b80b8f4.jpg'),
(18, 'Paraguai', 'ae65a194e75e43033ad24dd8605f055c.jpg'),
(19, 'Japão', '11b75e5d40b117416f21b43759468923.jpg'),
(20, 'Arabia Saudita', '258f132e85625e3deb7aa5392996c639.jpg'),
(21, 'Internacional', '53f0862ab9cc32d903aaf237656fd987.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `foto` varchar(80) NOT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `idTipoProduto` int(11) DEFAULT NULL,
  `idMarca` int(11) DEFAULT NULL,
  `idTamanhoProduto` int(11) DEFAULT NULL,
  `idFornecedor` int(11) DEFAULT NULL,
  `idClube` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nome`, `foto`, `preco`, `descricao`, `idTipoProduto`, `idMarca`, `idTamanhoProduto`, `idFornecedor`, `idClube`) VALUES
(1, 'Camisa Corinthians | 2023 Torcedor Pro Masculina', '1e516b78ea5e7bb9d3c325e9dd4a1a91.jpg', 145.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 1, 2, 1, 1, 1),
(2, 'Camisa SC Internacional | 23/24 Torcedor Pro Masculina', 'd29459730931e11ef3b77e3faf8c68da.jpg', 135.00, 'Forma padrão Gola V canelada Piquet 100% poliéster reciclado AEROREADY Punhos canelados Barra alongada na parte de trás Escudo do Sport Club Internacional costurado \"Vivo em Ti\" na parte de trás da go', 2, 3, 3, 1, 14),
(3, 'Camisa Flamengo | 2023 Torcedor Pro Masculina', 'dc132978e5d916bc9b6f334d841da099.jpg', 179.00, 'Ref: HS5184 Modelagem justa Gola careca canelada Piquet 100% poliéster reciclado AEROREADY Apliques em mesh nas laterais Escudo do CR Flamengo bordado', 2, 2, 3, 1, 9),
(4, 'Camisa Cruzeiro | 2023 Torcedor Pro Masculina', '87bb18644fabcb16fb24cabbd18c9f11.jpg', 175.00, '100% Poliéster reciclado', 2, 3, 3, 1, 7),
(5, 'Camisa São Paulo | 2023 Torcedor Pro Masculina', '4545aa861643720434835b23e9a64ba9.jpg', 152.00, '100% Poliéster reciclado', 1, 3, 1, 1, 18),
(6, 'Camisa Palmeiras | 2023 Torcedor Pro Masculina', '37f89a9964775329a8be6055a5fc9687.jpg', 172.00, '100% políester', 2, 4, 3, 1, 15),
(7, 'Camisa 2 Corinthians | 2023 Torcedor Pro Masculina', '40c061c144ce5c4f3f0a8120d3e4bfbe.jpg', 159.00, 'camisa away do Corinthians 100% poliester', 1, 2, 1, 1, 1),
(8, 'Camisa EC Vitória | 2023 Torcedor Pro Masculina', '9ada31d36c94051ee4f8dda71ccbe129.jpg', 134.00, 'Ref: HS5184 Modelagem justa Gola careca canelada Piquet 100% poliéster reciclado AEROREADY Apliques em mesh nas laterais Escudo do CR Flamengo bordado', 2, 6, 3, 1, 20),
(9, 'Camisa Juventude | 2023 Torcedor Pro Masculina', '73ac42ace31ef5a73873144f036712f9.jpg', 134.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 2, 7, 3, 1, 6),
(10, 'Camisa Criciuma | 2023 Torcedor Pro Masculina', '65bb4fa5e085899207e66f40bcc38bd4.jpg', 134.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 2, 6, 3, 1, 6),
(11, 'Camisa Cuiabá | 2023 Torcedor Pro Masculina', 'd034cb656751c8fc4e19c74aa2149a44.jpg', 134.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 2, 5, 3, 1, 8),
(12, 'Camisa do São Paulo', 'cfbac71823ea06bf51cf424c2280889b.jpg', 125.00, 'Camisa do São Paulo clube paulista', 1, 2, 1, 1, 18),
(13, 'Camisa do Al Nassr', '06ffd502f12cbbfd556c23fa4298ce8d.jpg', 179.00, 'Camisa do Al Nassr', 1, 7, 1, 1, 31),
(14, 'Camisa do Al Hilal', '495692b0d27c7c98d7a9c99ad71ad3d2.jpg', 200.00, 'Camisa do Neymar', 1, 4, 1, 1, 32),
(15, 'Camisa Inter Miami | 2023 Torcedor Pro Masculina', 'd5939d50b380714e2cc71231c8c7af3f.jpg', 165.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 1, 3, 1, 1, 34),
(16, 'Camisa do Barcelona II 23 Nike Masculina Torcedor', '5aee25deecd476c955187eca5dad1c3b.jpg', 200.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 1, 2, 1, 1, 21),
(17, 'Real Madrid 2023/24 - Home Torcedor', '8df0a0f4fa529f73a82c45cdeee39b90.jpg', 200.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 1, 3, 1, 1, 22),
(18, 'Camisa 1 Manchester United 23/24 Adidas', '5105d3f85e04e94d336a44579ce10873.jpg', 180.00, 'Ajuste padrão para sensação relaxada e fácil. 100% poliéster Lavável à máquina   100% POLIÉSTER', 1, 3, 1, 1, 29);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtamanhoproduto`
--

CREATE TABLE `tbtamanhoproduto` (
  `idTamanhoProduto` int(11) NOT NULL,
  `tamanho` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbtamanhoproduto`
--

INSERT INTO `tbtamanhoproduto` (`idTamanhoProduto`, `tamanho`) VALUES
(1, 'M'),
(2, 'PP'),
(3, 'P'),
(4, 'G'),
(5, 'GG');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtipoproduto`
--

CREATE TABLE `tbtipoproduto` (
  `idTipoProduto` int(11) NOT NULL,
  `tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbtipoproduto`
--

INSERT INTO `tbtipoproduto` (`idTipoProduto`, `tipo`) VALUES
(1, 'Camisa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` char(14) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nome`, `sobrenome`, `dataNascimento`, `cpf`, `email`, `senha`, `foto`, `token`) VALUES
(1, 'Mateus', 'Pato', '2000-05-29', '111.111.111', 'mateus@mateus', '123434', '', '75e3cf267c8309a8dd920105b99ba638'),
(2, 'Gabriel', 'Sousa', '2004-05-20', '758.473.465-90', 'gabriel@gmail.com', '1234', '2', 'eda6d98fbb049d8508285691000d6e23'),
(3, 'Leila', 'Pereira', '2004-05-20', '845.588.557', 'leila@leila', '1234', '', '8540b3d88314482422b98f0b0c1aaeec'),
(8, 'Bruno', 'Geanini', '2202-09-28', '978.796.686-75', 'brunin@gmail.com', '654446', '63f18c7c6d4d81a54d8359c7a489b747.jpg', '52408236c8b75c9692d827eece9f0086'),
(9, 'pedro', 'henrique', '2023-11-13', '000.000.000-00', 'pedro@gmail.com', '123', '9ff0106b5f6749ff6de6bb0f027903ec.jpg', '8bde650252c3e59ca2d89881a657df65'),
(10, 'MAtteus saco', 'grosso', '2006-05-29', '123.456.789-98', 'mateus12@gmail.com', '123', '', 'bc9e11845a90d2f85e0d36cafa1a9c0a'),
(11, 'Bruno', 'Geanini', '2004-05-25', '574.489.768-26', 'brunoCorint@gmail.com', '123456', '6954f7a9ff6b931a0565661616008c0c.jpg', '022fa42bb7cc5960cebfa87775f22d54'),
(13, 'Bruno ', 'Geanini dos Reis', '2004-05-25', '574.489.768-22', 'Bruno@gmail.com', '123456', '13', 'e5eb2480a0614bbcf8eb4f27ae178374'),
(14, 'Bruno', 'Geanini ', '2004-05-25', '222.111.333-12', 'Bruno1@gmail.com', '1234', '14', '914b3f5efb6b671b0d2ecf974cdd462a');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD PRIMARY KEY (`idAvaliacao`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbclube`
--
ALTER TABLE `tbclube`
  ADD PRIMARY KEY (`idClube`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `idLiga` (`idLiga`);

--
-- Índices de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  ADD PRIMARY KEY (`idFornecedor`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tbliga`
--
ALTER TABLE `tbliga`
  ADD PRIMARY KEY (`idLiga`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `idPais` (`idPais`);

--
-- Índices de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices de tabela `tbpais`
--
ALTER TABLE `tbpais`
  ADD PRIMARY KEY (`idPais`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idTipoProduto` (`idTipoProduto`),
  ADD KEY `idMarca` (`idMarca`),
  ADD KEY `idTamanhoProduto` (`idTamanhoProduto`),
  ADD KEY `idFornecedor` (`idFornecedor`),
  ADD KEY `idClube` (`idClube`);

--
-- Índices de tabela `tbtamanhoproduto`
--
ALTER TABLE `tbtamanhoproduto`
  ADD PRIMARY KEY (`idTamanhoProduto`);

--
-- Índices de tabela `tbtipoproduto`
--
ALTER TABLE `tbtipoproduto`
  ADD PRIMARY KEY (`idTipoProduto`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  MODIFY `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbclube`
--
ALTER TABLE `tbclube`
  MODIFY `idClube` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  MODIFY `idFornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbliga`
--
ALTER TABLE `tbliga`
  MODIFY `idLiga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbmarca`
--
ALTER TABLE `tbmarca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbpais`
--
ALTER TABLE `tbpais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbtamanhoproduto`
--
ALTER TABLE `tbtamanhoproduto`
  MODIFY `idTamanhoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbtipoproduto`
--
ALTER TABLE `tbtipoproduto`
  MODIFY `idTipoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD CONSTRAINT `tbavaliacao_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `tbclube`
--
ALTER TABLE `tbclube`
  ADD CONSTRAINT `tbclube_ibfk_1` FOREIGN KEY (`idLiga`) REFERENCES `tbliga` (`idLiga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `tbliga`
--
ALTER TABLE `tbliga`
  ADD CONSTRAINT `tbliga_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `tbpais` (`idPais`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
