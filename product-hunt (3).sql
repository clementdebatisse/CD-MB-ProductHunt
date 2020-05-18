-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 18 mai 2020 à 13:58
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `product-hunt`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `popular` int(11) NOT NULL,
  `gants` varchar(1000) NOT NULL,
  `masques` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `nom`) VALUES
(1, 'Clément Debatisse'),
(2, 'Usher Kadio'),
(3, 'Olivier Guillemot'),
(4, 'ANTONIN AVON'),
(5, 'Esther Itam'),
(6, 'Matéo'),
(7, 'Balthazard'),
(8, 'Jean-ferosinge'),
(9, 'mat');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `name` varchar(80) NOT NULL,
  `description` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `ups` int(11) NOT NULL DEFAULT '0',
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`name`, `description`, `id`, `url`, `ups`, `image`) VALUES
('Urban Air Mask 2.0', 'Sobre, efficace et flexible, l’Urban Air Mask 2.0 combine les qualités scandinaves avec succès. Offrant d’excellentes prestations et facile à porter, le dernier produit d’Airinum est idéal pour les citadins qui n’en peuvent plus de respirer un air chargé de particules et de mauvaises odeurs.', 1, 'https://www.amazon.fr/Airinum-Urban-Air-Mask-Atmosph%C3%A9rique/dp/B07M7LTWJS', 13, '../Library/mask2.jpg'),
('Mask Generation', 'C\'est dans l\'optique de proposer aux français un masque de protection efficace, confortable, réutilisable et abordable que l\'entreprise Mask Generation a créé Le Mask Français. Un masque 100% Made in France à un tarif bien plus abordable que le masque haut de gamme déjà proposé par la marque (le Sirocco), puisqu\'il est disponible sur le site LeMaskFrançais.com à 39€.', 2, 'https://www.maskgeneration.com/', 7, '../Library/mask1.jpg'),
('NanoHack', 'Le fabricant de matériaux d’impression 3D Copper3D vient de mettre en ligne un fichier STL open-source d’un masque N95, imprimable en 3D. Son initiative “Hack The Pandemic” est mondiale et vise à mobiliser tous les fabricants de machines, fablabs, services d’impression, etc. à créer ces masques dont le manque se fait ressentir dans les hôpitaux et chez les professionnels de santé.', 3, 'https://copper3d.com/hackthepandemic/', 17, '../Library/mask3.jpg'),
('Gants militaires', 'Gant militaire à partir de 9€. Le gant est un accessoire de mode, un équipement de sport ou un élément de protection, recouvrant la main, utilisé pour se protéger notamment du froid, ou encore des écorchures et frottements.', 4, 'https://www.projet13.com/267-gant-militaire', 11, '../Library/gloves1.jpg'),
('Gants en latex', 'Gants à usage unique en latex étanche, ultra fins. Très grande souplesse, effet seconde peau garantie. Pour risques mineurs uniquement.', 5, 'https://www.amazon.fr/gants-latex-jetable/s?k=gants+latex+jetable', 3, '../Library/gloves3.jpg'),
('Gants médicaux', 'Les gants médicaux sont des consommables médicaux indispensables à tous les professionnels de santé, utilisés dans les cabinets médicaux, les hôpitaux... Ces gants sont à usage unique et permettent de protéger le patient et le soignant des infections pouvant se transmettre par contact.', 6, 'https://www.nmmedical.fr/protection-medicale/gants-medicaux.html', 2, '../Library/gloves2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
