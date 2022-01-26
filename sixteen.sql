-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 déc. 2021 à 10:45
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sixteen`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `identifiant`, `mdp`) VALUES
(2, 'JayDencre', '$2y$10$ppuU5oFgFceOqN4BszxmTesegRyn9.b9aRvdZADHU9DLOUxDL8inC');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`, `image`) VALUES
(1, 'tshirt', 'tshirt.jpg'),
(2, 'mug', 'mug.jpg'),
(3, 'piercing', 'piercing.jpg'),
(4, 'sac', 'sac.jpg'),
(5, 'hoodies', 'hoodie.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `descriptif` text NOT NULL,
  `date` date NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `diametre` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `prix`, `descriptif`, `date`, `id_categorie`, `dimension`, `poids`, `couleur`, `matiere`, `diametre`) VALUES
(1, 'Mug rose Jay Dencre', 'IMG_6643.jpg', 20, 'Un mug avec une rose designer par Jay Dencre, cette rose arbore fièrement le nom de ce dernier!', '2021-04-17', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(2, 'Sac Sixteen Tattoo Shop', 'IMG_6642.jpg', 25, 'Respectez la nature et faites vos courses avec style.', '2021-04-01', 4, '30 x 39 x 14 cm', '240 grammes', 'Blanc', 'Tissu', 0),
(3, 'Mug Crane ', 'IMG_6644.jpg', 15, 'Buyer vos meilleur café avec la mort!', '2021-04-10', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(4, 'Mug Visage', 'IMG_6645.jpg', 15, 'offrez ce mug à un ami pour lui montrez que vous ne le lâcherez jamais du regard.', '2021-03-18', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(5, 'Mug Crane perdant une dent', 'IMG_6646.jpg', 15, 'La mort peut parfois perdre une dent... voire plusieurs qui sais.', '2021-04-02', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(6, 'Mug Jay Daniel', 'IMG_6647.jpg', 20, 'Buyez votre meilleur café... ou votre meilleur Jack Daniel... sa marche dans les deux sens.', '2021-04-12', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(14, 'Mug Jay Daniel', 'IMG_6647.jpg', 20, 'Buyez votre meilleur café... ou votre meilleur Jack Daniel... sa marche dans les deux sens.', '2021-04-12', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(15, 'Plugs Tunnel double flared or', 'Plugs-Tunnel-double-flared.jpg', 3.19, 'Un plug double flared couleur or.', '2021-06-16', 3, '', '', 'Or', 'Acier chirurgical', 3),
(16, 'Plug double flared avec gravure laser', 'Plug-double-flared-avec-Gravure-laser.jpg', 4.89, 'Plug double flared en bois, avec une gravure laser de la boussole vegvisir.', '2021-06-11', 3, '', '', 'Marron', 'Bois', 12),
(17, 'Plugs Double Flared Tube Acier chirurgical', 'Plugs-Double-Flared-Tube.jpg', 1.19, 'Plugs Double Flared Tube Acier chirurgical', '2021-06-08', 3, '', '', 'Argent', 'Acier chirurgical', 12),
(18, 'Mug rose Jay Dencre', 'IMG_6643.jpg', 20, 'Un mug avec une rose designer par Jay Dencre, cette rose arbore fièrement le nom de ce dernier!', '2021-04-17', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(19, 'Mug Jay Daniel', 'IMG_6647.jpg', 20, 'Buyez votre meilleur café... ou votre meilleur Jack Daniel... sa marche dans les deux sens.', '2021-04-12', 2, '9,7 x 8,2 cm', '360 grammes', 'Blanc', 'Céramique', 0),
(20, 'Plugs Double Flared Tube Acier chirurgical', 'Plugs-Double-Flared-Tube.jpg', 1.19, 'Plugs Double Flared Tube Acier chirurgical', '2021-06-08', 3, '', '', 'Argent', 'Acier chirurgical', 12);

-- --------------------------------------------------------

--
-- Structure de la table `tattoo`
--

CREATE TABLE `tattoo` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tattoo`
--

INSERT INTO `tattoo` (`id`, `image`, `artiste`, `date`, `alt`) VALUES
(1, '1.jpg', 'jay', '2021-02-19', 'predator'),
(2, '2.jpg', 'jay', '2021-02-16', 'cœur'),
(3, '3.jpg', 'jay', '2021-02-06', 'cover dragon'),
(4, '4.jpg', 'jay', '2021-01-22', 'doberman'),
(5, '5.jpg', 'jay', '2021-01-12', 'lioness'),
(6, '6.jpg', 'jay', '2020-12-12', ''),
(7, '7.jpg', 'jay', '2020-10-24', ''),
(8, '8.jpg', 'octo', '2021-04-03', 'grenade_trash_polka'),
(9, '9.jpg', 'octo', '2021-03-10', ''),
(11, '11.jpg', 'octo', '2021-04-02', ''),
(12, '12.jpg', 'octo', '2021-02-27', ''),
(13, '13.jpg', 'octo', '2021-02-27', ''),
(14, '14.jpg', 'octo', '2021-02-27', ''),
(17, '10.jpg', 'octo', '2021-04-07', 'Flèche octopium_ink'),
(19, '12.jpg', 'octo', '2021-02-27', ''),
(20, '13.jpg', 'octo', '2021-02-27', ''),
(21, '14.jpg', 'octo', '2021-02-27', ''),
(22, '1.jpg', 'jay', '2021-02-19', 'predator'),
(23, '2.jpg', 'jay', '2021-02-16', 'cœur'),
(24, '3.jpg', 'jay', '2021-02-06', 'cover dragon'),
(25, '4.jpg', 'jay', '2021-01-22', 'doberman'),
(26, '6.jpg', 'jay', '2020-12-12', ''),
(27, '1.jpg', 'jay', '2021-02-19', 'predator'),
(28, '2.jpg', 'jay', '2021-02-16', 'cœur'),
(29, '3.jpg', 'jay', '2021-02-06', 'cover dragon'),
(30, '4.jpg', 'jay', '2021-01-22', 'doberman'),
(31, '5.jpg', 'jay', '2021-01-12', 'lioness'),
(32, '6.jpg', 'jay', '2020-12-12', ''),
(33, '7.jpg', 'jay', '2020-10-24', ''),
(35, '9.jpg', 'octo', '2021-03-10', ''),
(37, '11.jpg', 'octo', '2021-04-02', ''),
(38, '12.jpg', 'octo', '2021-02-27', ''),
(39, '13.jpg', 'octo', '2021-02-27', ''),
(40, '14.jpg', 'octo', '2021-02-27', ''),
(43, '12.jpg', 'octo', '2021-02-27', ''),
(44, '13.jpg', 'octo', '2021-02-27', ''),
(45, '14.jpg', 'octo', '2021-02-27', ''),
(46, '1.jpg', 'jay', '2021-02-19', 'predator'),
(47, '2.jpg', 'jay', '2021-02-16', 'cœur'),
(48, '3.jpg', 'jay', '2021-02-06', 'cover dragon'),
(49, '4.jpg', 'jay', '2021-01-22', 'doberman'),
(50, '6.jpg', 'jay', '2020-12-12', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `tattoo`
--
ALTER TABLE `tattoo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `tattoo`
--
ALTER TABLE `tattoo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
