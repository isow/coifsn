-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 11 Février 2013 à 16:37
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ibrahimacoifsn`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_modele` int(11) DEFAULT NULL,
  `id_salon` int(11) DEFAULT NULL,
  `titre_article` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `notice` text,
  `actif` tinyint(1) DEFAULT '1',
  `article_une` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diaporama`
--

CREATE TABLE IF NOT EXISTS `diaporama` (
  `id_diaporama` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) DEFAULT NULL,
  `nom_diaporama` varchar(256) DEFAULT NULL,
  `notice` text,
  `actif` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_diaporama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modele_article`
--

CREATE TABLE IF NOT EXISTS `modele_article` (
  `id_modele` int(11) NOT NULL AUTO_INCREMENT,
  `nom_modele` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_modele`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) DEFAULT NULL,
  `id_diaporama` int(11) DEFAULT NULL,
  `notice` text,
  `image` varchar(256) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `banniere` varchar(256) DEFAULT NULL,
  `notice` text,
  `presentation` text,
  `position` int(11) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT '1',
  `tag` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id_region`, `nom_region`, `image`, `banniere`, `notice`, `presentation`, `position`, `actif`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, NULL, NULL, NULL, 1, NULL, '1900-01-01 00:00:00', '2013-02-09 14:12:21');

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `id_ville` int(11) DEFAULT NULL,
  `nom_salon` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `banniere` varchar(256) DEFAULT NULL,
  `notice` text,
  `presentation` text,
  `position` int(11) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT '0',
  `tag` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salon_une_region`
--

CREATE TABLE IF NOT EXISTS `salon_une_region` (
  `id_salon_une_region` int(11) NOT NULL AUTO_INCREMENT,
  `id_salon` int(11) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_salon_une_region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salon_une_ville`
--

CREATE TABLE IF NOT EXISTS `salon_une_ville` (
  `id_salon_une_ville` int(11) NOT NULL AUTO_INCREMENT,
  `id_salon` int(11) DEFAULT NULL,
  `id_ville` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_salon_une_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id_user_admin` int(11) NOT NULL AUTO_INCREMENT,
  `user_nom` varchar(256) DEFAULT NULL,
  `user_login` varchar(256) DEFAULT NULL,
  `user_password` varchar(8) DEFAULT NULL,
  `est_administrateur` tinyint(1) DEFAULT '0',
  `est_client` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `id_region` int(11) DEFAULT NULL,
  `nom_ville` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `banniere` varchar(256) DEFAULT NULL,
  `notice` text,
  `presentation` text,
  `position` int(11) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT '1',
  `tag` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
