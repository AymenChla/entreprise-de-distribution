-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 16 Juillet 2017 à 06:57
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `entreprise_de_distribution`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE DATABASE entreprise_de_distribution;
use entreprise_de_distribution;


CREATE TABLE `admin` (
  `NOADMIN` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`NOADMIN`, `NOM`, `PRENOM`, `EMAIL`, `PASSWORD`) VALUES
(1, 'chla', 'aymen', 'aymen.chla@gmail.com', 'monkey');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NOCLI` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `SEXE` tinyint(1) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `EMAIL` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `TEL` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ADRESSE` varchar(255) DEFAULT NULL,
  `VILLE` varchar(255) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL,
  `CA` double DEFAULT NULL,
  `NOD` int(11) DEFAULT NULL,
  `NOD_livraison_secours` int(11) DEFAULT NULL,
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NOCLI`, `NOM`, `PRENOM`, `SEXE`, `DATE_NAISSANCE`, `EMAIL`, `TEL`, `ADRESSE`, `VILLE`, `CP`, `CA`, `NOD`, `NOD_livraison_secours`, `PASSWORD`) VALUES
(53, 'CHLA', 'Aymen', 1, '1995-07-09', 'aymen.chla@gmail.com', '0645454545', '184 rue cimetiere israelite', 'casablanca', NULL, NULL, NULL, NULL, '18c28604dd31094a8d69dae60f1bcd347f1afc5a'),
(54, 'CHLA', 'Aymen', 1, '2016-04-28', 'aymen@gmail.com', '0667567545', '184 rue cimetiere israelite', 'casablanca', NULL, NULL, NULL, NULL, 'ab87d24bdc7452e55738deb5f868e1f16dea5ace'),
(55, 'AYMEN', 'Chla', 1, '1995-07-09', 'freenemya1@gmail.com', '0600000000', 'xxxxx xxxxxx', 'casablanca', NULL, NULL, NULL, NULL, 'e7c931bba8915edb2fd3ca7c3716bcbee4fc1a2b');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `NOCOM` int(11) NOT NULL,
  `DAC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NOF` int(11) NOT NULL,
  `NOCLI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`NOCOM`, `DAC`, `NOF`, `NOCLI`) VALUES
(1, '2016-05-20 12:00:43', 122, 53),
(2, '2016-05-20 12:01:47', 123, 53),
(3, '2016-05-20 12:25:55', 124, 54),
(4, '2016-05-20 12:26:20', 125, 54),
(5, '2016-05-20 12:45:21', 126, 54),
(6, '2016-05-20 12:46:09', 127, 54),
(7, '2016-05-20 12:47:16', 128, 54),
(8, '2016-05-20 12:47:51', 129, 54),
(9, '2016-05-20 12:47:59', 130, 54),
(10, '2016-05-20 12:48:07', 131, 54),
(11, '2016-05-20 12:49:15', 132, 54),
(12, '2016-05-20 12:49:36', 133, 54),
(13, '2016-05-20 12:50:35', 134, 54),
(14, '2016-05-20 12:51:54', 135, 54),
(15, '2016-05-20 12:57:05', 136, 54),
(16, '2016-05-20 13:00:54', 137, 54),
(17, '2016-05-20 13:01:09', 138, 54),
(18, '2016-05-20 13:01:30', 139, 54),
(19, '2016-05-20 13:01:46', 140, 54),
(20, '2016-05-20 13:01:54', 141, 54),
(21, '2016-05-20 13:03:21', 142, 54),
(22, '2016-05-20 13:06:34', 143, 54),
(23, '2016-05-20 13:07:06', 144, 54),
(24, '2016-05-20 13:07:53', 145, 54),
(25, '2016-05-20 13:07:58', 146, 54),
(26, '2016-05-20 13:08:06', 147, 54),
(27, '2016-05-20 13:09:16', 149, 54),
(28, '2016-05-20 13:09:42', 150, 54),
(29, '2016-05-20 13:10:03', 151, 54),
(30, '2016-05-20 13:13:07', 152, 54),
(31, '2016-05-20 13:13:19', 153, 54),
(32, '2016-05-20 13:15:41', 154, 54),
(33, '2016-05-20 13:18:11', 155, 54),
(34, '2016-05-20 13:20:58', 156, 54),
(35, '2016-05-20 13:21:38', 157, 54),
(36, '2016-05-20 14:04:51', 158, 54);

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `NOD` int(11) NOT NULL,
  `VILLE_DEP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `depot`
--

INSERT INTO `depot` (`NOD`, `VILLE_DEP`) VALUES
(1, 'casablanca'),
(2, 'el jadida'),
(3, 'tanger'),
(4, 'marrakesh'),
(5, 'rabat');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NOF` int(11) NOT NULL,
  `DAF` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MOF` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`NOF`, `DAF`, `MOF`) VALUES
(43, '2016-05-14 03:16:56', 43620),
(44, '2016-05-14 03:17:37', 8352),
(45, '2016-05-14 03:19:15', 8352),
(46, '2016-05-14 03:19:29', 8352),
(47, '2016-05-14 03:21:45', 8352),
(48, '2016-05-14 03:22:30', 8352),
(49, '2016-05-14 03:26:40', 8352),
(50, '2016-05-14 03:27:19', 8352),
(51, '2016-05-14 03:29:03', 8352),
(52, '2016-05-14 03:45:30', 8352),
(53, '2016-05-14 03:45:37', 8352),
(54, '2016-05-14 03:47:05', 8352),
(55, '2016-05-14 03:49:25', 8352),
(56, '2016-05-14 03:50:51', 8352),
(57, '2016-05-14 03:51:01', 8352),
(58, '2016-05-14 03:53:34', 8352),
(59, '2016-05-14 03:57:00', 8352),
(60, '2016-05-14 03:57:47', 8352),
(61, '2016-05-14 04:00:22', 8352),
(62, '2016-05-14 04:05:03', 8352),
(63, '2016-05-14 04:05:15', 8352),
(64, '2016-05-14 04:27:39', 8352),
(65, '2016-05-14 04:31:39', 8352),
(66, '2016-05-14 04:31:45', 8352),
(67, '2016-05-14 04:31:53', 8352),
(68, '2016-05-14 04:33:54', 8352),
(69, '2016-05-14 04:40:00', 8352),
(70, '2016-05-14 04:42:58', 8352),
(71, '2016-05-14 04:50:35', 8352),
(72, '2016-05-14 04:56:23', 8352),
(73, '2016-05-14 04:59:08', 8352),
(74, '2016-05-17 01:12:39', 17317.2),
(75, '2016-05-19 07:55:27', 18384),
(76, '2016-05-19 08:00:11', 18384),
(77, '2016-05-19 08:00:15', 18384),
(78, '2016-05-19 08:08:22', 18384),
(79, '2016-05-19 08:11:30', 18384),
(80, '2016-05-19 08:11:36', 18384),
(81, '2016-05-19 08:11:37', 18384),
(82, '2016-05-19 08:14:04', 18384),
(83, '2016-05-19 08:14:28', 18384),
(84, '2016-05-19 08:14:35', 18384),
(85, '2016-05-19 08:14:49', 18384),
(86, '2016-05-19 08:16:13', 18384),
(87, '2016-05-19 08:16:37', 18384),
(88, '2016-05-19 08:17:00', 18384),
(89, '2016-05-19 08:17:22', 18384),
(90, '2016-05-19 08:17:54', 18384),
(91, '2016-05-19 08:19:20', 18384),
(92, '2016-05-19 08:19:34', 18384),
(93, '2016-05-19 08:19:41', 18384),
(94, '2016-05-19 08:23:09', 18384),
(95, '2016-05-19 08:23:24', 18384),
(96, '2016-05-19 08:23:53', 18384),
(97, '2016-05-19 08:23:58', 18384),
(98, '2016-05-19 08:24:39', 18384),
(99, '2016-05-19 08:25:15', 18384),
(100, '2016-05-19 08:25:41', 18384),
(101, '2016-05-19 08:28:15', 18384),
(102, '2016-05-19 08:28:24', 18384),
(103, '2016-05-19 08:28:49', 18384),
(104, '2016-05-19 08:29:07', 18384),
(105, '2016-05-19 08:29:32', 18384),
(106, '2016-05-19 08:29:58', 18384),
(107, '2016-05-19 12:03:36', 18384),
(108, '2016-05-20 03:12:48', 19384.8),
(109, '2016-05-20 11:02:52', 36784.8),
(110, '2016-05-20 11:02:55', 36784.8),
(111, '2016-05-20 11:02:59', 36784.8),
(112, '2016-05-20 11:08:46', 36784.8),
(113, '2016-05-20 11:08:48', 36784.8),
(114, '2016-05-20 11:09:46', 36784.8),
(115, '2016-05-20 11:09:55', 36784.8),
(116, '2016-05-20 11:51:12', 36784.8),
(117, '2016-05-20 11:52:03', 36784.8),
(118, '2016-05-20 11:53:16', 36784.8),
(119, '2016-05-20 11:53:19', 36784.8),
(120, '2016-05-20 11:53:21', 36784.8),
(121, '2016-05-20 12:00:14', 36784.8),
(122, '2016-05-20 12:00:43', 36784.8),
(123, '2016-05-20 12:01:47', 36784.8),
(124, '2016-05-20 12:25:55', 24720),
(125, '2016-05-20 12:26:20', 960),
(126, '2016-05-20 12:45:21', 960),
(127, '2016-05-20 12:46:09', 960),
(128, '2016-05-20 12:47:16', 960),
(129, '2016-05-20 12:47:51', 960),
(130, '2016-05-20 12:47:59', 960),
(131, '2016-05-20 12:48:07', 960),
(132, '2016-05-20 12:49:15', 960),
(133, '2016-05-20 12:49:36', 960),
(134, '2016-05-20 12:50:35', 960),
(135, '2016-05-20 12:51:54', 960),
(136, '2016-05-20 12:57:05', 960),
(137, '2016-05-20 13:00:54', 960),
(138, '2016-05-20 13:01:09', 960),
(139, '2016-05-20 13:01:30', 960),
(140, '2016-05-20 13:01:46', 960),
(141, '2016-05-20 13:01:54', 960),
(142, '2016-05-20 13:03:21', 960),
(143, '2016-05-20 13:06:34', 960),
(144, '2016-05-20 13:07:06', 960),
(145, '2016-05-20 13:07:53', 960),
(146, '2016-05-20 13:07:58', 960),
(147, '2016-05-20 13:08:06', 960),
(148, '2016-05-20 13:08:46', 960),
(149, '2016-05-20 13:09:16', 960),
(150, '2016-05-20 13:09:42', 960),
(151, '2016-05-20 13:10:03', 960),
(152, '2016-05-20 13:13:07', 960),
(153, '2016-05-20 13:13:19', 960),
(154, '2016-05-20 13:15:41', 960),
(155, '2016-05-20 13:18:11', 10944),
(156, '2016-05-20 13:20:58', 21888),
(157, '2016-05-20 13:21:38', 45888),
(158, '2016-05-20 14:04:51', 1080),
(159, '2016-05-20 14:09:58', 1080);

-- --------------------------------------------------------

--
-- Structure de la table `lignec`
--

CREATE TABLE `lignec` (
  `NOCOM` int(11) NOT NULL,
  `NOP` int(11) NOT NULL,
  `QTC` int(11) NOT NULL,
  `DEL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignec`
--

INSERT INTO `lignec` (`NOCOM`, `NOP`, `QTC`, `DEL`) VALUES
(32, 1, 1, '2016-06-09'),
(33, 6, 2, '2016-06-09'),
(34, 6, 4, '2016-06-09'),
(35, 2, 2, '2016-06-09'),
(35, 6, 4, '2016-06-09'),
(36, 10, 1, '2016-06-09');

-- --------------------------------------------------------

--
-- Structure de la table `lignef`
--

CREATE TABLE `lignef` (
  `NOP` int(11) NOT NULL,
  `NOF` int(11) NOT NULL,
  `QTF` int(11) NOT NULL,
  `MOP` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignef`
--

INSERT INTO `lignef` (`NOP`, `NOF`, `QTF`, `MOP`) VALUES
(1, 43, 3, 800),
(1, 47, 3, 800),
(1, 48, 3, 800),
(1, 49, 3, 800),
(1, 50, 3, 800),
(1, 51, 3, 800),
(1, 52, 3, 800),
(1, 53, 3, 800),
(1, 54, 3, 800),
(1, 55, 3, 800),
(1, 56, 3, 800),
(1, 57, 3, 800),
(1, 58, 3, 800),
(1, 59, 3, 800),
(1, 60, 3, 800),
(1, 61, 3, 800),
(1, 62, 3, 800),
(1, 63, 3, 800),
(1, 64, 3, 800),
(1, 65, 3, 800),
(1, 66, 3, 800),
(1, 67, 3, 800),
(1, 68, 3, 800),
(1, 69, 3, 800),
(1, 70, 3, 800),
(1, 71, 3, 800),
(1, 72, 3, 800),
(1, 73, 3, 800),
(1, 75, 2, 800),
(1, 76, 2, 800),
(1, 77, 2, 800),
(1, 78, 2, 800),
(1, 79, 2, 800),
(1, 80, 2, 800),
(1, 81, 2, 800),
(1, 82, 2, 800),
(1, 83, 2, 800),
(1, 84, 2, 800),
(1, 85, 2, 800),
(1, 86, 2, 800),
(1, 87, 2, 800),
(1, 88, 2, 800),
(1, 89, 2, 800),
(1, 90, 2, 800),
(1, 91, 2, 800),
(1, 92, 2, 800),
(1, 93, 2, 800),
(1, 94, 2, 800),
(1, 95, 2, 800),
(1, 96, 2, 800),
(1, 97, 2, 800),
(1, 98, 2, 800),
(1, 99, 2, 800),
(1, 100, 2, 800),
(1, 101, 2, 800),
(1, 102, 2, 800),
(1, 103, 2, 800),
(1, 104, 2, 800),
(1, 105, 2, 800),
(1, 106, 2, 800),
(1, 107, 2, 800),
(1, 109, 5, 800),
(1, 110, 5, 800),
(1, 111, 5, 800),
(1, 112, 5, 800),
(1, 113, 5, 800),
(1, 114, 5, 800),
(1, 115, 5, 800),
(1, 116, 5, 800),
(1, 117, 5, 800),
(1, 118, 5, 800),
(1, 119, 5, 800),
(1, 120, 5, 800),
(1, 121, 5, 800),
(1, 122, 5, 800),
(1, 123, 5, 800),
(1, 124, 1, 800),
(1, 125, 1, 800),
(1, 126, 1, 800),
(1, 128, 1, 800),
(1, 129, 1, 800),
(1, 130, 1, 800),
(1, 131, 1, 800),
(1, 132, 1, 800),
(1, 133, 1, 800),
(1, 134, 1, 800),
(1, 135, 1, 800),
(1, 136, 1, 800),
(1, 137, 1, 800),
(1, 138, 1, 800),
(1, 139, 1, 800),
(1, 140, 1, 800),
(1, 141, 1, 800),
(1, 142, 1, 800),
(1, 143, 1, 800),
(1, 144, 1, 800),
(1, 145, 1, 800),
(1, 146, 1, 800),
(1, 147, 1, 800),
(1, 148, 1, 800),
(1, 149, 1, 800),
(1, 150, 1, 800),
(1, 151, 1, 800),
(1, 152, 1, 800),
(1, 153, 1, 800),
(1, 154, 1, 800),
(2, 108, 1, 10000),
(2, 124, 1, 10000),
(2, 157, 2, 10000),
(3, 43, 3, 9800),
(3, 74, 1, 9800),
(3, 124, 1, 9800),
(4, 43, 3, 1450),
(6, 43, 1, 4560),
(6, 47, 1, 4560),
(6, 48, 1, 4560),
(6, 49, 1, 4560),
(6, 50, 1, 4560),
(6, 51, 1, 4560),
(6, 52, 1, 4560),
(6, 53, 1, 4560),
(6, 54, 1, 4560),
(6, 55, 1, 4560),
(6, 56, 1, 4560),
(6, 57, 1, 4560),
(6, 58, 1, 4560),
(6, 59, 1, 4560),
(6, 60, 1, 4560),
(6, 61, 1, 4560),
(6, 62, 1, 4560),
(6, 63, 1, 4560),
(6, 64, 1, 4560),
(6, 65, 1, 4560),
(6, 66, 1, 4560),
(6, 67, 1, 4560),
(6, 68, 1, 4560),
(6, 69, 1, 4560),
(6, 70, 1, 4560),
(6, 71, 1, 4560),
(6, 72, 1, 4560),
(6, 73, 1, 4560),
(6, 75, 2, 4560),
(6, 76, 2, 4560),
(6, 77, 2, 4560),
(6, 78, 2, 4560),
(6, 79, 2, 4560),
(6, 80, 2, 4560),
(6, 81, 2, 4560),
(6, 82, 2, 4560),
(6, 83, 2, 4560),
(6, 84, 2, 4560),
(6, 85, 2, 4560),
(6, 86, 2, 4560),
(6, 87, 2, 4560),
(6, 88, 2, 4560),
(6, 89, 2, 4560),
(6, 90, 2, 4560),
(6, 91, 2, 4560),
(6, 92, 2, 4560),
(6, 93, 2, 4560),
(6, 94, 2, 4560),
(6, 95, 2, 4560),
(6, 96, 2, 4560),
(6, 97, 2, 4560),
(6, 98, 2, 4560),
(6, 99, 2, 4560),
(6, 100, 2, 4560),
(6, 101, 2, 4560),
(6, 102, 2, 4560),
(6, 103, 2, 4560),
(6, 104, 2, 4560),
(6, 105, 2, 4560),
(6, 106, 2, 4560),
(6, 107, 2, 4560),
(6, 109, 5, 4560),
(6, 110, 5, 4560),
(6, 111, 5, 4560),
(6, 112, 5, 4560),
(6, 113, 5, 4560),
(6, 114, 5, 4560),
(6, 115, 5, 4560),
(6, 116, 5, 4560),
(6, 117, 5, 4560),
(6, 118, 5, 4560),
(6, 119, 5, 4560),
(6, 120, 5, 4560),
(6, 121, 5, 4560),
(6, 122, 5, 4560),
(6, 123, 5, 4560),
(6, 155, 2, 4560),
(6, 156, 4, 4560),
(6, 157, 4, 4560),
(7, 74, 1, 2300),
(7, 75, 2, 2300),
(7, 76, 2, 2300),
(7, 77, 2, 2300),
(7, 78, 2, 2300),
(7, 79, 2, 2300),
(7, 80, 2, 2300),
(7, 81, 2, 2300),
(7, 82, 2, 2300),
(7, 83, 2, 2300),
(7, 84, 2, 2300),
(7, 85, 2, 2300),
(7, 86, 2, 2300),
(7, 87, 2, 2300),
(7, 88, 2, 2300),
(7, 89, 2, 2300),
(7, 90, 2, 2300),
(7, 91, 2, 2300),
(7, 92, 2, 2300),
(7, 93, 2, 2300),
(7, 94, 2, 2300),
(7, 95, 2, 2300),
(7, 96, 2, 2300),
(7, 97, 2, 2300),
(7, 98, 2, 2300),
(7, 99, 2, 2300),
(7, 100, 2, 2300),
(7, 101, 2, 2300),
(7, 102, 2, 2300),
(7, 103, 2, 2300),
(7, 104, 2, 2300),
(7, 105, 2, 2300),
(7, 106, 2, 2300),
(7, 107, 2, 2300),
(7, 108, 2, 2300),
(7, 109, 1, 2300),
(7, 110, 1, 2300),
(7, 111, 1, 2300),
(7, 112, 1, 2300),
(7, 113, 1, 2300),
(7, 114, 1, 2300),
(7, 115, 1, 2300),
(7, 116, 1, 2300),
(7, 117, 1, 2300),
(7, 118, 1, 2300),
(7, 119, 1, 2300),
(7, 120, 1, 2300),
(7, 121, 1, 2300),
(7, 122, 1, 2300),
(7, 123, 1, 2300),
(8, 74, 3, 777),
(8, 108, 2, 777),
(8, 109, 2, 777),
(8, 110, 2, 777),
(8, 111, 2, 777),
(8, 112, 2, 777),
(8, 113, 2, 777),
(8, 114, 2, 777),
(8, 115, 2, 777),
(8, 116, 2, 777),
(8, 117, 2, 777),
(8, 118, 2, 777),
(8, 119, 2, 777),
(8, 120, 2, 777),
(8, 121, 2, 777),
(8, 122, 2, 777),
(8, 123, 2, 777),
(10, 158, 1, 900),
(10, 159, 1, 900),
(22, 43, 10, 260);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `NOP` int(11) NOT NULL,
  `LIB` varchar(255) NOT NULL,
  `PU` double NOT NULL,
  `DP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `INFOS` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`NOP`, `LIB`, `PU`, `DP`, `INFOS`, `IMAGE`) VALUES
(1, 'telephone', 800, '2016-04-12 22:40:24', 'Un telephone fixe professionnel IP n’est pas connecté au réseau de téléphonie traditionnel mais à votre réseau IP, c’est-à-dire le même réseau que celui permettant à votre ordinateur d’accéder à Internet.', 'vue/images/telephone.jpg'),
(2, 'smarttv', 10000, '2016-04-12 22:40:24', 'opter pour une Smart TV pour vous connecte à internet et son contenu, alors que vous êtes confortablement installé dans votre salon.', 'vue/images/smarttv.jpg'),
(3, 'laptop', 9800, '2016-04-12 22:40:24', '\r\nLe PC portable est un monstre de puissance ! Profitez de performances optimales, selon vos besoins du moment grâce à 4 modes de fonctionnement. De plus, avec la technologie ExpressCache, cet ordinateur portable  vous fera bénéficier de la vitesse de lan', 'vue/images/laptop.jpg'),
(4, 'recepteur', 1450, '2016-04-12 22:40:24', '3500 stockage de canal programmable -60 préprogrammées et 4 utilisateurs satellites modifiables. -RGB666 / RGB888 pour les panneaux LCD numériques -Taux de symboles d\'entrée variable 2 ~ 45 MSPS -Fonction de programme par satellite automatique avec option', 'vue/images/recepteur.jpg'),
(5, 'imprimante ', 5700, '2016-04-12 22:40:24', 'Format A4, 26 pages/min, Wi-Fi 802.11b/g, compatible PC et Mac La solution complète à domicile : Imprimante, Scanner, Copieur', 'vue/images/imprimante.jpg'),
(6, 'scanner', 4560, '2016-04-12 22:40:24', 'Scanner de bureau couleur à plat\r\nRésolution 2400 x 4800 dpi\r\nPrécision couleurs 48 bits', 'vue/images/scanner.jpg'),
(7, 'unite centrale', 2300, '2016-04-12 22:40:24', 'Boîtier contenant tous les éléments essentiels d\'un ordinateur (processeur, carte-mère, disque-dur, mémoire..). Couramment abrégé en UC.', 'vue/images/unitecentrale.jpg'),
(8, 'clavier', 777, '2016-04-12 22:40:24', 'Logitech Keyboard K120 Clavier AZERTY USB - Noir', 'vue/images/clavier.jpg'),
(9, 'ecran', 890, '2016-04-12 22:40:24', 'Asus VK278Q Écran PC LED 27" 1920 x 1080 2 ms DVI/VGA/HDMI', 'vue/images/ecran.jpg'),
(10, 'calculatrice', 900, '2016-04-12 22:40:24', 'Canon P23-DTSC Calculatrice portable avec imprimante 12 chiffres Bicolore Ecran LCD Calcul taxe / rentabilit é Horloge / Calendrier ,avec practical power system , battery or mains', 'vue/images/calculatrice.jpg'),
(11, 'iPhone4s', 4800, '2016-04-12 22:40:24', 'Apple iPhone 4 Smartphone débloqué 3.5 pouces 16 GB iOS 6 Noir\r\nde Apple\r\n', 'vue/images/iphone4s.jpg'),
(12, 'iPhone5', 5000, '2016-04-12 22:40:24', 'Apple iPhone 5 Smartphone débloqué 3G (4 pouces - 16 Go - iOS 6) Blanc\r\nde Apple', 'vue/images/iphone5.jpg'),
(13, 'iPhone5s', 5400, '2016-04-12 22:40:24', 'Apple iPhone 5s Smartphone débloqué 4G (Ecran : 4 pouces - 16 Go - iOS 7)Blanc', 'vue/images/iphone5s.jpg'),
(15, 'iphone6', 6000, '2016-04-12 22:40:24', 'Apple iPhone 6 Smartphone débloqué 4G (Ecran : 4.7 pouces - 64 Go - iOS 8) Or\r\nde Apple', 'vue/images/iphone6.jpg'),
(16, 'chargeur_phone', 300, '2016-04-12 22:40:24', 'Demarkt 10 En 1 Câble Chargeur universel USB Multi-chargeur pour Appareils Électroniques (Apple, Samsung, SonyEricsson, LG, Motorola, Nokia)', 'vue/images/chargeurphone.jpg'),
(17, 'chargeur_pc', 1300, '2016-04-12 22:40:24', 'Max In Power PSMIP505NB Chargeur automatique universel / multi-fonctions pour Ordinateur portable 5V-22V', 'vue/images/chargeurpc.jpg'),
(18, 'multiprise', 500, '2016-04-12 22:40:24', 'Multiprises anti surtension et interférence 10 PC / Bloc parafoudre / parasur...', 'vue/images/multiprise.jpg'),
(19, 'pc_bureau', 1500, '2016-04-12 22:40:24', 'Compaq Presario SG3-345 3 Go de memoire', 'vue/images/pcbureau.jpg'),
(20, 'ramette_pappier', 55, '2016-04-12 22:40:24', 'Un papier de très haute qualité.\r\n80g. Très grande blancheur. Parfait pour vos photocopieurs ou vos imprimantes laser et jet d\'encre', 'vue/images/ramettepapier.jpg'),
(21, 'souris_pc', 180, '2016-04-12 22:40:24', 'Logitech Mouse M90 Souris filaire Suivi optique haute Définition USB Noir', 'vue/images/sourispc.jpg'),
(22, 'agrafeuse', 260, '2016-04-12 22:40:24', 'LEITZ AGRAFEUSE MÉTAL 55 - 40 FEUILLES', 'vue/images/agrafeuse.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `stockage`
--

CREATE TABLE `stockage` (
  `NOP` int(11) NOT NULL,
  `NOD` int(11) NOT NULL,
  `QTS` int(11) NOT NULL,
  `QTD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stockage`
--

INSERT INTO `stockage` (`NOP`, `NOD`, `QTS`, `QTD`) VALUES
(1, 2, 292, 23),
(2, 2, 294, 21),
(3, 2, 427, 55),
(4, 2, 459, 77),
(5, 5, 149, 69),
(6, 4, 251, 76),
(7, 2, 444, 7),
(8, 1, 258, 70),
(9, 4, 331, 75),
(10, 3, 395, 8),
(11, 4, 353, 16),
(12, 1, 407, 96),
(13, 4, 103, 45),
(15, 3, 370, 34),
(16, 4, 317, 11),
(17, 2, 377, 48),
(18, 1, 369, 90),
(19, 3, 478, 36),
(20, 4, 355, 78),
(21, 1, 323, 4),
(22, 2, 358, 97);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`NOADMIN`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NOCLI`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `NOD` (`NOD`),
  ADD KEY `NOD_livraison_secours` (`NOD_livraison_secours`),
  ADD KEY `NOD_2` (`NOD`),
  ADD KEY `NOM` (`NOM`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`NOCOM`),
  ADD KEY `NOF` (`NOF`,`NOCLI`),
  ADD KEY `NOF_2` (`NOF`),
  ADD KEY `NOCLI` (`NOCLI`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`NOD`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NOF`);

--
-- Index pour la table `lignec`
--
ALTER TABLE `lignec`
  ADD PRIMARY KEY (`NOCOM`,`NOP`);

--
-- Index pour la table `lignef`
--
ALTER TABLE `lignef`
  ADD PRIMARY KEY (`NOP`,`NOF`),
  ADD KEY `ligne-f_ibfk_2` (`NOF`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`NOP`);

--
-- Index pour la table `stockage`
--
ALTER TABLE `stockage`
  ADD PRIMARY KEY (`NOP`,`NOD`),
  ADD KEY `NOD` (`NOD`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `NOADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NOCLI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `NOCOM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `depot`
--
ALTER TABLE `depot`
  MODIFY `NOD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `NOF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `NOP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`NOD`) REFERENCES `depot` (`NOD`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`NOD_livraison_secours`) REFERENCES `depot` (`NOD`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`NOF`) REFERENCES `facture` (`NOF`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`NOCLI`) REFERENCES `client` (`NOCLI`);

--
-- Contraintes pour la table `lignef`
--
ALTER TABLE `lignef`
  ADD CONSTRAINT `lignef_ibfk_1` FOREIGN KEY (`NOP`) REFERENCES `produit` (`NOP`),
  ADD CONSTRAINT `lignef_ibfk_2` FOREIGN KEY (`NOF`) REFERENCES `facture` (`NOF`);

--
-- Contraintes pour la table `stockage`
--
ALTER TABLE `stockage`
  ADD CONSTRAINT `stockage_ibfk_1` FOREIGN KEY (`NOP`) REFERENCES `produit` (`NOP`),
  ADD CONSTRAINT `stockage_ibfk_2` FOREIGN KEY (`NOD`) REFERENCES `depot` (`NOD`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
