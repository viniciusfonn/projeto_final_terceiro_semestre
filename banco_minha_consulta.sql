-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2018 às 00:17
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `senha`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta_horario`
--

CREATE TABLE `consulta_horario` (
  `id_horario_c` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `consulta_horario`
--

INSERT INTO `consulta_horario` (`id_horario_c`, `data`, `hora`, `id_medico`, `id_usuario`, `status`) VALUES
(28, '2018-07-09', '13:00:00', 23, 21, 1),
(29, '2018-07-09', '13:00:00', 25, 21, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_pacientes`
--

CREATE TABLE `endereco_pacientes` (
  `id_endereco_paciente` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco_pacientes`
--

INSERT INTO `endereco_pacientes` (`id_endereco_paciente`, `cep`, `cidade`, `estado`, `rua`, `numero`, `complemento`, `bairro`, `id_usuario`) VALUES
(4, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 123, 'nao tem', 'Areal', 15),
(5, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 11, '', 'Areal', 16),
(6, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 451, '', 'Areal', 17),
(7, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 451, '', 'Areal', 18),
(8, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 451, '', 'Areal', 19),
(9, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 450, '', 'Areal', 20),
(10, 96085280, 'Pelotas', 'RS', 'Rua Sotero dos Reis', 450, '', 'Areal', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidade` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id_especialidade`, `descricao`) VALUES
(4, 'Pediatra'),
(5, 'Cardiologista'),
(6, 'Neurologista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` bigint(20) UNSIGNED NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id_horario`, `hora`) VALUES
(1, '13:00:00'),
(2, '14:00:00'),
(3, '15:00:00'),
(4, '16:00:00'),
(5, '17:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios_indisponiveis`
--

CREATE TABLE `horarios_indisponiveis` (
  `id_indisponivel` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `horarios_indisponiveis`
--

INSERT INTO `horarios_indisponiveis` (`id_indisponivel`, `data`, `hora`, `id_medico`) VALUES
(49, '2018-07-10', '17:00:00', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crm` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id_medico`, `nome`, `sobrenome`, `crm`, `login`, `senha`, `perfil`) VALUES
(22, 'Alice', 'Quadros', 99999, 'alice', '7c73a746a2d8968ecd18ee418197a003', '22.jpg'),
(23, 'Roberto', 'barcelos', 123123213, 'roberto', '0d3e349c4a1ec0c7e4bb8175aa210300', '23.JPG'),
(24, 'Ana', 'barcelos', 21312312, 'ana', '0d3e349c4a1ec0c7e4bb8175aa210300', '24.jpg'),
(25, 'arthur', 'barcelos', 1234, 'arthur', '0d3e349c4a1ec0c7e4bb8175aa210300', '25.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos_especialidades`
--

CREATE TABLE `medicos_especialidades` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `id_especialidade` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `medicos_especialidades`
--

INSERT INTO `medicos_especialidades` (`id_medico`, `id_especialidade`) VALUES
(22, 5),
(23, 4),
(24, 4),
(25, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt_nasc` date NOT NULL,
  `rg` int(11) NOT NULL,
  `sexo` tinyint(3) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `sobrenome`, `dt_nasc`, `rg`, `sexo`, `status`, `login`, `senha`) VALUES
(15, 'Astolfo', 'Barcelos', '1964-12-14', 1234567890, 1, 1, 'astolfo@gmail.com', 'astolfo'),
(16, 'Roberto', 'Barcelos', '1990-11-13', 1234567890, 1, 1, 'roberto@gmail.com', 'roberto'),
(17, 'Aroudo', 'Rodrigues', '1987-12-13', 1111111111, 1, 1, 'aroudo@gmail.com', 'b7a04273d9693e99fac143afde28fc96'),
(18, 'Joel', 'barcelos', '2018-11-13', 1234567890, 1, 1, 'joel@gmail.com', 'c000ccf225950aac2a082a59ac5e57ff'),
(19, 'Matheus', 'barcelos', '2000-12-10', 1234567890, 3, 1, 'barcelos@barcelos.com', '0d3e349c4a1ec0c7e4bb8175aa210300'),
(20, 'Luis', 'barcelos', '1990-12-14', 1234567890, 1, 1, 'luis@gmail.com', '502ff82f7f1f8218dd41201fe4353687'),
(21, 'marcelo', 'barcelos', '1990-12-14', 1234567890, 1, 1, 'marcelo@gmail.com', '995bf053c4694e1e353cfd42b94e4447');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_tel`
--

CREATE TABLE `usuario_tel` (
  `id_telefone` int(11) NOT NULL,
  `num_telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` tinyint(3) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario_tel`
--

INSERT INTO `usuario_tel` (`id_telefone`, `num_telefone`, `tipo`, `id_usuario`) VALUES
(9, '40028922', 1, 15),
(10, '123', 1, 16),
(11, '31233', 1, 17),
(12, '40028922', 1, 18),
(13, '40028922', 1, 19),
(14, '40028922', 1, 20),
(15, '40028922', 1, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_admin_UNIQUE` (`id_admin`);

--
-- Indexes for table `consulta_horario`
--
ALTER TABLE `consulta_horario`
  ADD UNIQUE KEY `id_horario_c` (`id_horario_c`);

--
-- Indexes for table `endereco_pacientes`
--
ALTER TABLE `endereco_pacientes`
  ADD PRIMARY KEY (`id_endereco_paciente`,`id_usuario`),
  ADD UNIQUE KEY `id_endereco_paciente_UNIQUE` (`id_endereco_paciente`),
  ADD KEY `fk_endereco_pacientes_usuarios_idx` (`id_usuario`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD UNIQUE KEY `id_horario` (`id_horario`);

--
-- Indexes for table `horarios_indisponiveis`
--
ALTER TABLE `horarios_indisponiveis`
  ADD UNIQUE KEY `id_indisponivel` (`id_indisponivel`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `medicos_especialidades`
--
ALTER TABLE `medicos_especialidades`
  ADD PRIMARY KEY (`id_medico`,`id_especialidade`),
  ADD KEY `fk_medicos_has_especialidades_especialidades1_idx` (`id_especialidade`),
  ADD KEY `fk_medicos_has_especialidades_medicos1_idx` (`id_medico`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`);

--
-- Indexes for table `usuario_tel`
--
ALTER TABLE `usuario_tel`
  ADD PRIMARY KEY (`id_telefone`,`id_usuario`),
  ADD UNIQUE KEY `idusuario_tel_UNIQUE` (`id_telefone`),
  ADD KEY `fk_usuario_tel_usuarios1_idx` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consulta_horario`
--
ALTER TABLE `consulta_horario`
  MODIFY `id_horario_c` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `endereco_pacientes`
--
ALTER TABLE `endereco_pacientes`
  MODIFY `id_endereco_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidade` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `horarios_indisponiveis`
--
ALTER TABLE `horarios_indisponiveis`
  MODIFY `id_indisponivel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuario_tel`
--
ALTER TABLE `usuario_tel`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco_pacientes`
--
ALTER TABLE `endereco_pacientes`
  ADD CONSTRAINT `fk_endereco_pacientes_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `medicos_especialidades`
--
ALTER TABLE `medicos_especialidades`
  ADD CONSTRAINT `fk_medicos_has_especialidades_especialidades1` FOREIGN KEY (`id_especialidade`) REFERENCES `especialidades` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medicos_has_especialidades_medicos1` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_tel`
--
ALTER TABLE `usuario_tel`
  ADD CONSTRAINT `fk_usuario_tel_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
