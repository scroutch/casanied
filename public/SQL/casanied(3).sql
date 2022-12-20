-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 déc. 2022 à 09:15
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `casanied`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `firstName`, `email`, `password`, `date_ajout`) VALUES
(1, 'mimo', 'greg', 'greg@casanied.com', '$2y$10$xV6EtebCyQmO9txp7XYkxelInVB/7p5p65tuKwqflonuRKUZH3d0.', '2022-11-14 12:26:35'),
(2, 'test', 'test', 'test@test.com', '$2y$10$PWvOyTJYX8hRu4tuqXr4cu7X86Qp34jaqDt2A5Njd.hrxRPNg7gce', '2022-11-14 17:12:22');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'locations'),
(2, 'ventes');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_envoi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `firstName`, `tel`, `mail`, `message`, `date_envoi`) VALUES
(1, 'duhain', 'cecile', '0606060606', 'test@test.com', 'blablablabla', '2022-11-10 14:06:23'),
(2, 'Dupont', 'Maurice', '0606060606', 'md@test.fr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:34:56'),
(3, 'Dupont', 'Maurice', '0606060606', 'md@test.fr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:36:53'),
(4, 'Dupont', 'Maurice', '0606060606', 'md@test.fr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:39:23'),
(5, 'Dupont', 'Maurice', '0606060606', 'md@test.fr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:42:25'),
(6, 'Dupont', 'Maurice', '0606060606', 'md@test.fr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:44:05'),
(7, 'Dupond', 'Jack', '0606060606', 'dj@test.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2022-12-01 11:48:02'),
(8, 'test', 'fddsdfs', '0606060606', 'test@test.net', 'qsdqsdqsdq', '2022-12-01 11:49:43'),
(9, 'dfsfsdf', 'sfdsfs', '0606060606', 'test@test.com', 'sqdqd', '2022-12-01 11:51:00');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `rue` varchar(255) DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `nb_bedroom` int(11) DEFAULT '0',
  `nb_bathroom` int(11) DEFAULT '0',
  `surface` varchar(50) DEFAULT NULL,
  `type_product` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `title`, `img`, `description`, `rue`, `code_postal`, `ville`, `nb_bedroom`, `nb_bathroom`, `surface`, `type_product`, `price`, `created_date`, `category_id`) VALUES
(35, 'Maison de campagne', 'prod-1671007304', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.&lt;', '125 rue des peupliers', '57310', 'bousse', 3, 1, '110', 'Maison', '175000', '2022-12-13 15:42:40', 2),
(36, 'Terrain', 'prod-1670944217.jpg', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.', '12 rue des fromagers', '54000', 'boulay', 1, 1, '125000000', 'Terrain', '35000', '2022-12-13 16:10:17', 2),
(37, 'test', 'prod-1671007802.jpg', 'test', 'test', '99999', 'test', 1, 1, '125000', 'Maison', '500000', '2022-12-13 16:17:53', 1),
(38, 'test', 'prod-1671007976.jpg', 'test', 'test', '55555', 'test', 1, 1, '150000', 'Maison', '135000', '2022-12-14 09:52:56', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
