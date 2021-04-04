-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2020 às 23:51
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `geleira_c`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `usuario` text COLLATE utf8_unicode_ci NOT NULL,
  `senha` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `nome`, `cpf`, `telefone`, `dataNascimento`, `usuario`, `senha`) VALUES
(10, 'Tatiane', '100200900', '321654987', '1989-10-10', 'tatitati', '12345677'),
(50, 'Carlos Eduardo', '100200900', '321654987', '1989-10-10', 'juliocer', '12345678'),
(52, 'Corey Taylor', '12365489', '1213141516', '1980-10-10', 'coreytay', 'coreytay'),
(53, 'Layne Staley', '502050', '23231545', '1990-06-06', 'laynesta', 'laynesta'),
(54, 'Carlos Eduardo Souza', '12365489', '987654321', '2000-10-10', 'cadu1234', 'cadu1234'),
(55, 'Camila Paiva', '0000000000', '987654321', '1993-10-10', 'camilapa', 'camilpa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `modelo`, `marca`, `valor`) VALUES
(2, 'Ar Condicionado Split Elgin Eco Power 9000 Btus R-', 'Ar Condicionado Elgin', '1499.99'),
(3, 'Ar Condicionado Split Hi Wall Electrolux Ecoturbo 12.000 BTU-h Frio R410.', 'Ar Condicionado Electrolux', '1799.99'),
(4, 'Ar Condicionado Split Hi Wall Springer Midea Tempstar 12.000 Btus Frio 110v', 'Ar Condicionado Midea', '1799.99'),
(5, 'Ar Condicionado Split Samsung Inverter 11500 BTUs Frio 220V.', 'Ar Condicionado Samsung', '2599.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `ID_Venda` int(11) NOT NULL,
  `Funcionario_Matricula` int(11) NOT NULL,
  `Cod_Produto` int(11) NOT NULL,
  `Data_Venda` date NOT NULL,
  `Nome_Cliente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Valor_Venda` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`ID_Venda`, `Funcionario_Matricula`, `Cod_Produto`, `Data_Venda`, `Nome_Cliente`, `Valor_Venda`) VALUES
(13, 10, 5, '2020-11-30', 'Roberto Barros', '2200');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`ID_Venda`),
  ADD KEY `FK_Venda` (`Funcionario_Matricula`),
  ADD KEY `FK_Venda_II` (`Cod_Produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `ID_Venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `FK_Venda` FOREIGN KEY (`Funcionario_Matricula`) REFERENCES `funcionario` (`matricula`),
  ADD CONSTRAINT `FK_Venda_II` FOREIGN KEY (`Cod_Produto`) REFERENCES `produto` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
