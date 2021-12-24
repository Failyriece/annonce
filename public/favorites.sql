-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 déc. 2021 à 15:23
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `favorites`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `annonce_title` varchar(255) NOT NULL,
  `annonce_text` text NOT NULL,
  `annonce_imgName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `annonce_title`, `annonce_text`, `annonce_imgName`) VALUES
(1, 'tEST', 'Content', ''),
(2, 'Les ratons', 'Sont nos amis, ils faut les aimer aussi', ''),
(3, 'Le fromage', 'C\'est du bon', ''),
(4, 'Patapouf', 'Raton', ''),
(5, 'Raton', 'Aime le froncton', ''),
(6, 'Grenouille', 'Croa croa', '7e7d2998cbac8a04501b7d44e73c6e21.png'),
(7, 'Miraculous', 'Dessin animé', '7ce6d3822c840b3ac63297d32662cc6f.jpg'),
(11, 'Nouveau', 'Test', '138836392_406963180418669_7332003484247823693_n.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
