-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Jul-2023 às 07:58
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `colegio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int NOT NULL,
  `nomealuno` varchar(65) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `telefone` int NOT NULL,
  `classe` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int NOT NULL,
  `imagem` varchar(20) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `propina` varchar(40) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int NOT NULL,
  `nome` varchar(40) NOT NULL,
  `area` varchar(30) NOT NULL,
  `telefone` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `funcao` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `idade` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `area`, `telefone`, `email`, `funcao`, `endereco`, `idade`) VALUES
(1, 'Agostinho Pedro', 'RH', 982344213, 'augusto@gmail.com', 'Gestor', 'Luanda Sul', 31),
(7, 'Dioniosio João', 'TI', 923751406, 'dionisiojoa@gmail.com', 'Engenheiro de Infrastuturas', 'Vila Gamek', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id` int NOT NULL,
  `nome` varchar(40) NOT NULL,
  `curso` varchar(60) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` int NOT NULL,
  `email` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bilhete` varchar(15) NOT NULL,
  `classe` varchar(10) NOT NULL,
  `periodo` varchar(10) NOT NULL,
  `data_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `nome`, `curso`, `genero`, `data_nasc`, `telefone`, `email`, `endereco`, `bilhete`, `classe`, `periodo`, `data_in`) VALUES
(1, 'José Ulo', '2', 'Masculino', '2007-03-31', 925222497, 'joseulo77@gmail.com', 'Luanda Sul', '09875645', '1', '1', '2023-06-24'),
(2, 'Antônio Júnior', '4', 'Masculino', '1992-02-28', 9238388, 'sofista@gmail.com', 'No fundo do mar', '0008736287', '1', '2', '2023-06-30'),
(3, 'Jair Fernandes', 'Enfermagem', 'Masculino', '2003-01-28', 78738737, 'jair@gmail.com', 'Nova Vida', '09088', '11ª', 'Tarde', '2023-06-25'),
(4, 'Rui V', 'Enfermagem', 'Masculino', '1996-12-12', 925222497, 'RuiV77@gmail.com', 'Luanda Sul', '0008736287', '10ª', 'Manhã', '2022-12-15'),
(5, 'José Ulo', 'Análises Clínicas', 'Masculino', '2023-06-20', 925222497, 'joseulo77@gmail.com', 'Luanda Sul', '', '12ª', 'Manhã', '2023-05-31'),
(6, 'Anacleto Julio', 'Construção Cívil', 'Masculino', '2000-02-09', 1233456657, 'anacleto@gmail.com', 'Golf 2', '8976858799', '10ª', 'Tarde', '2023-06-26'),
(7, 'zua', 'Contabilidade', 'Masculino', '1997-12-12', 925222497, 'joseulo77@gmail.com', 'Luanda Sul', '09875645', '10ª', 'Manhã', '2023-06-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int NOT NULL,
  `nome` varchar(65) NOT NULL,
  `e-mail` varchar(45) NOT NULL,
  `endereco` varchar(10) NOT NULL,
  `telefone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int NOT NULL,
  `nome` varchar(40) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `periodo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nivel_acesso` int NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `nivel_acesso`, `senha`) VALUES
(1, 'Manuel Sampaio', 1, '123'),
(2, 'Hernany Zua', 1, '2345'),
(11, 'Miguel Setas', 2, '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
