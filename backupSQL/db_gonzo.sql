-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 07 fév. 2024 à 10:18
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gonzo`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste_medicaments`
--

CREATE TABLE `liste_medicaments` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `note` int(11) NOT NULL DEFAULT '0',
  `commentaires` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste_medicaments`
--

INSERT INTO `liste_medicaments` (`ID`, `nom`, `prix`, `note`, `commentaires`) VALUES
(1, 'Meth', 32, 8, 'Meilleurs produit!'),
(2, 'Lsd', 42, 8, 'Voyage assuré'),
(3, 'Codeine', 52, 9, 'Un excellent produit !'),
(4, 'Mescaline', 30, 9, 'délirant !'),
(5, 'Adenochrome', 28, 9, 'Top, super fort'),
(6, 'Crystal', 35, 9, 'Incroyable, à essayer !'),
(7, 'Blue magic', 50, 7, 'Idéal pour la detente'),
(8, 'Ether', 32, 9, 'Puissant!');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `pathImg` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `medicamentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `pathImg`, `medicamentId`) VALUES
(1, '/DRGONZO/assets/img/meth.webp', 1),
(2, '/DRGONZO/assets/img/lsd.webp', 2),
(3, '/DRGONZO/assets/img/codeine.webp', 3),
(4, '/DRGONZO/assets/img/mescaline.webp', 4),
(5, '/DRGONZO/assets/img/adenochrome.webp', 5),
(6, '/DRGONZO/assets/img/crystal.webp', 6),
(7, '/DRGONZO/assets/img/bluemagic.webp', 7),
(8, '/DRGONZO/assets/img/ether.webp', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `liste_medicaments`
--
ALTER TABLE `liste_medicaments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicamentId` (`medicamentId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liste_medicaments`
--
ALTER TABLE `liste_medicaments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`medicamentId`) REFERENCES `liste_medicaments` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
