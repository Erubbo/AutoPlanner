-- --------------------------------------------------------
-- Servidor:                     10.97.47.76
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para auto_planner
CREATE DATABASE IF NOT EXISTS `auto_planner` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `auto_planner`;

-- Copiando estrutura para tabela auto_planner.tb_aluno
CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `pai` varchar(50) NOT NULL,
  `mae` varchar(50) NOT NULL,
  `nome_social` varchar(50) NOT NULL,
  `pai_af` varchar(50) NOT NULL,
  `mae_af` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `orgao_emissor` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `telefone2` varchar(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tb_aluno_tb_endereco` (`id_endereco`),
  CONSTRAINT `FK_tb_aluno_tb_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_aluno: ~6 rows (aproximadamente)
INSERT INTO `tb_aluno` (`id`, `nome`, `pai`, `mae`, `nome_social`, `pai_af`, `mae_af`, `data_nascimento`, `genero`, `nacionalidade`, `cpf`, `rg`, `orgao_emissor`, `uf`, `email`, `telefone`, `telefone2`, `senha`, `ativo`, `data_cadastro`, `id_endereco`) VALUES
	(19, 'Renata', '', '', '', '', '', '1988-11-25', '2', '1', '383.760.338', '44.502.70', 'ssp', 'SP', 'renata.aversa@hotmail.com', '(19) 99320-', '', '9018bce52dce5bd7549385e6e5062c2f881bcbdc', b'1', '2022-11-29 22:20:13', 10),
	(22, 'Jeneffer Cristina Serrano', 'fdsfgd', 'sdgfd', 'tereza ', 'fdsfsd', 'fsdfsd', '1997-07-17', '2', '1', '32243243436', '324354355', 'ssp', 'SP', 'jeneffer@hotmail.com', '19994019875', '', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', b'1', '2022-12-01 22:21:20', 23),
	(23, 'João Antonio', 'Charles Geraldo Souza Nogueira', 'Renata Gabriela Palhares Aversa', '', '', '', '2010-05-15', '1', '1', '33388877766', '445553331', 'SSP', 'SP', 'joao@hotmail.com', '19993207279', '1936421718_', 'c510cd8607f92e1e09fd0b0d0d035c16d2428fa4', b'1', '2022-12-06 19:27:43', 24),
	(24, 'Eros Rubbo', 'Eros pavoleti', 'Marcia', 'Eros', 'Pavoleti', 'Maria', '1996-09-26', '1', '1', '32123233889', '357768516', 'SSP', 'SP', 'eroserp@hotmail.com', '19991603797', '19994621922', '8cb2237d0679ca88db6464eac60da96345513964', b'1', '2022-12-08 21:43:04', 33),
	(25, 'Eros Rubbo', 'Eros pavoleti', 'Marcia', 'Eros', 'Pavoleti', 'Maria', '1996-09-26', '1', '1', '32123233822', '357768512', 'SSP', 'SP', 'eroser@hotmail.com', '19991603797', '19994621922', '8cb2237d0679ca88db6464eac60da96345513964', b'1', '2022-12-08 21:44:23', 34),
	(26, 'jasdu', 'dsahiu', 'sdahisud', 'jasduahsda', 'iuashd', 'iudahsida', '6317-03-07', '1', '1', '27189237645', '837649272', 'ssp', 'SP', 'erosjdhdn@hotmail.com', '19991857656', '19993843516', '8cb2237d0679ca88db6464eac60da96345513964', b'1', '2022-12-08 21:53:11', 35),
	(27, 'Joao Feijão', 'Charles', 'Renata', '', '', '', '2005-11-25', '1', '1', '12343233212', '223333333', 'ssp', 'SP', 'joao1@hotmail.com', '19993207727', '1936421718_', 'c510cd8607f92e1e09fd0b0d0d035c16d2428fa4', b'1', '2023-01-19 19:44:51', 36);

-- Copiando estrutura para tabela auto_planner.tb_calendario
CREATE TABLE IF NOT EXISTS `tb_calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_carta` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno` (`id_aluno`),
  KEY `carta` (`id_carta`),
  KEY `professor` (`id_professor`),
  CONSTRAINT `aluno` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `carta` FOREIGN KEY (`id_carta`) REFERENCES `tb_carta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `professor` FOREIGN KEY (`id_professor`) REFERENCES `tb_professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_calendario: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela auto_planner.tb_carta
CREATE TABLE IF NOT EXISTS `tb_carta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_carta: ~5 rows (aproximadamente)
INSERT INTO `tb_carta` (`id`, `tipo`) VALUES
	(1, 'A'),
	(2, 'B'),
	(3, 'C'),
	(4, 'D'),
	(5, 'E');

-- Copiando estrutura para tabela auto_planner.tb_disponibilidade
CREATE TABLE IF NOT EXISTS `tb_disponibilidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL DEFAULT 0,
  `dia_semana` varchar(50) NOT NULL,
  `hora_inici` time NOT NULL,
  `hora_fim` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_aluno` (`id_aluno`),
  CONSTRAINT `id_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_disponibilidade: ~12 rows (aproximadamente)
INSERT INTO `tb_disponibilidade` (`id`, `id_aluno`, `dia_semana`, `hora_inici`, `hora_fim`) VALUES
	(27, 26, '1', '09:00:00', '10:00:00'),
	(28, 26, '1', '11:00:00', '12:00:00'),
	(29, 26, '1', '15:00:00', '16:00:00'),
	(30, 26, '4', '08:00:00', '09:00:00'),
	(31, 26, '4', '09:00:00', '10:00:00'),
	(32, 26, '4', '10:00:00', '11:00:00'),
	(33, 26, '4', '11:00:00', '12:00:00'),
	(34, 26, '6', '08:00:00', '09:00:00'),
	(35, 26, '6', '09:00:00', '10:00:00'),
	(36, 26, '6', '10:00:00', '11:00:00'),
	(37, 26, '6', '11:00:00', '12:00:00'),
	(38, 26, '6', '12:00:00', '13:00:00');

-- Copiando estrutura para tabela auto_planner.tb_endereco
CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(8) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_endereco: ~17 rows (aproximadamente)
INSERT INTO `tb_endereco` (`id`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `municipio`, `estado`, `ativo`, `data_cadastro`) VALUES
	(10, '13876786', 'Rua Gabriel José de Andrade', '142 ', '', 'Jardim das Hortências', 'São João da Boa Vista', 'SP', b'1', '2022-11-29 22:20:13'),
	(22, '13872610', 'Rua Afonso Bittar', '550', '', 'Vila Nossa Senhora de Fátima', 'São João da Boa Vista', 'SP', b'1', '2022-12-01 22:18:21'),
	(23, '13872610', 'Rua Afonso Bittar', '540 ', '', 'Vila Nossa Senhora de Fátima', 'São João da Boa Vista', 'SP', b'1', '2022-12-01 22:21:20'),
	(24, '13890000', '', '73 ', '', 'Fonte Platina', 'Águas da Prata', 'SP', b'1', '2022-12-06 19:27:43'),
	(25, '13876786', 'Rua Gabriel José de Andrade', '142', '', 'Jardim das Hortências', 'São João da Boa Vista', 'SP', b'1', '2022-12-06 19:33:55'),
	(26, '13890000', 'r joao viana', '63', '', 'jd europa', 'Águas da Prata', 'SP', b'1', '2022-12-06 19:38:36'),
	(27, '13870110', 'Avenida Dona Gertrudes', '22', '', 'Centro', 'São João da Boa Vista', 'SP', b'1', '2022-12-06 20:02:14'),
	(28, '13870110', 'Avenida Dona Gertrudes', '22', '', 'Centro', 'São João da Boa Vista', 'SP', b'1', '2022-12-06 20:09:18'),
	(29, '13870242', 'Rua Monsenhor Vinheta', '44', '', 'Centro', 'São João da Boa Vista', 'SP', b'1', '2022-12-06 20:13:29'),
	(30, '13890000', '', '65', '', '', 'Águas da Prata', 'SP', b'1', '2022-12-08 19:31:58'),
	(31, '13890000', '', '90', '', '', 'Águas da Prata', 'SP', b'1', '2022-12-08 20:04:09'),
	(32, '13890000', '', '48', '', '', 'Águas da Prata', 'SP', b'1', '2022-12-08 20:13:56'),
	(33, '13870618', 'Rua Maestro Gião', '221 ', 'N/I', 'Vila Loyola', 'São João da Boa Vista', 'SP', b'1', '2022-12-08 21:43:04'),
	(34, '13870618', 'Rua Maestro Gião', '221 ', 'N/I', 'Vila Loyola', 'São João da Boa Vista', 'SP', b'1', '2022-12-08 21:44:23'),
	(35, '13870618', 'Rua Maestro Gião', '221 ', '', 'Vila Loyola', 'São João da Boa Vista', 'SP', b'1', '2022-12-08 21:53:11'),
	(36, '13890000', 'R Eurico Soares', '75 ', '', 'Fonte Platina', 'Águas da Prata', 'SP', b'1', '2023-01-19 19:44:51'),
	(37, '13876271', 'Rua Celina Cirto de Oliveira', '12', '', 'Parque dos Resedás', 'São João da Boa Vista', 'SP', b'1', '2023-01-19 19:55:10');

-- Copiando estrutura para tabela auto_planner.tb_eventos
CREATE TABLE IF NOT EXISTS `tb_eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_fim` time NOT NULL,
  `comeco` date NOT NULL,
  `final` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_eventos: ~0 rows (aproximadamente)
INSERT INTO `tb_eventos` (`id`, `titulo`, `horario_inicio`, `horario_fim`, `comeco`, `final`) VALUES
	(1, 'eros', '21:32:49', '22:32:52', '2022-12-06', '2022-12-06');

-- Copiando estrutura para tabela auto_planner.tb_historico
CREATE TABLE IF NOT EXISTS `tb_historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `total_aula` varchar(50) NOT NULL,
  `id_carta` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_carta` (`id_carta`),
  KEY `id_alunos` (`id_aluno`),
  CONSTRAINT `id_alunos` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_carta` FOREIGN KEY (`id_carta`) REFERENCES `tb_carta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_historico: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela auto_planner.tb_login
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_login: ~4 rows (aproximadamente)
INSERT INTO `tb_login` (`id`, `email`, `senha`, `ativo`, `data_cadastro`) VALUES
	(1, 'eros@hotmail.com', '12345', b'1', '2022-12-08 21:49:15'),
	(2, 'joao@htinho.com', '12345', b'1', '2022-12-08 21:49:15'),
	(3, 'angelo@gmail.com', 'senac', b'1', '2022-12-08 21:49:15'),
	(4, 'renata@hotmail.com', '12345', b'1', '2022-12-08 21:49:15'),
	(5, 'izabel@gmail.com', 'izabel', b'1', '2022-12-08 21:49:15');

-- Copiando estrutura para tabela auto_planner.tb_professor
CREATE TABLE IF NOT EXISTS `tb_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL DEFAULT current_timestamp(),
  `genero` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `orgao_emissor` varchar(5) NOT NULL,
  `uf` char(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `telefone2` varchar(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `id_endereco` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tb_professor_tb_endereco` (`id_endereco`),
  CONSTRAINT `FK_tb_professor_tb_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela auto_planner.tb_professor: ~14 rows (aproximadamente)
INSERT INTO `tb_professor` (`id`, `nome`, `data_nascimento`, `genero`, `nacionalidade`, `cpf`, `rg`, `orgao_emissor`, `uf`, `email`, `telefone`, `telefone2`, `senha`, `ativo`, `data_cadastro`, `id_endereco`) VALUES
	(16, 'Jeneffer Cristina Serrano', '1997-07-17', '2', '1', '32243243435', '324354354', 'ssp', 'SP', 'jeneffercs@hotmail.com', '19994019875', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-01 22:18:21', 22),
	(17, 'Jeneffer Cristina Serrano', '1997-07-17', '2', '1', '32243243435', '324354354', 'ssp', 'SP', 'jeneffercs@hotmail.com', '19994019875', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-01 22:18:21', 22),
	(18, 'Renata Palhares', '1999-11-25', '2', '1', '99900088777', '222222288', 'ssp', 'SP', 'marcia@hotmail.com', '1936333684_', '', '7167e0a6df0af54c785d97934bb1bca572af182f', b'1', '2022-12-06 19:33:55', 25),
	(19, 'Renata Palhares', '1999-11-25', '2', '1', '99900088777', '222222288', 'ssp', 'SP', 'marcia@hotmail.com', '1936333684_', '', '7167e0a6df0af54c785d97934bb1bca572af182f', b'1', '2022-12-06 19:33:55', 25),
	(20, 'teste', '2010-11-22', '1', '1', '22222233344', '332222222', 'ssp', 'SP', 'restaurante@hotmail.com', '19993207279', '', '8cb2237d0679ca88db6464eac60da96345513964', b'1', '2022-12-06 19:38:36', 26),
	(21, 'teste', '2010-11-22', '1', '1', '22222233344', '332222222', 'ssp', 'SP', 'restaurante@hotmail.com', '19993207279', '', '8cb2237d0679ca88db6464eac60da96345513964', b'1', '2022-12-06 19:38:36', 26),
	(22, 'izabel', '1993-07-21', '2', '1', '12312341231', '131231231', 'sp', 'SP', 'izabel@gmail.com', '9999999999_', '99999999999', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-06 20:02:14', 27),
	(23, 'izabel', '1993-07-21', '2', '1', '12312341231', '131231231', 'sp', 'SP', 'izabel@gmail.com', '9999999999_', '99999999999', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-06 20:02:14', 27),
	(24, 'betina', '1889-12-14', '2', '1', '13123412331', '321231212', 'sp', 'SP', 'betina@gmail.com', '9999999999_', '66666666666', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-06 20:09:18', 28),
	(25, 'bruna', '1889-04-04', '2', '1', '12312313212', '123121231', 'sp', 'SP', 'bruna', '9999999999_', '77777777777', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-06 20:13:29', 29),
	(26, 'teste', '1988-11-22', '2', '1', '39388899200', '443999999', 'ssp', 'SP', 'betina@gmail.com', '19993207279', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', b'1', '2022-12-08 19:31:58', 30),
	(27, 'teste', '1988-11-29', '1', '1', '33333333333', '222222228', 'ssp', 'RJ', 'betinha@gmail.com', '11111111111', '11111111111', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', b'1', '2022-12-08 20:04:09', 31),
	(28, 'renata', '1988-11-25', '2', '1', '38376033859', '446027083', 'ssp', 'SP', 'renata.aversa@hotmail.com', '19993207279', '', '7167e0a6df0af54c785d97934bb1bca572af182f', b'1', '2022-12-08 20:13:56', 32),
	(29, 'Joao', '1988-11-25', '1', '1', '33300099988', '443333333', 'ssp', 'SP', 'marcia1@hotmail.com', '19222222222', '19999999999', '7167e0a6df0af54c785d97934bb1bca572af182f', b'1', '2023-01-19 19:55:10', 37);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
atb_disponibilidadeuto_planner