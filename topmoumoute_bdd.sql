-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Janvier 2015 à 08:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `topmoumoute_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `elements`
--

INSERT INTO `elements` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'element title', 'description title', 'http://www.recipe.com/images/mini-chocolate-chip-muffins-24900025rca-ss.jpg'),
(2, 'element 2 titre', 'dddddddddddddddddd\r\neeeeeeeeeeeeeeeeeeeee\r\nsssssssssssssssss\r\nccccccccccccccccc\r\nrrrrrrrrrrrrrrrr\r\niiiiiiiiiiiiii\r\npppppppppppppppp\r\nsssssssssssss\r\niiiiiiiiiiiiiiiiii\r\nooooooooooooooooooo\r\nnnnnnnnnnnnnnnnnnnnn', '');

-- --------------------------------------------------------

--
-- Structure de la table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `top_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tops`
--

CREATE TABLE IF NOT EXISTS `tops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tops`
--

INSERT INTO `tops` (`id`, `title`, `description`, `date`, `category_id`, `user_id`, `source_id`) VALUES
(1, 'top test', '', '2014-12-01', 0, 1, 1),
(2, 'Top 10 des pays', 'Meilleurs destination de vacance', '0000-00-00', 0, 0, 0),
(5, 'Les meilleurs gateaux', 'Parce que j''ai faim !', '0000-00-00', 0, 0, 0);

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
  `avatar_url` varchar(255) NOT NULL,
  `follower_nbr` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='gestion des utilisateurs' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `first_name`, `last_name`, `mail`, `avatar_url`, `follower_nbr`, `password`) VALUES
(1, 'Elby', 'elodie  ', 'B', 'e.b@gmail.fr', '', 100, 'elby  ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='permet de gerer l''emplacement de chaque element dans un top' AUTO_INCREMENT=5 ;

--
-- Contenu de la table `votes`
--

INSERT INTO `votes` (`id`, `emplacement`, `user_id`, `element_id`, `top_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 2, 1),
(3, 1, 1, 1, 5),
(4, 1, 1, 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
