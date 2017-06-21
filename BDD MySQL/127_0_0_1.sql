-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Juin 2017 à 13:02
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `login`
--
DROP DATABASE `login`;
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Structure de la table `usercontact`
--

CREATE TABLE `usercontact` (
  `IDUSER` int(11) NOT NULL,
  `FIRSTNAME` char(255) NOT NULL,
  `SURNAME` char(255) NOT NULL,
  `EMAIL` char(255) NOT NULL,
  `PASS` char(255) NOT NULL,
  `USERGROUP` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `usercontact`
--

INSERT INTO `usercontact` (`IDUSER`, `FIRSTNAME`, `SURNAME`, `EMAIL`, `PASS`, `USERGROUP`) VALUES
(1, 'cyril', 'rat', 'cyril.rat@gmail.com', 'cyril', 0),
(2, 'Badr', 'Tallali', 'badrtallali@gmail.com', 'bad', 1),
(3, 'renaud', 'Moiselet', 'renoruns@gmail.com', 'reno', 1),
(4, 'bibiana', 'bibi', 'bibi@gmail.com', 'bibi', 1),
(5, 'nico', 'nico', 'nico@nico', 'nico', 1),
(6, 'seb', 'seb', 'seb@seb', 'seb', 1),
(7, 'Vlad', 'Vlad', 'vlad@gmail.com', 'vlad', 1),
(8, 'Walid', 'Bensafi', 'walid@gmail.com', 'walid', 1),
(9, 'Nicolas', 'Guignard', 'nicolas.guignard@gmail.com', 'nicolas', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;--
-- Base de données :  `video`
--
DROP DATABASE `video`;
CREATE DATABASE IF NOT EXISTS `video` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `video`;

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `NUM_ADHERENT` int(4) NOT NULL,
  `NOM_ADHERENT` varchar(25) NOT NULL DEFAULT '',
  `PRENOM_ADHERENT` varchar(20) NOT NULL DEFAULT '',
  `ADR_ADHERENT` varchar(32) NOT NULL DEFAULT '',
  `ADR2_ADHERENT` varchar(32) DEFAULT NULL,
  `CODEPOSTAL_ADHERENT` varchar(5) DEFAULT NULL,
  `VILLE_ADHERENT` varchar(25) DEFAULT NULL,
  `TEL_ADHERENT` varchar(15) DEFAULT NULL,
  `DATE_ADHESION` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `REF_PIECE_IDENTITE` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adherent`
--

INSERT INTO `adherent` (`NUM_ADHERENT`, `NOM_ADHERENT`, `PRENOM_ADHERENT`, `ADR_ADHERENT`, `ADR2_ADHERENT`, `CODEPOSTAL_ADHERENT`, `VILLE_ADHERENT`, `TEL_ADHERENT`, `DATE_ADHESION`, `REF_PIECE_IDENTITE`) VALUES
(1, 'rat', 'cyril', 'adrAdh1', '', '06300', 'Nice', '0102030405', '2005-12-15 12:01:41', ''),
(2, 'Adh2', 'prénomadh2', '32, adr adh 2', NULL, '06500', 'Menton', NULL, '2006-10-03 00:00:00', 'CNI 542345678');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `ID_FILM` int(6) NOT NULL,
  `CODE_TYPE_FILM` char(3) NOT NULL DEFAULT '',
  `ID_REALIS` int(4) NOT NULL DEFAULT '0',
  `TITRE_FILM` varchar(20) NOT NULL DEFAULT '',
  `ANNEE_FILM` int(4) NOT NULL DEFAULT '0',
  `REF_IMAGE` varchar(50) DEFAULT NULL,
  `RESUME` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`ID_FILM`, `CODE_TYPE_FILM`, `ID_REALIS`, `TITRE_FILM`, `ANNEE_FILM`, `REF_IMAGE`, `RESUME`) VALUES
(1, 'AVE', 1, 'Mon premier film', 2005, 'lamome.jpg', 'résumé film 1'),
(2, 'POL', 3, 'mon 2° film', 2007, 'coeurdeshommes2.jpg', 'résumé 2° film'),
(3, 'AVE', 1, 'Mon 3° film', 2003, 'bigmovie.jpg', 'résumé 3° film'),
(54, 'AVE', 4, 'RatnCo', 2019, NULL, 'The Legeng'),
(25, 'AVE', 4, 'fatal', 2017, NULL, 'sdfqd'),
(158, 'AVE', 4, 'sdfqsd', 2018, NULL, 'qsdfqsd');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `NUM_ADHERENT` int(4) NOT NULL DEFAULT '0',
  `ID_FILM` int(6) NOT NULL DEFAULT '0',
  `CODE_SUPPORT` char(1) NOT NULL DEFAULT '',
  `DEBUT_LOCATION` date NOT NULL DEFAULT '0000-00-00',
  `DATE_RETOUR` date DEFAULT NULL,
  `TARIF_APPLIQUE` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`NUM_ADHERENT`, `ID_FILM`, `CODE_SUPPORT`, `DEBUT_LOCATION`, `DATE_RETOUR`, `TARIF_APPLIQUE`) VALUES
(1, 3, 'D', '2017-06-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `star`
--

CREATE TABLE `star` (
  `ID_STAR` int(4) NOT NULL,
  `NOM_STAR` varchar(25) NOT NULL DEFAULT '',
  `PRENOM_STAR` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `star`
--

INSERT INTO `star` (`ID_STAR`, `NOM_STAR`, `PRENOM_STAR`) VALUES
(1, 'Pitt', 'Brad'),
(2, 'De Niro', 'Robert'),
(3, 'Binoche', 'Juliette'),
(4, 'Allen', 'Woody');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `CODE_SUPPORT` char(1) NOT NULL DEFAULT '',
  `LIB_SUPPORT` varchar(12) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `support`
--

INSERT INTO `support` (`CODE_SUPPORT`, `LIB_SUPPORT`) VALUES
('D', 'DVD'),
('K', 'K7 Vidéo'),
('B', 'Blue Ray');

-- --------------------------------------------------------

--
-- Structure de la table `typefilm`
--

CREATE TABLE `typefilm` (
  `CODE_TYPE_FILM` char(3) NOT NULL DEFAULT '',
  `LIB_TYPE_FILM` varchar(25) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typefilm`
--

INSERT INTO `typefilm` (`CODE_TYPE_FILM`, `LIB_TYPE_FILM`) VALUES
('AVE', 'Aventure'),
('COM', 'Comédie'),
('DES', 'Dessin animé'),
('POL', 'Policier');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`NUM_ADHERENT`),
  ADD KEY `NOM_ADHERENT` (`NOM_ADHERENT`,`PRENOM_ADHERENT`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_FILM`),
  ADD KEY `CODE_TYPE_FILM` (`CODE_TYPE_FILM`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`NUM_ADHERENT`,`ID_FILM`,`CODE_SUPPORT`,`DEBUT_LOCATION`);

--
-- Index pour la table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`ID_STAR`),
  ADD KEY `NOM_STAR` (`NOM_STAR`,`PRENOM_STAR`);

--
-- Index pour la table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`CODE_SUPPORT`);

--
-- Index pour la table `typefilm`
--
ALTER TABLE `typefilm`
  ADD PRIMARY KEY (`CODE_TYPE_FILM`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `NUM_ADHERENT` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `ID_FILM` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT pour la table `star`
--
ALTER TABLE `star`
  MODIFY `ID_STAR` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
