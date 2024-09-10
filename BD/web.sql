-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/09/2024 às 15:33
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `USU_ID` int(11) NOT NULL,
  `USU_NOME` varchar(255) DEFAULT NULL,
  `USU_SENHA` varchar(220) NOT NULL,
  `USU_EMAIL` varchar(100) DEFAULT NULL,
  `USU_NOME_COMPLETO` varchar(220) DEFAULT NULL,
  `USU_TELEFONE` varchar(15) DEFAULT NULL,
  `USU_ENDERECO` varchar(220) DEFAULT NULL,
  `USU_DATA_CADASTRO` timestamp NOT NULL DEFAULT current_timestamp(),
  `USU_STATUS` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`USU_ID`, `USU_NOME`, `USU_SENHA`, `USU_EMAIL`, `USU_NOME_COMPLETO`, `USU_TELEFONE`, `USU_ENDERECO`, `USU_DATA_CADASTRO`, `USU_STATUS`) VALUES
(0, 'Angelo', '123', 'angelo.oneda77@hotmail.com', 'Angelo Henrique Oneda', '45 998034475', 'rua mato grosso 1180', '2024-09-09 19:32:44', 'A'),
(1, 'jdoe', 'senha123', 'jdoe@example.com', 'John Doe', '(11) 98765-4321', 'Rua A, 123', '2024-01-01 03:00:00', 'A'),
(2, 'asmith', 'senha456', 'asmith@example.com', 'Alice Smith', '(21) 97654-3210', 'Rua B, 456', '2024-01-02 03:00:00', 'I'),
(3, 'mbrown', 'senha789', 'mbrown@example.com', 'Michael Brown', '(31) 96543-2109', 'Rua C, 789', '2024-01-03 03:00:00', 'A'),
(4, 'jdoe2', 'senha321', 'jdoe2@example.com', 'Jane Doe', '(41) 95432-1098', 'Rua D, 101', '2024-01-04 03:00:00', 'A'),
(5, 'kjohnson', 'senha654', 'kjohnson@example.com', 'Kevin Johnson', '(51) 94321-0987', 'Rua E, 202', '2024-01-05 03:00:00', 'I'),
(6, 'lwhite', 'senha987', 'lwhite@example.com', 'Laura White', '(61) 93210-9876', 'Rua F, 303', '2024-01-06 03:00:00', 'A'),
(7, 'mclark', 'senha159', 'mclark@example.com', 'Mark Clark', '(71) 92109-8765', 'Rua G, 404', '2024-01-07 03:00:00', 'A'),
(8, 'nlopez', 'senha753', 'nlopez@example.com', 'Nancy Lopez', '(81) 91098-7654', 'Rua H, 505', '2024-01-08 03:00:00', 'I'),
(9, 'oallen', 'senha852', 'oallen@example.com', 'Oscar Allen', '(91) 90987-6543', 'Rua I, 606', '2024-01-09 03:00:00', 'A'),
(10, 'pyoung', 'senha468', 'pyoung@example.com', 'Paul Young', '(11) 89876-5432', 'Rua J, 707', '2024-01-10 03:00:00', 'A'),
(11, 'qking', 'senha369', 'qking@example.com', 'Quinn King', '(21) 88765-4321', 'Rua K, 808', '2024-01-11 03:00:00', 'I'),
(12, 'rscott', 'senha258', 'rscott@example.com', 'Rachel Scott', '(31) 87654-3210', 'Rua L, 909', '2024-01-12 03:00:00', 'A'),
(13, 'tturner', 'senha147', 'tturner@example.com', 'Tom Turner', '(41) 86543-2109', 'Rua M, 1010', '2024-01-13 03:00:00', 'A'),
(14, 'uweaver', 'senha741', 'uweaver@example.com', 'Ursula Weaver', '(51) 85432-1098', 'Rua N, 2020', '2024-01-14 03:00:00', 'I'),
(15, 'vmartin', 'senha963', 'vmartin@example.com', 'Victor Martin', '(61) 84321-0987', 'Rua O, 3030', '2024-01-15 03:00:00', 'A'),
(16, 'wthomas', 'senha258', 'wthomas@example.com', 'Will Thomas', '(71) 83210-9876', 'Rua P, 4040', '2024-01-16 03:00:00', 'A'),
(17, 'xroberts', 'senha369', 'xroberts@example.com', 'Xena Roberts', '(81) 82109-8765', 'Rua Q, 5050', '2024-01-17 03:00:00', 'I'),
(18, 'ylopez', 'senha852', 'ylopez@example.com', 'Yvonne Lopez', '(91) 81098-7654', 'Rua R, 6060', '2024-01-18 03:00:00', 'A'),
(19, 'zgreen', 'senha468', 'zgreen@example.com', 'Zachary Green', '(11) 79987-6543', 'Rua S, 7070', '2024-01-19 03:00:00', 'A'),
(20, 'awright', 'senha159', 'awright@example.com', 'Alice Wright', '(21) 78876-5432', 'Rua T, 8080', '2024-01-20 03:00:00', 'I'),
(21, 'bxavier', 'senha753', 'bxavier@example.com', 'Brian Xavier', '(31) 77765-4321', 'Rua U, 9090', '2024-01-21 03:00:00', 'A'),
(22, 'cyoung', 'senha852', 'cyoung@example.com', 'Carol Young', '(41) 76654-3210', 'Rua V, 10101', '2024-01-22 03:00:00', 'A'),
(23, 'dwhite', 'senha468', 'dwhite@example.com', 'David White', '(51) 75543-2109', 'Rua W, 20202', '2024-01-23 03:00:00', 'I'),
(24, 'ejones', 'senha963', 'ejones@example.com', 'Emma Jones', '(61) 74432-1098', 'Rua X, 30303', '2024-01-24 03:00:00', 'A'),
(25, 'fjackson', 'senha258', 'fjackson@example.com', 'Frank Jackson', '(71) 73321-0987', 'Rua Y, 40404', '2024-01-25 03:00:00', 'A'),
(26, 'gmartin', 'senha741', 'gmartin@example.com', 'Grace Martin', '(81) 72210-9876', 'Rua Z, 50505', '2024-01-26 03:00:00', 'I'),
(27, 'hperry', 'senha963', 'hperry@example.com', 'Helen Perry', '(91) 71109-8765', 'Rua AA, 60606', '2024-01-27 03:00:00', 'A'),
(28, 'icarter', 'senha852', 'icarter@example.com', 'Isaac Carter', '(11) 70098-7654', 'Rua BB, 70707', '2024-01-28 03:00:00', 'A'),
(29, 'jroberts', 'senha468', 'jroberts@example.com', 'Jessica Roberts', '(21) 68987-6543', 'Rua CC, 80808', '2024-01-29 03:00:00', 'I'),
(30, 'kmoore', 'senha159', 'kmoore@example.com', 'Kevin Moore', '(31) 67876-5432', 'Rua DD, 90909', '2024-01-30 03:00:00', 'A'),
(31, 'lkim', 'senha753', 'lkim@example.com', 'Liam Kim', '(41) 66765-4321', 'Rua EE, 101010', '2024-02-01 03:00:00', 'A'),
(32, 'mmorris', 'senha852', 'mmorris@example.com', 'Mia Morris', '(51) 65654-3210', 'Rua FF, 202020', '2024-02-02 03:00:00', 'I'),
(33, 'nwhite', 'senha468', 'nwhite@example.com', 'Noah White', '(61) 64543-2109', 'Rua GG, 303030', '2024-02-03 03:00:00', 'A'),
(34, 'obrown', 'senha159', 'obrown@example.com', 'Olivia Brown', '(71) 63432-1098', 'Rua HH, 404040', '2024-02-04 03:00:00', 'A'),
(35, 'pcarter', 'senha741', 'pcarter@example.com', 'Paul Carter', '(81) 62321-0987', 'Rua II, 505050', '2024-02-05 03:00:00', 'I'),
(36, 'qwilson', 'senha963', 'qwilson@example.com', 'Quinn Wilson', '(91) 61210-9876', 'Rua JJ, 606060', '2024-02-06 03:00:00', 'A'),
(37, 'rmoore', 'senha852', 'rmoore@example.com', 'Rebecca Moore', '(11) 60109-8765', 'Rua KK, 707070', '2024-02-07 03:00:00', 'A'),
(38, 'sjohnson', 'senha123', 'sjohnson@example.com', 'Sarah Johnson', '(21) 59098-7654', 'Rua LL, 808080', '2024-02-08 03:00:00', 'I'),
(39, 'tadams', 'senha456', 'tadams@example.com', 'Tom Adams', '(31) 58087-6543', 'Rua MM, 909090', '2024-02-09 03:00:00', 'A'),
(40, 'ubrown', 'senha789', 'ubrown@example.com', 'Uma Brown', '(41) 57076-5432', 'Rua NN, 1010101', '2024-02-10 03:00:00', 'A'),
(41, 'vclark', 'senha321', 'vclark@example.com', 'Vera Clark', '(51) 56065-4321', 'Rua OO, 2020202', '2024-02-11 03:00:00', 'I'),
(42, 'wking', 'senha654', 'wking@example.com', 'Will King', '(61) 55054-3210', 'Rua PP, 3030303', '2024-02-12 03:00:00', 'A'),
(43, 'xmoore', 'senha987', 'xmoore@example.com', 'Xander Moore', '(71) 54043-2109', 'Rua QQ, 4040404', '2024-02-13 03:00:00', 'A'),
(44, 'yjackson', 'senha159', 'yjackson@example.com', 'Yara Jackson', '(81) 53032-1098', 'Rua RR, 5050505', '2024-02-14 03:00:00', 'I'),
(45, 'zsmith', 'senha753', 'zsmith@example.com', 'Zoe Smith', '(91) 52021-0987', 'Rua SS, 6060606', '2024-02-15 03:00:00', 'A'),
(46, 'alevy', 'senha852', 'alevy@example.com', 'Adam Levy', '(11) 51010-9876', 'Rua TT, 7070707', '2024-02-16 03:00:00', 'A'),
(47, 'bmorris', 'senha468', 'bmorris@example.com', 'Beth Morris', '(21) 50009-8765', 'Rua UU, 8080808', '2024-02-17 03:00:00', 'I'),
(48, 'cjohnson', 'senha963', 'cjohnson@example.com', 'Carl Johnson', '(31) 49098-7654', 'Rua VV, 9090909', '2024-02-18 03:00:00', 'A'),
(49, 'dwalker', 'senha258', 'dwalker@example.com', 'Diana Walker', '(41) 48087-6543', 'Rua WW, 10101010', '2024-02-19 03:00:00', 'A'),
(50, 'ewilson', 'senha741', 'ewilson@example.com', 'Evan Wilson', '(51) 47076-5432', 'Rua XX, 20202020', '2024-02-20 03:00:00', 'I');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`USU_ID`),
  ADD KEY `idx_usu_email` (`USU_EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
