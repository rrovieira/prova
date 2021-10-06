-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 12:54
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cnpj` varchar(18) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cnpj`, `nome`, `endereco`, `cidade`, `estado`) VALUES
('', '', '', '', ''),
('12.345.000.0002-01', 'Rv Agencia Digital', 'rua a', 'montes claros', 'MG'),
('12.345.000.0002-02', 'Rv Agencia Digital', 'rua a', 'montes claros', 'MG'),
('12.345.000.0002-03', 'Rv Agencia Digital', 'rua a', 'montes claros', 'MG'),
('12.345.000.0002-04', 'Rv Agencia Digital', 'rua a', 'montes claros', 'MG'),
('12.345.000/0002-04', 'Rv Agencia Digital2', 'rua a', 'montes claros', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `cnpj_cpf` varchar(18) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `data_hora_cad` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `telefone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`cnpj_cpf`, `empresa`, `nome`, `tipo`, `data_hora_cad`, `telefone`) VALUES
('12.333/0001-72', 'RV Agencia digital', 'Rv Agencia Digital', 'PJ', '2021-09-26 22:07:19.000000', '(38) 98829-273'),
('733.568.406-49', 'RV Agencia digital', 'Rv Agencia Digital', 'PF', '2021-09-23 22:06:57.000000', '(38) 98829-273');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `nome` varchar(45) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `qtde` varchar(3) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `cnpj` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`cnpj_cpf`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD UNIQUE KEY `cnpj` (`cnpj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
