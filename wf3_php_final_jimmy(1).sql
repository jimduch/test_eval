-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mars 2021 à 17:36
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_final_jimmy`
--

-- --------------------------------------------------------

--
-- Structure de la table `contest`
--

CREATE TABLE `contest` (
  `id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `winner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contest`
--

INSERT INTO `contest` (`id`, `game_id`, `startdate`, `winner_id`) VALUES
(1, 1, '2019-12-25', 2),
(3, 3, '2020-12-25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `min_players` int(50) NOT NULL,
  `max_players` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`) VALUES
(1, '7 Wonders', 2, 7),
(2, 'Ticket to Ride', 2, 5),
(3, 'Pandemic', 2, 4),
(4, 'Munchkin', 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `player`
--

INSERT INTO `player` (`id`, `email`, `nickname`) VALUES
(1, 'luke.skywalker@rogue.sw', 'Luke'),
(2, 'amidala.padme@naboo.gov', 'Padme'),
(3, 'han.solo@milleniumfalcon. com', 'HanSolo'),
(4, 'chewbacca@wook.ie', 'Chewbie'),
(5, 'rey@jakku.planet', 'Rey');

-- --------------------------------------------------------

--
-- Structure de la table `player_contest`
--

CREATE TABLE `player_contest` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `player_contest`
--
ALTER TABLE `player_contest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_contest_fk0` (`player_id`),
  ADD KEY `player_contest_fk1` (`contest_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contest`
--
ALTER TABLE `contest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `player_contest`
--
ALTER TABLE `player_contest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `player_contest`
--
ALTER TABLE `player_contest`
  ADD CONSTRAINT `player_contest_fk0` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`),
  ADD CONSTRAINT `player_contest_fk1` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
