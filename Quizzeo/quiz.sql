-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 juin 2022 à 09:20
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

DROP TABLE IF EXISTS `choix`;
CREATE TABLE IF NOT EXISTS `choix` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(100) NOT NULL,
  `bonnereponse` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE IF NOT EXISTS `online` (
  `qid` int(150) NOT NULL AUTO_INCREMENT,
  `question` varchar(150) NOT NULL,
  `option1` varchar(150) NOT NULL,
  `option2` varchar(150) NOT NULL,
  `option3` varchar(150) NOT NULL,
  `option4` varchar(150) NOT NULL,
  `corrans` varchar(150) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `corrans`) VALUES
(1, 'what is your name', 'zoro', 'Raph', 'babidi', 'eric', 'Raph'),
(2, 'what is your country', 'grandline', 'benin', 'ethopia', 'canada', 'grandline'),
(3, 'what is your fav anime', 'one piece', 'dbz', 'sao', 'hxh', 'sao'),
(4, 'are you tired of school?', 'yes', 'sure', 'ofcourse', 'eventually', 'yes'),
(5, 'what is your fav sport?', 'football', 'basketball', 'MMA', 'swimming', ''),
(6, 'what is your fav food', 'garri', 'okro', 'BHB', 'chicken', '');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `intitulequestion` varchar(100) NOT NULL,
  `difficulte` int(100) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `difficulte` int(100) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  `ro_le` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `pass_word`, `ro_le`) VALUES
(5, 'the_user', 'rapfom@gmail.com', '1234', 1),
(4, 'the_quizzeur', 'rapfom@gmail.com', 'root', 2),
(6, 'le_quizzeur', 'rapfom@gmail.com', 'raphael', 2),
(7, 'victory', 'rapfom@gmail.com', 'vv', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
