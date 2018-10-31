-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 31 oct. 2018 à 15:59
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `date`, `category`, `content`) VALUES
(2, 'mjklmjk', 'lmjklm', '2013-01-01 00:00:00', 'jklmjklmjl', 'ljklhjklhjlk'),
(3, 'mjklmjk', 'lmjklm', '2013-01-01 00:00:00', 'jklmjklmjl', '<p>lkjmjklm</p>'),
(4, 'mjklmjk', 'lmjklm', '2013-01-01 00:00:00', 'jklmjklmjl', '<p>&nbsp;</p>'),
(5, 'mjklmjk', 'lmjklm', '2013-01-01 00:00:00', 'jklmjklmjl', '<p>&nbsp;</p>'),
(6, 'khjkgh', 'jkghjkg', '2013-01-01 00:00:00', 'hjkghjk', '<p>&nbsp;</p>'),
(7, 'mùk', 'klmù', '2013-01-01 00:00:00', 'klmùklmù', '<p>lmùklùklm</p>'),
(8, 'ghjfg', 'hjfghj', '2013-01-01 00:00:00', 'fhf', '<p>ghjfghjfghjfghjfghj</p>'),
(9, 'ghjfg', 'jhgjfh', '2013-01-01 00:00:00', 'jfghjfghjf', 'fghjfghjfghj'),
(10, 'ghjfggh', 'jfghjf', '2013-01-01 00:00:00', 'ghjfghjfg', '<p>hjfhgjghjfghj</p>'),
(11, 'hjkg', 'hjkgh', '2013-01-01 00:00:00', 'jkghjkghjkgj', '<p>hjkghjk</p>'),
(13, 'hjkgkljkl', 'hjkgh', '2013-01-01 00:00:00', 'fhf', '<p>lkjlhjklhjkl</p>'),
(15, 'hjkg', 'hjkgh', '2013-01-01 00:00:00', 'jkghjkghjkgj', '<p>jklhjl</p>'),
(23, 'Enfin je peux flusher', 'Enfin je peux flusher', '2013-01-01 00:00:00', 'Enfin je peux flusher', '<p>Enfin je peux flusher</p>'),
(24, 'mon Image', 'Youssef', '2013-01-01 00:00:00', 'épices', '<p>La plus belle des images</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://res.cloudinary.com/di4eabjvj/image/upload/v1539181676/samples/food/spices.jpg\" style=\"height:2000px; width:2000px\" /></p>'),
(26, 'juju', 'youyou', '2018-10-19 15:19:56', 'bibi', 'bibi'),
(27, 'juju', 'youyou', '2018-10-19 15:19:58', 'bibi', 'bibi'),
(28, 'juju', 'youyou', '2018-10-19 15:19:58', 'bibi', 'bibi'),
(29, 'juju', 'youyou', '2018-10-19 15:20:12', 'bibi', 'bibi'),
(30, 'juju', 'youyou', '2018-10-19 15:20:13', 'bibi', 'bibi'),
(31, 'juju', 'youyou', '2018-10-19 15:20:14', 'bibi', 'bibi');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962A7294869C` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `pseudo`, `content`, `date`) VALUES
(5, 30, 'Youssef', 'tiititititititititiitititititi', '2018-10-19 15:20:13'),
(6, 31, 'Youssef', 'tiititititititititiitititititi', '2018-10-19 15:20:14'),
(9, 23, 'Youssef', 'wawww', '2018-10-19 15:44:29'),
(10, 23, 'Ja', 'marcheeeeeee', '2018-10-19 15:45:40'),
(11, 23, 'Ja', 'marcheeeeeee', '2018-10-23 08:18:46'),
(12, 23, 'Ja', 'marcheeeeeee', '2018-10-23 10:03:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `reset_token` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `reset_expires` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `username`, `email`, `date`, `password`, `roles`, `reset_token`, `reset_expires`) VALUES
(2, 'Ouldamri Youssef', 'ouldamri_youssef', 'ouldamri.youssef@gmail.com', '2018-10-18 15:14:19', '$2y$13$twCrUR06CkLDTVeuVqvTC.GOQIl/1Rv88qDEwzde0Zq/TxG.xw5e6', '[\"ROLE_ADMIN\"]', '', 0),
(3, 'Ouldamri Youssef User', 'ouldamri_youssef_user', 'ouldamriyoussef@ymail.com', '2018-10-18 15:14:19', '$2y$13$Nur5VypYFwF.igX0D4Vvfe47STJR9Z3JslOCRqMKquu4YeKQth1Ma', '[\"ROLE_USER\"]', '9d17510e615bbb2d3335957bf1e1355d', 1538470888),
(7, 'Yopmail', 'Youssef', 'youldamri@umanis.com', '2018-10-18 15:14:19', '$2y$13$T4keOrbaSFl1s8KjBo6qBOAv0ZKLy617pdC1fHK/6/wv7tT8kBk4u', '[\"ROLE_USER\"]', '', 0),
(8, 'SuperAdmin', 'SuperAdminUser', 'miroball98@gmail.com', '2018-10-24 13:26:25', '$2y$13$p9wYbEg77QpPAGtSQSlPIuQbUOqdhCStAQ5FvUxKVq5vEu4M86g1.', '[\"ROLE_ADMIN\"]', '3de85d361645c1ce42e1fea4f865f563', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A7294869C` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
