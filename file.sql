-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 14 Décembre 2023 à 11:54
-- Version du serveur: 4.1.22
-- Version de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `quinc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE IF NOT EXISTS `admine` (
  `logi` varchar(20) NOT NULL default '',
  `mdp` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`mdp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admine`
--

INSERT INTO `admine` (`logi`, `mdp`, `nom`) VALUES
('yassine@quinc', 'add', 'yassine'),
('admin@', 'ADMIN', 'yassine'),
('oussama@admin', 'ADMIN1', 'oosema');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `idcl` varchar(20) NOT NULL default '',
  `nom` varchar(20) NOT NULL default '',
  `prenom` varchar(20) NOT NULL default '',
  `tel` int(8) NOT NULL default '0',
  `adress` varchar(30) NOT NULL default '',
  `email` varchar(30) NOT NULL default '',
  `idprod` int(11) NOT NULL default '0',
  PRIMARY KEY  (`idcl`),
  KEY `idprod` (`idprod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`idcl`, `nom`, `prenom`, `tel`, `adress`, `email`, `idprod`) VALUES
('144', 'fathiii', 'marnisi', 2541586, 'nabeul', 'fathi@gmail', 214),
('22142', 'mostaan', 'atahan', 22314250, 'mourouj', 'mosatanatahan@com', 55984),
('8888', 'yassine', 'meddeb', 23181874, 'houaria-nabeul', 'yassinmeddeb564@gmail.com', 222);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idCom` int(11) NOT NULL auto_increment,
  `nomP` varchar(20) NOT NULL default '',
  `qte` int(11) NOT NULL default '0',
  `prix` float NOT NULL default '0',
  `dateC` date NOT NULL default '0000-00-00',
  `clientName` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`idCom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=55578 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`idCom`, `nomP`, `qte`, `prix`, `dateC`, `clientName`) VALUES
(3, 'verbruvain', 5, 50, '2022-04-05', 'azer'),
(66, 'pneu', 12, 100, '2020-03-03', 'monir'),
(55577, 'Echappement', 40, 222, '2024-02-02', 'mohamed');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nom` varchar(20) NOT NULL default '',
  `email` varchar(30) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `message`) VALUES
('', '', 'bonne\r\n'),
('chaima', 'chaimameddeb@der', 'bonne\r\n'),
('jhgfd', 'jhg@hugyftd', 'kljhgfd'),
('JOHN', 'JOHN.SMIYH@HHH', 'RTYUIO'),
('mikel', 'mikel@gmail', 'yyyyyyyyyyyyaa'),
('mohamed', 'mohamed333@gmail.com', 'meuilleur produits et meuilleur services'),
('rami', 'rami@gmail.com', 'je ne reçu pas mon commande\r\n'),
('sadedi', 'sadedi@gmail.com', 'service Excellent !!!!!'),
('yassineee', 'yassinmeddeb4@gmail.com', 'ytftyff'),
('Meddeb', 'yassinmeddeb564@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL default '0',
  `nom` varchar(20) NOT NULL default '',
  `decs` varchar(20) NOT NULL default '',
  `prix` double NOT NULL default '0',
  `qte` int(11) NOT NULL default '0',
  `catrgorie` varchar(20) NOT NULL default '',
  `img` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `decs`, `prix`, `qte`, `catrgorie`, `img`) VALUES
(1, 'multiprise', 'bon qualité', 15, 20, 'electricite', 'multiprise.jfif'),
(5, 'Echappment', 'Bon Qualité', 20, 20, 'mecanique', 'echappment.jfif'),
(23, 'flexible', 'Bon Qualité', 8, 30, 'plombier', 'flexible.jfif'),
(25, 'Robiner Jardin', 'Bon Qualité', 20, 30, 'plombier', 'robiner.jfif'),
(26, 'Robiner Verticale', 'Bon Qualité', 45, 25, 'plombier', 'robVerticale.jfif'),
(30, 'Verbrocain', 'Bon Qualité', 80, 10, 'mecanique', 'verbrocain.jfif'),
(45, 'cable 2,5', 'cable 2,5 Bon Qualit', 50, 100, 'electricite', 'cable2.jfif'),
(48, 'pince', 'bon Qualité', 12, 20, 'outillage', 'pince.jfif'),
(65, 'mal39a', 'mala39a mooomtaza', 12, 100, 'outillage', 'mala39a.jfif'),
(200, 'lampe', 'bon qualité', 10, 15, 'electricite', 'lampe.jfif'),
(445, 'vis', 'bakou', 20, 20, 'outillage', 'vis.jfif'),
(2134, 'mtar9a', 'todhreb dharban\r\n\r\n\r', 15, 4, 'outillage', 'verbrocain.jfif'),
(2223, 'pppp', 'kkkkkkkkkkk', 100, 20, 'outillage', 'multiprise.jfif'),
(44654, 'Gorge', 'Bon Qualité', 50, 20, 'electricite', 'gorge.jfif'),
(54544, 'Multicouche.jfif', 'Bon Qualité', 45, 15, 'plombier', 'multicouche.jfif'),
(88484, 'Piston', 'Bon Qualité\r\ntout le', 30, 30, 'mecanique', 'piston.jfif'),
(132122, 'Pneu', 'Bon Qualité', 120, 15, 'mecanique', 'pneu.jfif');
