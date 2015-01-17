-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 17 Janvier 2015 à 17:30
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
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Humour'),
(3, 'Cinema'),
(4, 'Geek'),
(5, 'TV'),
(6, 'Voyage'),
(7, 'Mode'),
(8, 'Animaux'),
(9, 'Cuisine'),
(10, 'Art'),
(11, 'Litterature'),
(12, 'Jeux video'),
(13, 'Sante'),
(14, 'Amour'),
(15, 'Politique'),
(16, 'Inclassable');

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
  `image_url` varchar(255) NOT NULL DEFAULT 'nothing.gif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Contenu de la table `elements`
--

INSERT INTO `elements` (`id`, `title`, `description`, `image_url`) VALUES
(36, 'Uncharted 4', 'La suite des aventures de Drake sur PS4', '511lfSLkJZL.jpg'),
(37, 'Tom Clancy''s The Division', 'Un MMO post-apocalyptique', 'thedivision.jpg'),
(38, 'The Order : 1886', 'Un TPS trÃ¨s prometteur', '500px-The_Order_1886.jpg'),
(39, 'The Witcher 3 : Wild Hunt', 'TroisiÃ¨me Ã©pisode de la sÃ©rie', 'witcher.jpg'),
(40, 'Final Fantasy XV', 'Nouveau FF dans un monde moderne', 'ff15.png'),
(41, 'Presque un tableau', '', 'B7HEbvGIIAADzYw.jpg'),
(42, 'Paris', 'Place de la rÃ©publique', 'B7E8dQIIAAARjM-.jpg'),
(43, 'Royan', 'Du beach art plage de Royan', 'B7Fr4jKIgAAib4V.jpg'),
(44, 'Trafalgar Square', 'The National Gallery bleu/blanc/rouge', 'B7FbGCCIIAAt89j.jpg'),
(45, 'Slogan', 'Un maquillage au top', 'B7FnT2TIYAEFFtB.jpg'),
(70, 't', '', 'Assassin_sCreed.jpg'),
(71, 'y', '', '6047979.jpg'),
(72, 'y', '', '511lfSLkJZL.jpg'),
(73, 'y', '', '500px-The_Order_1886.jpg'),
(74, 't', '', 'noel.jpg'),
(75, 't', '', 'Assassin_sCreed.jpg'),
(76, 'y', '', '6047979.jpg'),
(77, 'y', '', '511lfSLkJZL.jpg'),
(78, 'y', '', '500px-The_Order_1886.jpg'),
(79, 't', '', 'noel.jpg'),
(80, 't', '', 'Assassin_sCreed.jpg'),
(81, 'y', '', '6047979.jpg'),
(82, 'y', '', '511lfSLkJZL.jpg'),
(83, 'y', '', '500px-The_Order_1886.jpg'),
(84, 't', '', 'noel.jpg'),
(85, 't', '', 'Assassin_sCreed.jpg'),
(86, 'y', '', '6047979.jpg'),
(87, 'y', '', '511lfSLkJZL.jpg'),
(88, 'y', '', '500px-The_Order_1886.jpg'),
(89, 't', '', 'noel.jpg'),
(90, 't', '', 'Assassin_sCreed.jpg'),
(91, 'y', '', '6047979.jpg'),
(92, 'y', '', '511lfSLkJZL.jpg'),
(93, 'y', '', '500px-The_Order_1886.jpg'),
(94, 't', '', 'noel.jpg'),
(95, 't', '', 'Assassin_sCreed.jpg'),
(96, 'y', '', '6047979.jpg'),
(97, 'y', '', '511lfSLkJZL.jpg'),
(98, 'y', '', '500px-The_Order_1886.jpg'),
(99, 't', '', 'noel.jpg'),
(100, 't', '', 'Assassin_sCreed.jpg'),
(101, 'y', '', '6047979.jpg'),
(102, 'y', '', '511lfSLkJZL.jpg'),
(103, 'y', '', '500px-The_Order_1886.jpg'),
(104, 't', '', 'noel.jpg'),
(105, 't', '', 'Assassin_sCreed.jpg'),
(106, 'y', '', '6047979.jpg'),
(107, 'y', '', '511lfSLkJZL.jpg'),
(108, 'y', '', '500px-The_Order_1886.jpg'),
(109, 'Paris', 'La capitale', 'Paris-France-1.jpg'),
(110, 'Bordeaux', '', 'bordeaux.jpg'),
(111, 'CÃ´te d''Azur', '', 'provence-cote-azur.jpg'),
(112, 'Alpes', '', 'bann_rhone-alpes_001.jpg'),
(113, 'CÃ´te Ouest', '', '7-rivedoux-plage.jpg');

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
(2, 1);

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
(39, 1),
(39, 2),
(40, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `tops`
--

INSERT INTO `tops` (`id`, `title`, `description`, `date`, `category_id`, `user_id`, `source_id`) VALUES
(39, 'Top des jeux les plus attendus de 2015', 'Sur PC & NextGens', '2015-01-17', 12, 1, 0),
(40, 'Top #jesuischarlie', 'Les plus belles photos de la marche en l''honneur de Charlie Hebdo', '2015-01-17', 16, 2, 0),
(45, 'Top destinations franÃ§aises', 'Les plus beaux lieux en France', '2015-01-17', 6, 2, 0);

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
  `avatar_url` varchar(255) NOT NULL DEFAULT 'anonymous.png',
  `follower_nbr` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='gestion des utilisateurs' AUTO_INCREMENT=22 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `first_name`, `last_name`, `mail`, `avatar_url`, `follower_nbr`, `password`) VALUES
(1, 'Elby', '', '', 'elby@gmail.com', 'animaux.jpg', 100, 'elby'),
(2, 'sara', '', '', 'sara@brin.fr', '6047979.jpg', 0, 'sara');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='permet de gerer l''emplacement de chaque element dans un top' AUTO_INCREMENT=52 ;

--
-- Contenu de la table `votes`
--

INSERT INTO `votes` (`id`, `emplacement`, `user_id`, `element_id`, `top_id`) VALUES
(23, 1, 1, 36, 39),
(24, 2, 1, 37, 39),
(25, 3, 1, 38, 39),
(26, 4, 1, 39, 39),
(27, 5, 1, 40, 39),
(28, 1, 2, 41, 40),
(29, 2, 2, 42, 40),
(30, 3, 2, 43, 40),
(31, 4, 2, 44, 40),
(32, 5, 2, 45, 40),
(47, 1, 2, 109, 45),
(48, 2, 2, 110, 45),
(49, 3, 2, 111, 45),
(50, 4, 2, 112, 45),
(51, 5, 2, 113, 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
