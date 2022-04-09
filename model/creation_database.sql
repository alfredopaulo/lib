-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Abr-2022 às 08:38
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `status_pendencia` tinyint(1) NOT NULL,
  `status_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `cpf`, `matricula`, `nome`, `email`, `telefone`, `endereco`, `status_pendencia`, `status_ativo`) VALUES
(1, '01201201201', '0123456', 'aluno1 teste', 'aluno1@teste.com', '00000000000', 'rua teste 1, bairro teste', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `nome`, `status_ativo`) VALUES
(1, 'autor1 teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `fk_aluno` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_limite_devolucao` date NOT NULL,
  `data_devolucao` date DEFAULT NULL,
  `status_emprestimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `fk_aluno`, `data_emprestimo`, `data_limite_devolucao`, `data_devolucao`, `status_emprestimo`) VALUES
(1, 1, '2022-04-01', '2022-04-16', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo_livro`
--

CREATE TABLE `emprestimo_livro` (
  `id` int(11) NOT NULL,
  `fk_emprestimo` int(11) NOT NULL,
  `fk_livro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emprestimo_livro`
--

INSERT INTO `emprestimo_livro` (`id`, `fk_emprestimo`, `fk_livro`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `fk_autor` int(11) NOT NULL,
  `ano_publicacao` year(4) NOT NULL,
  `status_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `isbn`, `nome`, `fk_autor`, `ano_publicacao`, `status_ativo`) VALUES
(1, '12345678912', 'teste nome livro', 1, 2022, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `endereco` varchar(70) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL,
  `status_ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `cpf`, `nome`, `usuario`, `senha`, `email`, `telefone`, `endereco`, `nivel`, `status_ativo`) VALUES
(1, '01201201201', 'admin1 teste', 'admin', 'admin', 'admin@admin.com', NULL, NULL, 0, 1),
(2, '21201201202', 'bibliotecario1 teste', 'bibliotecario', 'bibliotecario', 'bibliotecario@bibliotecario.com', NULL, NULL, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aluno` (`fk_aluno`);

--
-- Índices para tabela `emprestimo_livro`
--
ALTER TABLE `emprestimo_livro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emprestimo` (`fk_emprestimo`),
  ADD KEY `fk_livro` (`fk_livro`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livro_ibfk_1` (`fk_autor`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `emprestimo_livro`
--
ALTER TABLE `emprestimo_livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`fk_aluno`) REFERENCES `aluno` (`id`);

--
-- Limitadores para a tabela `emprestimo_livro`
--
ALTER TABLE `emprestimo_livro`
  ADD CONSTRAINT `emprestimo_livro_ibfk_1` FOREIGN KEY (`fk_emprestimo`) REFERENCES `emprestimo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emprestimo_livro_ibfk_2` FOREIGN KEY (`fk_livro`) REFERENCES `livro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`fk_autor`) REFERENCES `autor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;