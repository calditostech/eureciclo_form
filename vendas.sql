-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para eureciclo
DROP DATABASE IF EXISTS `eureciclo`;
CREATE DATABASE IF NOT EXISTS `eureciclo` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `eureciclo`;

-- Copiando dados para a tabela eureciclo.vendas: 8 rows
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` (`id`, `comprador`, `descricao`, `preco`, `quantidade`, `endereco`, `fornecedor`) VALUES
	(25, 'JoÃ£o Silva', ' R$10 off R$20 of food', 10.00, 2, '	987 Fake St', '	Bobs Pizza'),
	(26, 'Amy Pond', '	R$30 of awesome for R$10', 10.00, 5, '	456 Unreal Rd', '	Toms Awesome Shop'),
	(27, 'Marty McFly', ' R$20 Sneakers for R$5', 5.00, 1, '	123 Fake St', '	Sneaker Store Emporium'),
	(28, 'Snake Plissken', '	R$20 Sneakers for R$5', 5.00, 4, '	123 Fake St', '	Sneaker Store Emporium');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
