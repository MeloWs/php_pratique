-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 31 juil. 2021 à 07:35
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exam_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `ID` int(11) NOT NULL COMMENT 'l''ID de l''animal',
  `user_ID` int(11) NOT NULL COMMENT 'l''ID du possesseur',
  `animal_name` varchar(40) NOT NULL COMMENT 'le nom de l''animal',
  `animal_photo` varchar(100) NOT NULL COMMENT 'la photo de l''animal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL COMMENT 'ID',
  `username` varchar(40) NOT NULL COMMENT 'le prénom du user',
  `lastname` varchar(40) NOT NULL COMMENT 'le nom du user',
  `email` varchar(100) NOT NULL COMMENT 'l''email du user',
  `userpassword` varchar(255) NOT NULL COMMENT 'le password du user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `username`, `lastname`, `email`, `userpassword`) VALUES
(1, 'Jeudi', 'Mardi', 'test@testeu.fr', '$2y$10$U4Ld4udoywn0jCbffLbSW..q9tYRLyoHqwd3wSaDbhB/q5CQtAqfK'),
(9, 'Jérémi', 'Perrein', 'test@testy.fr', '$2y$10$Wk.ikkz.NbVKdvi1QKZRJOKDWIaKB5PLhtf4M7JXRFjujvhqhDa3C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'l''ID de l''animal';

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
