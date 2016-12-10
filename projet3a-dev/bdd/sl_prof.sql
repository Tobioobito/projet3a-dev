-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Décembre 2016 à 20:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sl`
--

-- --------------------------------------------------------

--
-- Structure de la table `sl_prof`
--

CREATE TABLE IF NOT EXISTS `sl_prof` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `eta_prof` varchar(255) NOT NULL,
  `nom_prof` varchar(255) NOT NULL,
  `prenom_prof` varchar(255) NOT NULL,
  `matiere_prof1` varchar(255) NOT NULL,
  `matiere_prof2` varchar(255) NOT NULL,
  `matiere_prof3` varchar(255) NOT NULL,
  `classe_prof1` varchar(255) NOT NULL,
  `classe_prof2` varchar(255) NOT NULL,
  `classe_prof3` varchar(255) NOT NULL,
  `classe_prof4` varchar(255) NOT NULL,
  `classe_prof5` varchar(255) NOT NULL,
  `classe_prof6` varchar(255) NOT NULL,
  `classe_prof7` varchar(255) NOT NULL,
  `classe_prof8` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sl_prof`
--

INSERT INTO `sl_prof` (`id_prof`, `eta_prof`, `nom_prof`, `prenom_prof`, `matiere_prof1`, `matiere_prof2`, `matiere_prof3`, `classe_prof1`, `classe_prof2`, `classe_prof3`, `classe_prof4`, `classe_prof5`, `classe_prof6`, `classe_prof7`, `classe_prof8`) VALUES
(1, 'Lycée Paul Langevin', 'Henry', 'Damien', 'Français', 'Philosophie', '', 'Seconde 3', 'Seconde 2', 'Première L 1', 'Terminale L 2', '', '', '', ''),
(2, 'Lycée Paul Langevin', 'Petit', 'Charles', 'Mathématiques', '', '', 'Seconde 1', 'Seconde 2', 'Première S 1', 'Première S 2', 'Première S 3', '', '', ''),
(3, 'Collège Alexandre Dumas', 'Laurent', 'Samuel', 'Musique', 'Droit', '', '5a', '4c', '6a', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
