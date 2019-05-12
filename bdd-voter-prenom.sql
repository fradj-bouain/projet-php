-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 mai 2019 à 14:47
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd-voter-prenom`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` date NOT NULL,
  `last_name` varchar(190) NOT NULL,
  `email` text NOT NULL,
  `metier` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(20) NOT NULL,
  `comment` text NOT NULL,
  `dates` date NOT NULL,
  `image` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `metier` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `comment` text NOT NULL,
  `dates` date DEFAULT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `nom`, `prenom`, `email`, `metier`, `address`, `phone`, `salary`, `comment`, `dates`, `image`) VALUES
(14, 'amira', 'gamoun', 'amira@gmail.com', 'electric', 'mourouj 3', 40, 100, 'electricity of the building', '1993-12-09', 'fre (2).jpg'),
(13, 'jeber', 'selmi', 'jeber@gmail.com', 'fireman', ' khaldoun', 30, 12, 'thank you ', '2007-05-30', 'fre (4).jpeg'),
(12, 'ahmed', 'jeloul', 'ahmed@gmail.com', 'acter', '1 fevrier', 15, 300, 'good job and have a certificate on this job\r\n', '2017-02-27', 'fre1.jpg'),
(15, 'selim', 'randi', 'selim@gmail.com', 'developper', '5 join', 80, 650, 'good developper on web', '2010-12-24', 'job.jpeg'),
(16, 'sami', 'rahoma', 'rami@gmail.com', 'draw', 'fourd 2', 49, 200, 'drawing for many  factory', '2012-01-25', 'fre (1).jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `metier` varchar(20) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `file` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `email`, `dates`, `metier`, `description`, `file`) VALUES
(22, 'gren', 'bouain', 'rami@gmail.com', '2019-04-03', 'najar', 'aejdzadzjdkzkaazd', 'job4.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `formule`
--

DROP TABLE IF EXISTS `formule`;
CREATE TABLE IF NOT EXISTS `formule` (
  `id` int(191) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `note` decimal(10,0) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `nom`, `note`, `mdp`, `email`) VALUES
(1, 'HHH', '161555', '', ''),
(2, 'fredj', '1615', '', ''),
(3, 'fredj', '1615', '', ''),
(4, 'fredj', '1615', '', ''),
(5, 'ff', '5465', '', ''),
(6, 'ggg', '1615', '', ''),
(7, 'fredj', '1615', '', ''),
(8, 'fredj', '1615', '', ''),
(9, 'fredj', '1615', '', ''),
(10, 'fredj', '1615', '', ''),
(11, 'fredj', '1615', '', ''),
(13, 'mohamed', '555', '', ''),
(14, 'mohamed', '555', '', ''),
(15, 'mohamed', '555', '', ''),
(16, 'mohamed', '555', '', ''),
(17, 'mohamed', '555', '', ''),
(18, 'mohamed', '555', '', ''),
(19, 'mohamed', '555', 'ana', 'fredej123@gmail.com'),
(20, 'hhfgf', '6465', 'mdp', 'fredej@gmail.com'),
(25, 'ana', '111111', 'mdp', 'fredh@ana.com'),
(24, 'ali', '5655', 'mdp', 'fredej@jdhek.com'),
(26, 'ana', '111111', 'mdp', 'fredh@ana.com'),
(27, 'aaaa', '3', 'mdp', 'ahmed@gmai.com'),
(28, 'aaaa', '3', 'mdp', 'ahmed@gmai.com'),
(29, 'bouain', '545', '8d7af75abddad0fe5e10e7b1b3b09d6c', 'rami@gmail.com'),
(30, 'jnqksn', '455', 'mdp', 'fredej@gmail.com'),
(31, 'dali', '454', 'mdp', 'fredej@gmail.com'),
(32, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(33, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(34, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(35, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(36, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(37, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(38, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(39, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(40, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(41, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(42, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(43, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(44, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(45, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(46, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(47, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(48, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(49, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(50, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(51, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(52, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(53, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(54, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(55, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(56, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(57, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(58, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(59, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(60, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(61, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(62, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(63, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(64, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(65, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(66, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(67, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(68, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(69, 'fradj', '51', 'mdp', 'fredej@gmail.com'),
(70, 'marrikwana', '77777', 'mdp', 'rami@gmail.com'),
(71, 'marrikwana', '77777', 'mdp', 'rami@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) UNSIGNED DEFAULT NULL,
  `nom` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password` varchar(190) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `nom`, `description`, `email`, `password`) VALUES
(1, 'fradj', 'hello', 'fradj@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
