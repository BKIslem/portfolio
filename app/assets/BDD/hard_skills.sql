-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database
-- Généré le : jeu. 20 juil. 2023 à 13:06
-- Version du serveur : 8.0.33
-- Version de PHP : 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `hard_skills`
--

CREATE TABLE `hard_skills` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hard_skills`
--

INSERT INTO `hard_skills` (`id`, `name`, `percentage`) VALUES
(1, 'HTML', '90'),
(2, 'CSS', '90'),
(3, 'JavaScript', '60'),
(4, 'MYSQL', '90'),
(5, 'PHP', '80'),
(6, 'C,C++', '70'),
(7, 'Docker', '60'),
(8, 'Symfony', '30'),
(9, 'GIT/GitHub', '50'),
(10, 'Figma', '70'),
(11, 'jQUERY', '50'),
(12, 'Bootstrap', '80'),
(13, 'Twig', '40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hard_skills`
--
ALTER TABLE `hard_skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hard_skills`
--
ALTER TABLE `hard_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
