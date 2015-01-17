-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 17 Janvier 2015 à 10:53
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `topmoumoute_bdd`
--
CREATE DATABASE IF NOT EXISTS `topmoumoute_bdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `topmoumoute_bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Humour'),
(2, 'Film');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `top_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='1000 carac max par commentaire' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `elements`
--

INSERT INTO `elements` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'element title', 'description title', 'http://www.recipe.com/images/mini-chocolate-chip-muffins-24900025rca-ss.jpg'),
(2, 'element 2 titre', '', ''),
(3, 'Fraisier', 'Parce que les fraises c''est trop bon !', ''),
(4, 'FÃ´ret Noire', 'Du chocolat !', ''),
(5, 'Eclair au chocolat', 'Simple mais efficace', ''),
(6, 'Chocolatine', 'Et pas pain au chocolat !', ''),
(7, 'Meringue', 'Que du sucre.. !', ''),
(8, 'USA', 'La base, mais on peut (presque) tout y voir', ''),
(9, 'Canada', 'C''est joli la neige', ''),
(10, 'Japon', 'Paysages et culture ', ''),
(11, 'Madagascar', 'Pleins d''animaux qu''on ne trouve nulle part ailleurs !', ''),
(12, '', '', ''),
(13, 'tt', 'tt', ''),
(14, 'yy', 'yy', ''),
(15, 'a', '', ''),
(16, 'z', '', ''),
(17, 'gully1', '', ''),
(18, 'gully2', '', ''),
(19, 'gully1', '', ''),
(20, 'gully2', '', ''),
(21, 'gully1', '', ''),
(22, 'gully2', '', 'animaux.jpg'),
(23, 'image 1', '', ''),
(24, 'image 2', '', ''),
(25, 'image 3', '', ''),
(26, 'image 4', '', ''),
(27, 'image 1', '', 'cute.jpg'),
(28, 'image 2', '', 'film.jpg'),
(29, 'image 3', '', 'appli.png'),
(30, 'image 4', '', 'pc.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `followers`
--

INSERT INTO `followers` (`user_id`, `follower_id`) VALUES
(1, 2),
(1, 9),
(1, 16),
(2, 1),
(2, 9),
(2, 16);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `top_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`top_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `likes`
--

INSERT INTO `likes` (`top_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 9),
(1, 16),
(2, 1),
(5, 1),
(6, 1),
(6, 2),
(6, 9),
(6, 16),
(7, 1),
(29, 1),
(30, 1),
(34, 1),
(35, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tops`
--

CREATE TABLE IF NOT EXISTS `tops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_roman_ci NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `tops`
--

INSERT INTO `tops` (`id`, `title`, `description`, `date`, `category_id`, `user_id`, `source_id`) VALUES
(1, 'top test', '', '2014-12-01', 0, 1, 1),
(2, 'Top 10 des pays', 'Meilleurs destination de vacance', '0000-00-00', 0, 0, 0),
(5, 'Les meilleurs gateaux', 'Parce que j''ai faim !', '0000-00-00', 0, 0, 0),
(6, 'Les meilleures patisseries', 'Un petit creux ?', '2015-01-13', 1, 2, 0),
(7, 'Les plus beaux voyages', 'OÃ¹ aimeriez-vous aller ?', '2015-01-13', 1, 2, 0),
(8, 'Test', 'test', '2015-01-17', 1, 1, 0),
(9, 'Test', 'test', '2015-01-17', 1, 1, 0),
(10, 'Test', 'test', '2015-01-17', 1, 1, 0),
(11, 'Test', 'test', '2015-01-17', 1, 1, 0),
(12, 'Test', 'test', '2015-01-17', 1, 1, 0),
(13, 'Test', 'test', '2015-01-17', 1, 1, 0),
(14, 'Test', 'test', '2015-01-17', 1, 1, 0),
(15, 'Test', 'test', '2015-01-17', 1, 1, 0),
(16, 'Test', 'test', '2015-01-17', 1, 1, 0),
(17, 'Test', 'test', '2015-01-17', 1, 1, 0),
(18, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(19, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(20, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(21, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(22, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(23, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(24, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(25, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(26, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(27, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(28, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(29, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(30, 'Top 5 test', 'test', '2015-01-17', 1, 1, 0),
(31, 'Test', '', '2015-01-17', 1, 1, 0),
(32, 'yolo', 'yolo', '2015-01-17', 1, 1, 0),
(33, 'azert', '', '2015-01-17', 1, 1, 0),
(34, 'gully', '', '2015-01-17', 1, 1, 0),
(35, 'Test images', '', '2015-01-17', 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(55) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `avatar_url` varchar(255) NOT NULL DEFAULT 'elsa.png',
  `follower_nbr` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='gestion des utilisateurs' AUTO_INCREMENT=19 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `first_name`, `last_name`, `mail`, `avatar_url`, `follower_nbr`, `password`) VALUES
(1, 'Elby', '', '', 'elby@gmail.com', 'animaux.jpg', 100, 'elby'),
(2, 'sara', '', '', 'sara@brin.fr', '6047979.jpg', 0, 'sara'),
(8, 'test', '', '', 'test@mail.fr', 'http://upload.wikimedia.org/wikipedia/en/c/cf/YoungSimbaSmilestlk.png', 0, 'test'),
(9, 'toto', '', '', 'toto', 'http://upload.wikimedia.org/wikipedia/en/c/cf/YoungSimbaSmilestlk.png', 0, 'toto'),
(16, 'marie', '', '', 'marie@mc.com', 'http://upload.wikimedia.org/wikipedia/en/c/cf/YoungSimbaSmilestlk.png', 0, 'marie  ');

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emplacement` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `top_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='permet de gerer l''emplacement de chaque element dans un top' AUTO_INCREMENT=23 ;

--
-- Contenu de la table `votes`
--

INSERT INTO `votes` (`id`, `emplacement`, `user_id`, `element_id`, `top_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 2, 1),
(3, 1, 1, 1, 5),
(4, 1, 1, 1, 2),
(5, 1, 2, 3, 6),
(6, 2, 2, 4, 6),
(7, 3, 2, 5, 6),
(8, 4, 2, 6, 6),
(9, 5, 2, 7, 6),
(10, 1, 2, 8, 7),
(11, 2, 2, 9, 7),
(12, 3, 2, 10, 7),
(13, 4, 2, 11, 7),
(14, 5, 2, 12, 7),
(15, 1, 1, 13, 31),
(16, 2, 1, 14, 31),
(17, 1, 1, 21, 34),
(18, 2, 1, 22, 34),
(19, 1, 1, 27, 35),
(20, 2, 1, 28, 35),
(21, 3, 1, 29, 35),
(22, 4, 1, 30, 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
