-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 mars 2024 à 10:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_publication` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `commentaire`, `image`, `nom`, `date_publication`) VALUES
(3, 'Expédition rapide et excellent service client. Le produit était même meilleur que prévu. Je serai certainement un client fidèle.', 'upload/earth-store-testimonials-avatar-img-1.jpeg', 'FOFANA Zeïdou', '2024-03-13 13:03:55');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(5, 'Batik'),
(6, 'Bogolan'),
(7, 'pagne tissé'),
(8, 'Tissus');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `type_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `type_client`) VALUES
(8, 'apprentis'),
(11, 'apprentis'),
(12, 'Stylist(e)s'),
(13, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `dasbord`
--

CREATE TABLE `dasbord` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `id_clients` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dasbord`
--

INSERT INTO `dasbord` (`id`, `nom`, `prenom`, `Phonenumber`, `email`, `ville`, `quartier`, `id_clients`) VALUES
(1, 'zeidou', 'fofana', '74859612', 'zeidou@gmail.com', 'parakou', 'zongo', '13');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `id_categorie` varchar(255) NOT NULL,
  `date_publication` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `titre`, `contenu`, `prix`, `id_categorie`, `date_publication`) VALUES
(9, 'upload/img29.jpeg', 'Alice création', 'robe fait en batik', '1500 Fcfa', '5', '2024-03-12 16:54:22'),
(10, 'upload/img30.jpeg', 'Alice crétion', 'robe fait en tissus batik', '1200 Fcfa', '5', '2024-03-12 17:12:01'),
(11, 'upload/img28.jpeg', 'Alice création', 'robe consus en  batik', '1.5$', '5', '2024-03-12 17:37:12'),
(12, 'upload/img35.jpeg', 'Alice création', 'robe fait en tissus batik', '1500', '5', '2024-03-12 17:40:19'),
(13, 'upload/img2.jpeg', 'Robe ', 'Robe ovale', '3000', '6', '2024-03-13 13:46:20'),
(14, 'upload/img3.jpeg', 'Complet', 'Complet homme', '5000', '8', '2024-03-13 13:49:15'),
(15, 'upload/img6.jpeg', 'Robes', 'Robe longue', '5000', '5', '2024-03-13 13:49:57'),
(16, 'upload/img6.jpeg', 'Robes', 'Robe longue', '5000', '5', '2024-03-13 13:54:21'),
(17, 'upload/img7.jpeg', 'Robe', 'Robe courte', '5000', '5', '2024-03-13 13:54:44'),
(18, 'upload/img23.jpeg', 'robe', 'robe longue', '4500', '8', '2024-03-14 09:56:20'),
(19, 'upload/img1.jpeg', 'robe01', 'bobe longue', '3000', '6', '2024-03-14 09:58:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(8) NOT NULL,
  `passwordd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `email`, `phonenumber`, `passwordd`) VALUES
(7, 'Abib', 'Aliou', 'oklm', 'saccalafiaomnheath@gmail.com', 78945612, '$2y$10$15uzhs8G3I3p97npj/K4FuCk/ZLWCBsos/k1x5nVeOLgTB33Fzzyq'),
(8, 'ABOUDOU', 'Faouziath', 'fao', 'aboudou@gmail.com', 89652359, '$2y$10$idPuQKHkGGpNDVnuRi1uL.PO/MF007ZIyuMBjEZmIS0GvbYo/1m8G'),
(9, 'azerty', 'azert', 'omny', 'fofana@gmail.com', 74185296, '$2y$10$sKSvoAicO2UG.SKdUYt0teSgZr3/krJaS61V8L18MhwVt6ISet9NS'),
(10, 'wxcvb', 'azer', 'ol', 'zeid@gmail.com', 74108525, '$2y$10$LcB39RdI1TNZeGuarX9Ur.X6NIwKUHbKfg1SjOP/0EdUzliMvoxRy'),
(11, 'maman ', 'zeidou', 'zeidkissou', 'zeidou@gmail.com', 74859612, '$2y$10$nKISsQ9eRNKmrrZr9/ApZOAgbZhy7TEvJdw6mTPMwrc3ldLMpQZUm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dasbord`
--
ALTER TABLE `dasbord`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `dasbord`
--
ALTER TABLE `dasbord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
