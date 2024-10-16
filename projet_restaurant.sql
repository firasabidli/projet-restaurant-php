-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 déc. 2022 à 09:32
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
-- Base de données : `projet_restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`idmenu`, `title`, `price`, `image`) VALUES
(1, 'burger', 8, './assets/images/burger.jpg'),
(2, 'lasagna', 7, './assets/images/lasagna.jpg'),
(3, 'pasta', 9, './assets/images/pasta.jpg'),
(4, 'pizza', 9, './assets/images/pizza.jpg'),
(5, 'Hot Dog', 10, './assets/images/Hot Dog.jpg'),
(6, 'Sandwich', 5, './assets/images/Sandwich.jpg'),
(7, 'Spanchi', 4, './assets/images/Spanchi.jpg'),
(13, 'cake', 35, './assets/images/cake.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'user',
  `avatar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `date_naissance`, `tel`, `adresse`, `email`, `password`, `role`, `avatar`) VALUES
(1, 'abidli', 'firas', '2001-01-26', 29611488, 'el bhayriya el bir lakhdher bousalem jendouba', 'abidlifiras@gmail.com', '$2y$10$0sDX9g65dYN/sLztf24Lhuh.N63M.YY96OEmTAvTKj.Fx0cZ3d1.i', 'admin', './assets/images/avatar/avatarfiras.jpg'),
(2, 'touti', 'raed', '2001-06-25', 24553242, 'el bhayriya el bir lakhdher bousalem jendouba', 'raedtouti250@gmail.com', '$2y$10$kyzet/UoCVnkZQHBOO3eTehVUYR4UNEQKHSPL4MbJc/i9xgpAgSxS', 'user', './assets/images/avatar/avatarraed.jpg'),
(3, 'hamraoui', 'mohamed ali', '2001-10-26', 23903675, 'manouba', 'hamraouidali@gmail.com', '$2y$10$wFDDwurtcriUSAdGr8P2d.Ea5bZZWv/NOklkqZH3KyFGz/dK6Jvmq', 'user', './assets/images/avatar/avatardali.jpg'),
(9, 'hmissi', 'kossai', '2003-03-05', 23555789, 'bousalem', 'kossay@gmail.com', '$2y$10$3yk.yh/Breo9.Ca4w/qLSeGCgfdrccjQfvwYeyVCUjLROZ7UbXp2i', 'user', './assets/images/avatar/avataribrahim.jpg'),
(11, 'hamdi', 'fadi', '2001-03-03', 23521477, 'bousalem', 'fadihamdi@gmail.com', '$2y$10$8KoTkABwHucNfbBN6vaNBeLV5Qqf0pfB2zFMQOG.MojxKF9DRBDXO', 'user', './assets/images/avatar/avataribrahim.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
