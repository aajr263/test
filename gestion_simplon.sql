-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 26 sep. 2023 à 07:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_simplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

DROP TABLE IF EXISTS `enregistrement`;
CREATE TABLE IF NOT EXISTS `enregistrement` (
  `email` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `contact` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`email`, `nom`, `prénom`, `contact`) VALUES
('koffimarie10@gmail.com', 'KOFFI', 'MARIE', '0142836739'),
('bakoubrice23@gmail.com', 'BAKOU', 'BRICE', '0809675445'),
('djomosephora@gmail.com', 'DJOMO', 'SEPHORA', '0908070604'),
('amianroxane43@gmail.com', 'AMIAN', 'ROXANE', '0806047865');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
