-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 nov. 2020 à 19:42
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `quizzsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related',
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_text`, `is_valid_answer`, `answer_question_id`) VALUES
(1, '18 juin 1815', 1, 1),
(2, '18 juillet 1815', 0, 1),
(3, '18 juillet 1816', 0, 1),
(4, '14 janvier 800', 0, 2),
(5, '6 septembre 800', 0, 2),
(6, '25 decembre 800', 1, 2),
(7, '1924', 0, 3),
(8, '1926', 1, 3),
(9, '1927', 0, 3),
(10, '1928', 0, 3),
(11, '1931', 0, 3),
(12, '63', 1, 4),
(13, 'Kheops', 0, 5),
(14, 'Ramses II', 1, 5),
(15, 'Toutankhamon', 0, 5),
(16, '100', 0, 6),
(17, '200', 0, 6),
(18, '300', 0, 6),
(19, '400', 1, 6),
(20, '500', 0, 6),
(21, '64', 1, 7),
(22, 'Bleu', 0, 8),
(23, 'Blanc', 1, 8),
(24, 'Rouge', 0, 8),
(25, 'Elle range sa chambre', 0, 9),
(26, 'Elle se lave', 0, 9),
(27, 'Elle continue de dormir', 1, 9),
(28, '2020', 1, 10),
(29, '2026', 0, 10),
(30, '2027', 0, 10),
(31, '42', 0, 10),
(32, '1943', 0, 10),
(33, '42', 1, 11),
(34, 'Ronde', 1, 12),
(35, 'Plate', 0, 12),
(36, 'Cubique', 0, 12),
(37, 'I', 0, 13),
(38, 'II', 0, 13),
(39, 'III', 1, 13),
(40, 'IV', 0, 13),
(41, 'V', 0, 13),
(42, '1', 1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question',
  PRIMARY KEY (`question_id`),
  KEY `question_quizz_id_fk` (`question_quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'Quelle est la date de la bataille de Waterloo ?', 1, 'radio'),
(2, 'Quand s\'est fait le couronnement de Charlemagne ?', 1, 'checkbox'),
(3, 'Quelle est la date de naissance de la reine d\'Angleterre ', 1, 'select'),
(4, 'Combien y-a-t-il de pays en Afrique ?', 1, 'number'),
(5, 'Qui est le pharaon de Moise ?', 1, 'checkbox'),
(6, 'Combien d\'annees ont dure les croisades ?', 1, 'select'),
(7, 'Combien y-a-t\'il eu de roi en France ?', 1, 'number'),
(8, 'Quelle est la couleur du cheval blanc d\'Henri 4 ?', 2, 'radio'),
(9, 'Que fait une tortue le matin ?', 2, 'checkbox'),
(10, 'Quand est-ce que les poules auront des dents ?', 2, 'select'),
(11, 'Quelle est la reponse ?', 2, 'number'),
(12, 'De quelle forme est la terre ?', 2, 'checkbox'),
(13, 'Quam multa enim I + II ?', 2, 'select'),
(14, 'Combien y-a-t\'il de \"u\" dans Jacque Chirac ?', 2, 'number');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name',
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'Quizz histoire'),
(2, 'Quizz culture generale');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant',
  `username` varchar(255) NOT NULL COMMENT 'username to connect',
  `user_last_name` varchar(255) NOT NULL COMMENT 'user last name',
  `user_first_name` varchar(255) NOT NULL COMMENT 'user first name',
  `user_adress` longtext DEFAULT NULL COMMENT 'user physical adress',
  `user_phone` varchar(255) DEFAULT NULL COMMENT 'user phone',
  `user_birthdate` datetime DEFAULT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'User Password',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_last_name`, `user_first_name`, `user_adress`, `user_phone`, `user_birthdate`, `user_password`) VALUES
(1, 'CompteTest', 'Bertrand', 'Dubois', '25 avenue de monmiraille', '0607251458', '1981-06-09 00:00:00', '2ac9cb7dc02b3c0083eb70898e549b63'),
(2, 'Compte2', 'Pierre', 'Ducompte', 'avenue chateau royal', '0614253647', '1993-06-03 00:00:00', '6f9dff5af05096ea9f23cc7bedd65683'),
(3, 'Alderiate', 'Feneu', 'Charles', '3 rue de la ville', '0615244558', '2020-11-04 00:00:00', '4c3b6c7517e9f780744f6582f2d36fb6');

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT current_timestamp() COMMENT 'date of answer user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `answer_id_fk` (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_answer`
--

INSERT INTO `user_answer` (`user_answer_id`, `user_id`, `answer_id`, `user_answer_date`) VALUES
(264, 2, 28, '2020-11-07 14:52:49'),
(265, 2, 37, '2020-11-07 14:52:49'),
(350, 1, 28, '2020-11-07 15:15:17'),
(351, 1, 37, '2020-11-07 15:15:17'),
(400, 3, 28, '2020-11-07 19:37:58'),
(401, 3, 37, '2020-11-07 19:37:58');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Contraintes pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
