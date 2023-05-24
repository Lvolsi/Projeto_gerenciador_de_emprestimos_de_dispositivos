-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela gerenciador_v1.emprestimos: ~8 rows (aproximadamente)
INSERT IGNORE INTO `emprestimos` (`nome`, `equipamento`, `periodo`, `observacoes`, `data_emp`, `data_dev`, `observacoes_dev`, `status_emp`, `id_emp`) VALUES
	('Larissa Volsi dos Santos', 'Note 01, 02', '4', 'Kit 01 incompleto, sem mouse. ', '2023-04-11', NULL, NULL, NULL, 1),
	('Larissa Volsi dos Santos', 'Note 01, 04, 10', '1', '', '2023-05-04', NULL, NULL, NULL, 2),
	('Nilton', '08, 5', '6', 'Kit 05 incompleto', '2023-04-27', NULL, NULL, b'1', 3),
	('Pedro', 'Notebook 1', '3', '', '2023-04-18', NULL, NULL, NULL, 4),
	('Luciana', 'Notebook 07, 08', '4', 'Teste', '2023-05-06', NULL, NULL, b'1', 5),
	('Gustavo', 'note 9', '1', '', '0000-00-00', NULL, NULL, NULL, 6),
	('Maria', 'Caixa de som', '5', '', '2023-05-31', NULL, NULL, NULL, 7),
	('Felipe', 'note 6', '4', 'Teste', '2023-06-09', NULL, NULL, NULL, 8);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
