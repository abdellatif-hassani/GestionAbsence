-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 14 avr. 2023 à 01:02
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gab`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `crn_horaire` varchar(255) NOT NULL,
  `type_absence` varchar(255) NOT NULL,
  `is_old` tinyint(1) NOT NULL DEFAULT 0,
  `module` varchar(255) DEFAULT NULL,
  `professeur` int(11) DEFAULT NULL,
  `date_absence` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id`, `id_etudiant`, `crn_horaire`, `type_absence`, `is_old`, `module`, `professeur`, `date_absence`) VALUES
(30, 2, '8-10', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-12-03'),
(31, 1, '8-10', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-12-07'),
(32, 5, '8-10', 'Absence justifiée', 0, 'SGBDR/SQL', 19, '2022-12-07'),
(33, 1, '10-12', 'Absence non-justifiée', 0, 'Réseau', 20, '2022-12-21'),
(34, 3, '10-12', 'Absence non-justifiée', 0, 'Réseau', 20, '2022-12-21'),
(35, 7, '15-17', 'Absence justifiée', 0, 'Réseau', 20, '2022-12-22'),
(36, 7, '15-17', 'Absence non-justifiée', 0, 'architectures des ordinateurs et  assembleur ', 1, '2022-12-28'),
(37, 1, '13-15', 'Absence non-justifiée', 0, 'architectures des ordinateurs et  assembleur ', 21, '2022-12-01'),
(38, 1, '15-17', 'Absence justifiée', 0, 'architectures des ordinateurs et  assembleur ', 21, '2022-12-12'),
(39, 1, '15-17', 'Absence justifiée', 0, 'architectures des ordinateurs et  assembleur ', 21, '2022-12-12'),
(40, 4, '15-17', 'Absence non-justifiée', 0, 'architectures des ordinateurs et  assembleur ', 21, '2022-12-14'),
(41, 5, '10-12', 'Absence non-justifiée', 0, 'architectures des ordinateurs et  assembleur ', 21, '2022-12-14'),
(42, 6, '15-17', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-12-16'),
(43, 7, '17-19', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-12-17'),
(44, 2, '10-12', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-11-03'),
(45, 3, '13-15', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-11-30'),
(46, 4, '8-10', 'Absence non-justifiée', 0, 'SGBDR/SQL', 19, '2022-11-03'),
(47, 1, '10-12', 'Absence non-justifiée', 1, 'SGBDR/SQL', 19, '2023-01-04'),
(48, 1, '8-10', 'Absence justifiée', 0, 'SGBDR/SQL', 19, '2023-01-04');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `idClass` int(11) NOT NULL,
  `libelleClass` varchar(50) NOT NULL,
  `nbEtudiants` int(11) NOT NULL,
  `annee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`idClass`, `libelleClass`, `nbEtudiants`, `annee`) VALUES
(1, 'BDCC1', 40, '2022/2023'),
(2, 'GLSID1', 40, '2022/2023'),
(3, 'GIL1', 40, '2022/2023'),
(4, 'SEER1', 40, '2022/2023'),
(5, 'GECSI', 38, '2022/2023'),
(6, 'GMSI', 39, '2022/2023');

-- --------------------------------------------------------

--
-- Structure de la table `element_module`
--

CREATE TABLE `element_module` (
  `id` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `proportion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `element_module`
--

INSERT INTO `element_module` (`id`, `module`, `intitule`, `proportion`) VALUES
(1, 1, 'Algèbre', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` text NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idClass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `id_user`, `cin`, `nom`, `cne`, `prenom`, `date_naissance`, `adresse`, `lieu_naissance`, `telephone`, `email`, `idClass`) VALUES
(1, 8, 'LE20225', 'Hassani', 'M63547354', 'Abdellatif', '2002-05-12', 'adress etudiant', 'Er-Rich', '06666666', 'hassani@gmail.com', 1),
(2, 9, 'M6545', 'Nouari', 'N12222222', 'Abderrazzak', '2002-05-25', 'adress etudiant', 'Beni-Mellal', '+212655552785', 'nouari@gmail.com', 1),
(3, 10, 'N46545', 'Moutawassit', 'Z2223522222', 'Abdelali', '2002-05-17', 'adress etudiant', 'Mohammedia', '0655555555', 'moutawassit@gmai.com', 1),
(4, 11, 'M54553', 'Moukhliss', 'Z641653468', 'Abdessalam', '2002-02-02', 'adress etudiant', 'Agadir', '0654654658', 'moukhliss@gmail.com', 4),
(5, 12, 'MK5455', 'Tanassat', 'M541684865', 'Rachida', '2002-12-15', 'adress etudiant', 'Agadir', '06565351', 'tanassat@gmail.com', 1),
(6, 13, 'K3545', 'El Hachimi', 'S587485884', 'Oussama', '2002-12-15', 'adress etudiant', 'Mohammedia', '065454588', 'elhachimi@gmail.com', 2),
(7, 14, 'DZE55', 'BACHOUR', 'M44245', 'Amine', '2022-12-21', 'adresse etudiant', 'Agadir', '063254874', 'bachour@gmail.com', 1),
(10, 0, '', 'name1', '', 'name2', '0000-00-00', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `nom_module` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `nom_module`, `nature`) VALUES
(2, 'programmation en c avancée', 'Module scientifique et technique'),
(3, 'SGBDR/SQL', 'Module scientifique et technique'),
(4, 'architectures des ordinateurs et  assembleur ', 'Module scientifique et technique'),
(5, 'Statistiques', 'Module scientifique et technique'),
(6, 'Réseau', 'Module scientifique et technique');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `som` int(7) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `id_user`, `som`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 21, 6848978, 'EL ALAMI', 'Mustapha', 'elguemmat@gmail.com', '062645684'),
(2, 19, 4545478, 'JABBOUR', 'Nezha', 'benmoussa@gmail.com', '0626546584'),
(4, 20, 4645846, 'TAZI', 'Ahmed', 'rebbani@gmail.com', '0656848');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT 'etudiant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `type`) VALUES
(1, 'admin', 'password', 'admin'),
(7, 'professeur', 'password', 'professeur'),
(8, 'hassani', 'hassani', 'etudiant'),
(9, 'nouari', 'nouari', 'etudiant'),
(10, 'moutawassit', 'moutawassit', 'etudiant'),
(11, 'moukhliss', 'moukhliss', 'etudiant'),
(12, 'tanassat', 'tanassat', 'etudiant'),
(13, 'elhachimi', 'elhachimi', 'etudiant'),
(14, 'bachour', 'bachour', 'etudiant'),
(15, 'prof1', 'prof1', 'professeur'),
(19, 'benmoussa', 'benmoussa', 'professeur'),
(20, 'rebbani', 'rebbani', 'professeur'),
(21, 'elguemmat', 'elguemmat', 'professeur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`idClass`);

--
-- Index pour la table `element_module`
--
ALTER TABLE `element_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absence`
--
ALTER TABLE `absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `idClass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `element_module`
--
ALTER TABLE `element_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
