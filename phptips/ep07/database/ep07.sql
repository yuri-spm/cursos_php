-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para phptips
CREATE DATABASE IF NOT EXISTS `phptips` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `phptips`;

-- Copiando estrutura para tabela phptips.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela phptips.posts: ~2 rows (aproximadamente)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `cover`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Aut quod enim ex quo repellendus quia quis. Eum dignissimos id numquam quia.', '', 'Maxime aut quasi fugiat culpa voluptatem. Pariatur reiciendis quibusdam aut qui sit. Eligendi ipsa temporibus recusandae doloribus dolores voluptatibus velit sint. Nesciunt neque tempore omnis velit modi. Cupiditate voluptatem quia ut aut.\n\nMaiores reiciendis error sit facilis. Unde suscipit et sit non non aut. Temporibus dolorem incidunt omnis autem id iure.', '2021-02-08 23:55:43', '2021-02-08 23:55:43'),
	(2, 'Ex incidunt culpa rerum impedit. Reiciendis debitis ab dolor.', '', 'Hic velit voluptatem et enim. Laudantium vel ut ea iusto qui sint ea. Vel tenetur iure nesciunt non perspiciatis. Quo pariatur ipsa voluptatem et. Blanditiis consequuntur et qui odio optio repellendus cumque quae.\n\nTenetur cum neque qui cum. Voluptatem nulla omnis ratione non. Aliquam qui distinctio qui distinctio. Aut ut dolor a et nobis ut dolor.', '2021-02-08 23:56:59', '2021-02-08 23:56:59');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando estrutura para tabela phptips.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela phptips.products: ~5 rows (aproximadamente)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `price`, `updated_at`, `created_at`) VALUES
	(1, 'Full Stack PHP Developer', 997.00, '2021-01-29 18:09:43', '2021-01-27 22:52:46'),
	(2, 'Growth Developer', 5000.00, '2021-01-27 22:53:09', '2021-01-27 22:53:04'),
	(3, 'Laravel Developer', 497.50, '2021-01-27 22:55:30', '2021-01-27 22:54:07'),
	(4, 'Mentor', 1997.00, '2021-01-27 22:55:30', '2021-01-27 22:54:50'),
	(5, 'Work Control Certification', 2497.00, '2021-01-27 22:55:30', '2021-01-27 22:54:50');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Copiando estrutura para tabela phptips.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `document` varchar(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela phptips.users: ~5 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `document`, `created_at`, `updated_at`) VALUES
	(1, 'Robson', 'Santos', 'robson1@email.com.br', NULL, '2018-09-03 16:39:07', '2018-09-03 16:39:33'),
	(2, 'Alexandre', 'Santos', 'alexandre27@email.com.br', NULL, '2018-09-03 16:39:07', '2018-09-03 16:39:33'),
	(3, 'Willian', 'Santos', 'willian28@email.com.br', NULL, '2018-09-03 16:39:07', '2018-09-03 16:39:33'),
	(4, 'Eleno', 'Santos', 'eleno29@email.com.br', NULL, '2018-09-03 16:39:07', '2018-09-03 16:39:33'),
	(5, 'Lucas', 'Santos', 'lucas30@email.com.br', NULL, '2018-09-03 16:39:07', '2018-09-03 16:39:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
