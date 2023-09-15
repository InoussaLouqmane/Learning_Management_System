-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 sep. 2023 à 22:38
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_CF`
--

-- --------------------------------------------------------

--
-- Structure de la table `Coefficier`
--

CREATE TABLE `Coefficier` (
  `id_Filiere` varchar(11) NOT NULL,
  `id_Matiere` int(11) NOT NULL,
  `coefficient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Composer`
--

CREATE TABLE `Composer` (
  `id_Etudiant` int(11) NOT NULL,
  `id_Matiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Encadrer`
--

CREATE TABLE `Encadrer` (
  `id_Filiere` varchar(11) NOT NULL,
  `id_Professeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Enseigner`
--

CREATE TABLE `Enseigner` (
  `id_Filiere` varchar(11) NOT NULL,
  `id_Matiere` int(11) NOT NULL,
  `id_Professeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `id_Etudiant` int(11) NOT NULL,
  `nomEtudiant` varchar(255) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_Naissance` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `is_enabled` int(11) NOT NULL DEFAULT 1,
  `id_Filiere` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Evaluer`
--

CREATE TABLE `Evaluer` (
  `id_Etudiant` int(11) NOT NULL,
  `id_Matiere` int(11) NOT NULL,
  `id_Note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Filiere`
--

CREATE TABLE `Filiere` (
  `id_Filiere` varchar(11) NOT NULL,
  `nomFilere` varchar(255) DEFAULT NULL,
  `coordinateur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Matiere`
--

CREATE TABLE `Matiere` (
  `id_Matiere` int(11) NOT NULL,
  `nomMatiere` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `id_Note` int(11) NOT NULL,
  `note1` float DEFAULT NULL CHECK (`note1` >= 0 and `note1` <= 20),
  `note2` float DEFAULT NULL CHECK (`note2` >= 0 and `note2` <= 20),
  `devoir1` float DEFAULT NULL CHECK (`devoir1` >= 0 and `devoir1` <= 20),
  `devoir2` float DEFAULT NULL CHECK (`devoir2` >= 0 and `devoir2` <= 20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Professeur`
--

CREATE TABLE `Professeur` (
  `id_Professeur` int(11) NOT NULL,
  `nomProfesseur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Salle`
--

CREATE TABLE `Salle` (
  `id_Salle` int(11) NOT NULL,
  `nomSalle` varchar(255) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Timetable`
--

CREATE TABLE `Timetable` (
  `id_Cours` int(11) NOT NULL,
  `heuredebut` time DEFAULT NULL CHECK (`heuredebut` >= '07:00' and `heuredebut` <= '12:00' or `heuredebut` >= '14:00' and `heuredebut` <= '18:00'),
  `heurefin` time DEFAULT NULL CHECK (`heurefin` >= '08:00' and `heurefin` <= '13:00' or `heurefin` >= '15:00' and `heurefin` <= '19:00'),
  `id_Salle` int(11) DEFAULT NULL,
  `id_Filiere` varchar(11) NOT NULL,
  `id_Matiere` int(11) DEFAULT NULL,
  `id_Professeur` int(11) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Coefficier`
--
ALTER TABLE `Coefficier`
  ADD PRIMARY KEY (`id_Filiere`,`id_Matiere`),
  ADD KEY `id_Matiere` (`id_Matiere`);

--
-- Index pour la table `Composer`
--
ALTER TABLE `Composer`
  ADD PRIMARY KEY (`id_Etudiant`,`id_Matiere`),
  ADD KEY `id_Matiere` (`id_Matiere`);

--
-- Index pour la table `Encadrer`
--
ALTER TABLE `Encadrer`
  ADD PRIMARY KEY (`id_Filiere`,`id_Professeur`),
  ADD KEY `id_Professeur` (`id_Professeur`);

--
-- Index pour la table `Enseigner`
--
ALTER TABLE `Enseigner`
  ADD PRIMARY KEY (`id_Filiere`,`id_Matiere`,`id_Professeur`),
  ADD KEY `id_Matiere` (`id_Matiere`),
  ADD KEY `id_Professeur` (`id_Professeur`);

--
-- Index pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`id_Etudiant`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD KEY `id_Filiere` (`id_Filiere`);

--
-- Index pour la table `Evaluer`
--
ALTER TABLE `Evaluer`
  ADD PRIMARY KEY (`id_Etudiant`,`id_Matiere`),
  ADD KEY `id_Matiere` (`id_Matiere`),
  ADD KEY `id_Note` (`id_Note`);

--
-- Index pour la table `Filiere`
--
ALTER TABLE `Filiere`
  ADD PRIMARY KEY (`id_Filiere`),
  ADD UNIQUE KEY `nomFilere` (`nomFilere`);

--
-- Index pour la table `Matiere`
--
ALTER TABLE `Matiere`
  ADD PRIMARY KEY (`id_Matiere`);

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`id_Note`);

--
-- Index pour la table `Professeur`
--
ALTER TABLE `Professeur`
  ADD PRIMARY KEY (`id_Professeur`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Index pour la table `Salle`
--
ALTER TABLE `Salle`
  ADD PRIMARY KEY (`id_Salle`),
  ADD UNIQUE KEY `nomSalle` (`nomSalle`);

--
-- Index pour la table `Timetable`
--
ALTER TABLE `Timetable`
  ADD PRIMARY KEY (`id_Cours`),
  ADD KEY `id_Salle` (`id_Salle`),
  ADD KEY `id_Filiere` (`id_Filiere`),
  ADD KEY `id_Matiere` (`id_Matiere`),
  ADD KEY `id_Professeur` (`id_Professeur`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Coefficier`
--
ALTER TABLE `Coefficier`
  ADD CONSTRAINT `Coefficier_ibfk_1` FOREIGN KEY (`id_Filiere`) REFERENCES `Filiere` (`id_Filiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Coefficier_ibfk_2` FOREIGN KEY (`id_Matiere`) REFERENCES `Matiere` (`id_Matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Composer`
--
ALTER TABLE `Composer`
  ADD CONSTRAINT `Composer_ibfk_1` FOREIGN KEY (`id_Etudiant`) REFERENCES `Etudiant` (`id_Etudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Composer_ibfk_2` FOREIGN KEY (`id_Matiere`) REFERENCES `Matiere` (`id_Matiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Encadrer`
--
ALTER TABLE `Encadrer`
  ADD CONSTRAINT `Encadrer_ibfk_1` FOREIGN KEY (`id_Filiere`) REFERENCES `Filiere` (`id_Filiere`)ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Encadrer_ibfk_2` FOREIGN KEY (`id_Professeur`) REFERENCES `Professeur` (`id_Professeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Enseigner`
--
ALTER TABLE `Enseigner`
  ADD CONSTRAINT `Enseigner_ibfk_1` FOREIGN KEY (`id_Filiere`) REFERENCES `Filiere` (`id_Filiere`)ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enseigner_ibfk_2` FOREIGN KEY (`id_Matiere`) REFERENCES `Matiere` (`id_Matiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enseigner_ibfk_3` FOREIGN KEY (`id_Professeur`) REFERENCES `Professeur` (`id_Professeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD CONSTRAINT `Etudiant_ibfk_1` FOREIGN KEY (`id_Filiere`) REFERENCES `Filiere` (`id_Filiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Evaluer`
--
ALTER TABLE `Evaluer`
  ADD CONSTRAINT `Evaluer_ibfk_1` FOREIGN KEY (`id_Etudiant`) REFERENCES `Etudiant` (`id_Etudiant`)ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Evaluer_ibfk_2` FOREIGN KEY (`id_Matiere`) REFERENCES `Matiere` (`id_Matiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Evaluer_ibfk_3` FOREIGN KEY (`id_Note`) REFERENCES `Note` (`id_Note`)ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Timetable`
--
ALTER TABLE `Timetable`
  ADD CONSTRAINT `Timetable_ibfk_1` FOREIGN KEY (`id_Salle`) REFERENCES `Salle` (`id_Salle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Timetable_ibfk_2` FOREIGN KEY (`id_Filiere`) REFERENCES `Filiere` (`id_Filiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Timetable_ibfk_3` FOREIGN KEY (`id_Matiere`) REFERENCES `Matiere` (`id_Matiere`),
  ADD CONSTRAINT `Timetable_ibfk_4` FOREIGN KEY (`id_Professeur`) REFERENCES `Professeur` (`id_Professeur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
