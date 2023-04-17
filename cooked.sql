-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 avr. 2023 à 09:40
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cooked`
--

-- --------------------------------------------------------

--
-- Structure de la table `cook`
--

CREATE TABLE `cook` (
  `id_cook` int NOT NULL,
  `pseudo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_heure_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `token`, `date_inscription`) VALUES
(1, 'mateo', 'mateo.servant@gamil.com', '$2y$12$cDcAQNxzAoRA3sEhfn2KA.AYikKhyTMCw0N89RDRzDd1pI.ZCWi6K', '::1', 'a77a4f28474f866e0d294580955bc11d3553f5bfd7d8f571eaf458fc58c362b5362f7a1afc5d4fc156d1e65461fac8acfe8c7b0936133a63c52a96b43efb1288', '2023-04-14 18:10:14'),
(2, 'maxime', 'maxime.lebas@gmail.com', '$2y$12$JgDGga0fF7HlxfC/tZORaufVNHnWF/hhFj3S4/nl1EvBWyzeCkEIO', '::1', '918416c14a5dab1250a684f7461d6bd840cc1e3ae11da95792af082e2c43e999653f677fa73c5bd17a5cbc6b02d8c56ddc156b52ea011d5668c9b35af1665ffd', '2023-04-14 18:14:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`id_cook`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cook`
--
ALTER TABLE `cook`
  MODIFY `id_cook` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
