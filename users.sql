-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 fév. 2022 à 23:02
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `CNE` varchar(11) CHARACTER SET armscii8 NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `VILLE` varchar(40) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PHOTO` varchar(100) NOT NULL,
  `FILLIERE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`CNE`, `NOM`, `PRENOM`, `VILLE`, `EMAIL`, `PHOTO`, `FILLIERE`) VALUES
('', '', '', '', '', '80-803263_letter-k-png-letra-k-en-png-transparent.png', 'GIL1'),
('155', 'kawtar', 'lO', 'mos', 'backtolife2021@gmail.com', 'pngwing.com.png', 'GIL1'),
('155d', 'kawtar', 'm', 'l', 'kawkawabous@gmail.com', 'pngwing.com.png', 'GIL2'),
('AA', 'ZD', 'DDZZ', 'XX', 'X', '80-803263_letter-k-png-letra-k-en-png-transparent.png', 'GINF2'),
('T2', '22', '', '22', '', 'png-transparent-bird-of-prey-logo-beak-desktop-bird-animals-computer-logo.png', 'GIL1');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwrd` varchar(10) NOT NULL,
  `Nomreel` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `telephone` int(10) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`, `passwrd`, `Nomreel`, `Prenom`, `telephone`, `Adresse`, `Facebook`, `Github`) VALUES
(1, 'kawtar', 'kawkawabous@gmail.com', '123', 'kk', 'bouslim', 607, 'ds', '', 'kaw'),
(3, 'kaw', 'kawkawabous@gmail.com', '159', '', '', 0, '', '', ''),
(4, 'kkk', 'kawkawabous@gmail.com', '123', '', '', 0, '', '', ''),
(6, 'kawt', 'kawtar@gmail.com', '123', '', '', 0, '', '', ''),
(7, 'kawkaw', 'kawtar-_-death@hotmail.fr', '123', '', '', 0, '', '', ''),
(9, 'wiam', 'kawkawabous@gmail.com', '123', '', '', 0, '', '', ''),
(10, 'qa', 'kawkawabous@gmail.com', '123', '', '', 0, '', '', ''),
(11, 't', 'm', '15', '', '', 0, '', '', ''),
(12, 'k', 's', 'q', '', '', 0, '', '', ''),
(13, 'kawtar2', 'm', '12', '', '', 0, '', '', ''),
(14, ',', ',', ',', '', '', 0, '', '', ''),
(15, 'kawtarA', 'KAWTAR.BOUSLIM@GMAIL.COM', '123', '', '', 0, '', '', ''),
(18, 'kawTA', 'KAWTAR.BOUSLIM@GMAIL.COM', '123', '', '', 0, '', '', ''),
(19, 'kawtarATON', 'KAWTAR.BOUSLIM@GMAIL.COM', '123', '', '', 0, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD UNIQUE KEY `CNE` (`CNE`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
