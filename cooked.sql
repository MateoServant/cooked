-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 18:17
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
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `id_post` int NOT NULL,
  `message` text CHARACTER SET geostd8 COLLATE geostd8_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `tag` text CHARACTER SET geostd8 COLLATE geostd8_general_ci NOT NULL,
  `src` varchar(300) NOT NULL,
  `pseudo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`id_post`, `message`, `date`, `tag`, `src`, `pseudo`) VALUES
(180, 'fzefzfzz', '2023-05-26 14:26:09', 'Poulet', 'capture-fiole.png', 'h'),
(196, 'zedzda', '2023-05-26 19:58:07', 'Poulet', 'test-photo-berlin-.JPG', 'h');

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
(2, 'maxime', 'maxime.lebas@gmail.com', '$2y$12$JgDGga0fF7HlxfC/tZORaufVNHnWF/hhFj3S4/nl1EvBWyzeCkEIO', '::1', '918416c14a5dab1250a684f7461d6bd840cc1e3ae11da95792af082e2c43e999653f677fa73c5bd17a5cbc6b02d8c56ddc156b52ea011d5668c9b35af1665ffd', '2023-04-14 18:14:27'),
(3, 'mayuae', 'mateo.servant@gmail.com', '$2y$12$TjtWJpNnM3.rCaxko81ShOnSEYfc0JKn2TZRJAYP6FyykKozLnzwS', '::1', '8be7516a85fa8d140f5d78f832eb699c081620928c3f9e03f601b73083d42663ae8ad5bbeedd86b2ce3ecdf9159e88f8020997d0b9411c7e104706d7cc52f0c8', '2023-04-24 10:00:04'),
(4, 'mateo', 'renard@gmail.com', '$2y$12$nBHhKrwY69MSkCMCdcoTiOp6d72pzlXYuBt/LrLjI0ZGnDgsh3NGG', '::1', '62bfa90275d22a51ff14c9268a6d5da5be9b5c5d9512c392d839ae8540ee06da32fffd4140fc81834ec2e4a909f134a28c8ab34342a573c85f638b9287ba7434', '2023-04-24 10:01:28'),
(5, 'futulu', 'ff@gmail.com', '$2y$12$0.3RaD8dKdUVQE.njpcQeuB2Yk/CJoxeWEkvyrLcvEYwbOjpJoeLW', '::1', '0e94f88bbfe86ce5d8b704bb230a0da310194a8317dc94cbe28810fbb39521dc486352966bc9f15c9232bbb02b2b9d1d880dbb601c6e9848bbf33de670d70d5d', '2023-04-24 15:15:19'),
(6, 'mateo', 'm@gmail.com', '$2y$12$SY1ts5LmdAozDPqTONmzEeB5/JiKjW5OJdunikQcwOUBisNc4XmnC', '::1', '6d480ec4ae9ad41fd22d94f3ab4e34462ba6c25abd6f5098b693690de9b61002270dfa7b4a94d5d4e356145ee347ec9086f4d0251dfe9b46a6073f7e8336aa84', '2023-04-24 17:30:34'),
(7, 'DEDE', 'd@gmail.com', '$2y$12$sUmNQSwL7phddmX3ONfgl.Ou4.s8w2T1CH3ShlnMj3UsRfNsUfdge', '::1', 'f649964997aaa357cb5a3599a0bd00e5a0d05852e77e40b297619901ef635b4e97c3345d25009afeab38b7e84d0c94130d9aa9c7997e32ba92a28bae29e62dec', '2023-04-25 09:20:21'),
(8, 'lol', 'mateo@gmail.com', '$2y$12$S5KxR1Oz.N5tOWsEQrvy4uebfSs3gF6iKrshQkfHyJRCaalQKMVbS', '::1', '153d21be0734591e7a7bffcfc362a5f8ccfa15475a02d4584723b9639c23f5f9f76522dd998df647a3c458ad54346e4cdd42b6311af2eef5ede021e1235e6c38', '2023-05-17 17:17:52'),
(9, 'efefef', 'e@gmail.com', '$2y$12$ov07YuV.PCggcWWGSkG1zudlcP7tMD5fi21QQLwykPgbABU1y1mve', '::1', 'ccdacde91fbe60bc6fb264cb31718c613894411aba340e5c4215abc0e81667c980d5cc2504af72f462fc915a53370a3e4f1b6f64aa740a56ca761c36b917d83a', '2023-05-17 19:21:16'),
(10, 'm', 'mat@gmail.com', '$2y$12$6CrtJ1XquZV35//jWuGu/.A/cXtxQIioiQfLpGXhcQna.heAznJl6', '::1', '2768f2d16f17d0fbc9b2794de652cf631073596f476121ac33a8e05872cb050a54cc93fe5e348a8c596b6374e49b5c7e924f888bfe6f434883177de40488331e', '2023-05-22 08:52:48'),
(11, 'h', 'h@gmail.com', '$2y$12$JNyoYgms8FasZ4tXvqPmPu0yUTUHZGYqa5LFjKYlQNqVz1m5jg/fy', '::1', '3ce8b22e8f98f08991daac0b4494dbcd902eb95c20642b12d1610d85f196b2d34ab747f0960d06da53505233b8884ba6cb35c77429b1a8bc90ae8b8a113bc313', '2023-05-22 11:19:19'),
(12, 'Mokoy', 'maxandco2003@gmail.com', '$2y$12$UUWHLTtZaa349SJk50Pn.u/ycXDJFNzgrdsDI9s4ficOk9HttbS0a', '::1', '4ef34d8d068c50e2c03a1126b8df7b0f3ad94f7cb6e74c635866e0ee9f595a1bb625d643168a5be6b6f840ba49c0967597245b2b20fbfc01ff86a85a00c93fff', '2023-05-24 14:35:15'),
(13, 'l', 'l@gmail.com', '$2y$12$CDLXNHuCSb43cyUuVe0g..8hU1HrsJ2sgkbQanLxpFIhqR7lIm9pW', '::1', 'b1a9100f15ed9f88f9aa01abac136490959b4ba021eb9f9967d76d4b98864f8dbc337527f72c71f6ef48df0ce9de4189ef790edc9886a0e417e4dfcdcff5c0e2', '2023-05-24 14:51:44'),
(14, 'maxime', 'maxiem@gmail.com', '$2y$12$a1g64Dw2oNgl3gbneNXT4.CXRGlzrE3CjERPSkl3UKgfPJctCtWcS', '::1', '13d4773578238b8d72d84db23cc158bae2cbdb43533cedf4b2e4827af20ac2746c8632139d9c0da3a865f6688d1f0cd04ce486f731ca4fd38b3fcf50c37e0b45', '2023-05-26 13:42:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`id_cook`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`id_post`);

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
-- AUTO_INCREMENT pour la table `poste`
--
ALTER TABLE `poste`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
