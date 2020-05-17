-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 17 mai 2020 à 14:05
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionpub`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id_P` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `content` varchar(20000) DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_P`),
  KEY `id_u` (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_P`, `title`, `content`, `id_u`) VALUES
(1, 'jaaaa', 'jgkdgdlkgldf', NULL),
(2, 'jaaaabbbbbbbbbbbb', 'kjkldsjvslkvjldsvjlsvjsvjlsvlsvskldnk', NULL),
(7, 'med', 'jlaba', 7),
(8, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.', NULL),
(5, 'hamid', 'wldhnini', 8),
(6, 'hamid', 'rajl mzyan', 8),
(9, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque error eum distinctio, et natus perspiciatis unde ut optio in omnis corrupti facere officia quidem quibusdam. Officiis debitis beatae iste.', 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_U` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_U`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_U`, `username`, `email`, `pass`) VALUES
(1, 'gfjld', 'mohammedguitariste@gmail.com', 'kgjkfl'),
(2, 'hgj', 'mohammedguitariste@gmail.com', 'jhgj'),
(3, 'kvgd', 'mohammedguitariste@gmail.com', 'vfdfd'),
(4, NULL, NULL, NULL),
(5, 'vlkdvd', 'fvd@.ocl', 'azerty'),
(6, '', '', 'azerty'),
(7, 'med', 'med@hololo.com', '1234'),
(8, 'hamid', 'hamido@ha.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
