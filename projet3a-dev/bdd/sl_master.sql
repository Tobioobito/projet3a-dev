-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 27 Novembre 2016 à 03:07
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
-- Structure de la table `sl_master`
--

CREATE TABLE IF NOT EXISTS `sl_master` (
  `id_master` int(11) NOT NULL AUTO_INCREMENT,
  `paiement_master` int(11) NOT NULL,
  `nom_master` varchar(255) NOT NULL,
  `prenom_master` varchar(255) NOT NULL,
  `date_nai_master` varchar(255) NOT NULL,
  `mail_master` varchar(255) NOT NULL,
  `mail_confirm_master` tinyint(1) NOT NULL,
  `cle_confirm_master` int(255) NOT NULL,
  `mdp_master` varchar(255) NOT NULL,
  `tel_master` varchar(255) NOT NULL,
  `nom_eta_master` varchar(255) NOT NULL,
  `adresse_eta_master` varchar(255) NOT NULL,
  `ville_eta_master` varchar(255) NOT NULL,
  `type_eta_master1` varchar(255) NOT NULL,
  `type_eta_master2` varchar(255) NOT NULL,
  `type_eta_master3` varchar(255) NOT NULL,
  `type_eta_master4` varchar(255) NOT NULL,
  `spe_eta_master1` varchar(255) NOT NULL,
  `spe_eta_master2` varchar(255) NOT NULL,
  `spe_eta_master3` varchar(255) NOT NULL,
  `date_crea_master` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_master`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
