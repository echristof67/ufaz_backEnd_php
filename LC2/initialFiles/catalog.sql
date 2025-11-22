-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 16 fév. 2023 à 10:09
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lpdwca21`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalog`
--

DROP TABLE IF EXISTS `catalog`;
CREATE TABLE IF NOT EXISTS `catalog` (
  `idCD` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`idCD`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `catalog`
--

INSERT INTO `catalog` (`idCD`, `title`, `artist`, `country`, `company`, `price`, `year`) VALUES
(1, 'Empire Burlesque', 'Bob Dylan', 'USA', 'Columbia', 10.9, 1985),
(2, 'Hide your heart', 'Bonnie Tyler', 'UK', 'CBS Records', 9.9, 1988),
(3, 'Greatest Hits', 'Dolly Parton', 'USA', 'RCA', 9.9, 1982),
(4, 'Still got the blues', 'Gary Moore', 'UK', 'Virgin records', 10.2, 1990),
(5, 'Eros', 'Eros Ramazzotti', 'EU', 'BMG', 9.9, 1997),
(6, 'One night only', 'Bee Gees', 'UK', 'Polydor', 10.9, 1998),
(7, 'Sylvias Mother', 'Dr.Hook', 'UK', 'CBS', 8.1, 1973),
(8, 'Maggie May', 'Rod Stewart', 'UK', 'Pickwick', 8.5, 1990),
(9, 'Romanza', 'Andrea Bocelli', 'EU', 'Polydor', 10.8, 1996),
(10, 'When a man loves a woman', 'Percy Sledge', 'USA', 'Atlantic', 8.7, 1987),
(11, 'Black angel', 'Savage Rose', 'EU', 'Mega', 11, 1995),
(12, '1999 Grammy Nominees', 'Many', 'USA', 'Grammy', 10.2, 1999),
(13, 'For the good times', 'Kenny Rogers', 'UK', 'Mucik Master', 8.7, 1995),
(14, 'Big Willie style', 'Will Smith', 'USA', 'Columbia', 9.9, 1997),
(15, 'Tupelo Honey', 'Van Morrison', 'UK', 'Polydor', 8.2, 1971),
(16, 'Soulsville', 'Jorn Hoel', 'Norway', 'WEA', 7.9, 1996),
(17, 'The very best of', 'Cat Stevens', 'UK', 'Island', 8.9, 1990),
(18, 'Stop', 'Sam Brown', 'UK', 'A and M', 8.9, 1988),
(19, 'Bridge of Spies', 'T`Pau', 'UK', 'Siren', 7.9, 1987),
(20, 'Private Dancer', 'Tina Turner', 'UK', 'Capitol', 8.9, 1983),
(21, 'Midt om natten', 'Kim Larsen', 'EU', 'Medley', 7.8, 1983),
(22, 'Pavarotti Gala Concert', 'Luciano Pavarotti', 'UK', 'DECCA', 9.9, 1991),
(23, 'The dock of the bay', 'Otis Redding', 'USA', 'Atlantic', 7.9, 1987),
(24, 'Picture book', 'Simply Red', 'EU', 'Elektra', 7, 1985),
(25, 'Red', 'The Communards', 'UK', 'London', 7.8, 1987),
(26, 'Unchain my heart', 'Joe Cocker', 'USA', 'EMI', 8.2, 1987);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
