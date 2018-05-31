-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 31 mai 2018 à 12:27
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet5`
--

-- --------------------------------------------------------

--
-- Structure de la table `avbf_adherents`
--

DROP TABLE IF EXISTS `avbf_adherents`;
CREATE TABLE IF NOT EXISTS `avbf_adherents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avbf_adherents`
--

INSERT INTO `avbf_adherents` (`id`, `car`, `image`, `year`) VALUES
(1, 'Peugeot 404', 'car-1.png', 1964),
(2, 'MGB', 'car-2.png', 1965),
(3, 'Traction Avant', 'car-3.png', 1942),
(4, 'Rolls Royce Phantom 3', 'car-4.png', 1936);

-- --------------------------------------------------------

--
-- Structure de la table `avbf_categories`
--

DROP TABLE IF EXISTS `avbf_categories`;
CREATE TABLE IF NOT EXISTS `avbf_categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avbf_categories`
--

INSERT INTO `avbf_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Categorie1', 'premiere cat'),
(2, 'Catégorie 2', 'dfggfdgdgf'),
(3, 'Catégorie 3', 'dfgsddfsdf');

-- --------------------------------------------------------

--
-- Structure de la table `avbf_contact`
--

DROP TABLE IF EXISTS `avbf_contact`;
CREATE TABLE IF NOT EXISTS `avbf_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avbf_posts`
--

DROP TABLE IF EXISTS `avbf_posts`;
CREATE TABLE IF NOT EXISTS `avbf_posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avbf_posts`
--

INSERT INTO `avbf_posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(1, 'fgdfgg', '2018-05-19 18:37:08', 1, 'christelle76'),
(2, 'gggg', '2018-05-30 13:49:18', 1, 'christelle76'),
(4, 'bite !', '2018-05-30 19:10:38', 1, 'christelle76');

-- --------------------------------------------------------

--
-- Structure de la table `avbf_topics`
--

DROP TABLE IF EXISTS `avbf_topics`;
CREATE TABLE IF NOT EXISTS `avbf_topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avbf_topics`
--

INSERT INTO `avbf_topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(1, 'Presentation', '2018-05-13 00:00:00', 1, 1),
(2, 'Règles', '2018-05-13 23:05:03', 1, 1),
(3, 'Nos adhérents', '2018-05-13 23:06:15', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `avbf_user`
--

DROP TABLE IF EXISTS `avbf_user`;
CREATE TABLE IF NOT EXISTS `avbf_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_img` varchar(255) NOT NULL,
  `user_pseudo` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avbf_user`
--

INSERT INTO `avbf_user` (`user_id`, `user_img`, `user_pseudo`, `user_password`) VALUES
(1, 'avatar-1.png', 'christelle76', '8944a423b08994616929164bb19cecd8'),
(2, 'avatar-2.png', 'user1', 'b1734c3c466b3ddcdd3b841d02a24b56'),
(3, 'avatar-3.png', 'user2', 'd079f41b77a39477b1547e6259d70ebd'),
(4, 'avatar-4.png', 'user3', '9c47a0019e1a7db25de579f2f3b62964');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
