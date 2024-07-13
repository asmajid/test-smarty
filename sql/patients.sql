-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 juil. 2024 à 21:01
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
-- Base de données : `patient_management_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `doctor` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `img_url` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `phone`, `date`, `doctor`, `department`, `img_url`) VALUES
(106, 'Sophie ', 'Leroy', '51236978', '2024-07-28', 'DR. François Girard', 'Cardiologie', 'img-1.jpeg'),
(107, 'Marie ', 'Martin', '489+325693', '2024-07-21', 'DR. Thomas Lefevre', 'Radiologie', 'img-2.jpeg'),
(108, 'Anne ', 'Dubois', '155987123', '2024-07-24', 'Dr. Martin Dubois', 'Psychiatrie', 'img-7.jpeg'),
(109, 'Julie ', 'Roux', '89365470', '2024-07-25', 'Dr. Émilie Leclerc', 'Pédiatrie', 'img-8.jpeg'),
(110, 'Pierre ', 'Lambert', '025789463', '2024-07-27', 'Dr. Lucas Rousseau', 'Urgences', 'img-4.jpeg'),
(111, 'Isabelle ', 'Laurent', '012478965', '2024-07-25', 'Dr. Alice Bernard', 'Gynécologie-obstétrique', 'img-10.jpeg'),
(112, 'Marie ', 'Martin', '891475601', '2024-07-20', 'Dr. Émilie Leclerc', 'Pédiatrie', 'img-9.jpeg'),
(113, 'Alice', 'Dubois', '25687123', '2024-07-19', 'Dr. Lucas Rousseau	', 'Urgences	', 'img-6.jpeg'),
(114, 'Jean ', 'Dupont', 'Radiologie	', '2024-08-11', 'DR. Thomas Lefevre	', 'Radiologie	', 'img-3.jpeg'),
(115, 'Nicolasssss', 'Moreauuuuu', 'Radiologieeee', '2024-08-10', 'DR. Thomas Lefevre	', 'Radiologie', 'img-5.jpeg'),
(116, 'ssss', 'ssss', '555555', '2024-07-20', 'sssss', 'ssssss', 'img-2.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
