-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 08 Décembre 2018 à 19:46
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simpleBlog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'A. Nonyme', 'Bravo pour ce 1er billet !', '2018-11-06 14:41:00'),
(2, 1, 'A. Nonyme', 'Bonne continuation !', '2018-11-08 13:28:01'),
(8, 1, 'J.Forteroche', 'Merci! enetendu :)\r\n', '2018-11-15 13:14:04'),
(9, 1, 'A. Nonyme', 'COOL !', '2018-11-19 15:58:14'),
(11, 1, 'J.Forteroche', 'Yes !', '2018-11-19 16:11:02'),
(12, 1, 'A. Nonyme', 'OUI tiens bon!', '2018-11-19 16:17:32'),
(13, 1, 'J.Forteroche', 'Je ne lâche rien ! ', '2018-11-19 16:20:05');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL,
  `avatar` text,
  `signature` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `role`, `nickname`, `pass`, `email`, `registration_date`, `avatar`, `signature`) VALUES
(1, '0', 'TruckMush', '0000', 'tm@free.fr', '2018-12-02 00:00:00', '', ''),
(2, '0', 'Féfé', '5555', 'fefe@free.fr', '2018-12-02 00:00:00', '', ''),
(3, '0', 'Féfé', '5555', 'fefe@free.fr', '2018-12-02 00:00:00', '', ''),
(4, '0', 'DD', '$2y$10$cud6GeIgFXvxzPQyT6UcjOQ/ATF47OZH5PovyF4eK1yx8aNkQGRJ6', 'dd@orange.fr', '2018-12-02 00:00:00', '', ''),
(5, '0', 'Lola', '$2y$10$3S7ApdF5qOzXABbA0EogNuLZ8Ec40t2ur/RSzgqOf8PQshngQYqLK', 'lola@gmail.fr', '2018-12-02 00:00:00', '', ''),
(6, '0', 'Lola', '$2y$10$1hX7/VtNc3t61mwP.ejEKurE6Z35whPOAX842i9Zlr979mdCFoHHq', 'lola@gmail.fr', '2018-12-02 00:00:00', '', ''),
(7, '0', 'Lola', '$2y$10$wBERoyJueCijcsXHhtwhZ.zgfM/RErQIxAMnqYCi2OBrGhY51Lg9G', 'lola@gmail.fr', '2018-12-02 00:00:00', '', ''),
(8, '0', 'Arthur', '$2y$10$lOqv3PvNva/qqAlAwwMV2OC5Dj9T2RCxYShkl9EEyx6PS2dsAMJ0C', 'arthur@free.fr', '2018-12-02 00:00:00', '', ''),
(9, '0', 'Pierre', '$2y$10$ChgnweZPClg3GGgYKbPSheOKhRmc.o2kHI.2VR77Ht.a/y.wDtwAS', 'pierre@free.fr', '2018-12-02 00:00:00', '', ''),
(10, '0', 'Jacques', '$2y$10$5l0fs0kon92An0I8972HVutaMhD9ndJBszJDNcfT2.g2s9BzvwF2i', 'jacques@free.fr', '2018-12-02 00:00:00', '', ''),
(11, '0', 'Jacques', '$2y$10$Cvn22nXu.16FxxznnVt9TedE.TnxYw/mfe6i9EIrbTD5GnotDH31K', 'jacques@free.fr', '2018-12-02 00:00:00', '', ''),
(12, '0', 'Paul', '$2y$10$wOc05liiMdCZhAnjA9qGXO1Cvied.WnCIs6Ywnomz4oYPSJilsIWS', 'paul@free.fr', '2018-12-02 00:00:00', '', ''),
(13, '0', 'Paul', '$2y$10$GD4MWRZ1tYl9TkXW0qrADuRuSKHJ.5YOx4.KbZjR3FoqfysCNf29u', 'paul@free.fr', '2018-12-02 00:00:00', '', ''),
(14, 'membre', 'Nono', '$2y$10$y.JazS5BkQwqhugVkTTbq.e8hCyOG2JsGU4BZbV8WPhqX3z2bA9da', 'nono@free.fr', '2018-12-02 00:00:00', '', ''),
(15, 'membre', 'Nono', '$2y$10$2MKXPjiZGTrYL3UBWMdby.ggmRIqcAfLV7C5dp4UBqsoj9j4rcT2G', 'nono@free.fr', '2018-12-02 00:00:00', '', ''),
(16, 'membre', 'Nono', '$2y$10$JyKnQNGnR70Ji3DaTwOB8uG38bCft/cH1Btvd9TsbOrqEDNIiO7Sy', 'nono@free.fr', '2018-12-02 00:00:00', '', ''),
(17, 'membre', 'Nono', '$2y$10$ZWP6Ke.3KhgeJT/7pNn11.uPhUY071mc3sLuHLrqzwTG3qN.1lPPu', 'nono@free.fr', '2018-12-02 00:00:00', '', ''),
(18, 'membre', 'Nono', '$2y$10$WopfmbtWGg025nvzwNlnnuzmzZaW3qYz3qBH/fLtFPuQiVQPpRvfy', 'nono@free.fr', '2018-12-02 00:00:00', '', ''),
(19, 'membre', 'Nana', '$2y$10$wSS6gd0AMEFFu9Z0XlY7DuR98qLpqU7cmW1zH3/fdPSgTcBMgmfI2', 'nana@free.fr', '2018-12-02 00:00:00', '', ''),
(20, 'membre', 'Nana', '$2y$10$AQ8z1kSKlJCFDnMS5kivsuO41mq/.eyexv/PkC301ErllZsAZjmNu', 'nana@free.fr', '2018-12-02 00:00:00', '', ''),
(21, 'membre', 'Nana', '$2y$10$fRRlQQyv/Vlpt2lT1x9ykuJ43oJTS9BNvGPChzaz3lfQofFkIdrQ2', 'nana@free.fr', '2018-12-02 00:00:00', '', ''),
(22, 'membre', 'Nana', '$2y$10$LcVo9zSzyZ2zzKLydRSCzOdfW4LBBAgYQX5ykJfzHPL5ruT1b5bO6', 'nana@free.fr', '2018-12-02 00:00:00', '', ''),
(23, 'membre', 'Nina', '$2y$10$BsUejvzTDoWEH3elGWVydOVjVjCvWUTCiNECpWdyh.I.0/2TJhcwK', 'nina@free.fr', '2018-12-03 00:00:00', '', ''),
(24, 'membre', 'Momo', '$2y$10$hLK3hqRFIRbWdaE5.9qzyOWEkkyHVehgHadzvVN23xTF1amejxbCa', 'momo@free.fr', '2018-12-03 00:00:00', '', ''),
(25, 'membre', 'Mami', '$2y$10$7CvLMfbdDLW8IZ2qH1AHu.IV9.NjQCVdsAfXGfVRxuRmXo1.hB4pK', 'mami@free.fr', '2018-12-03 00:00:00', '', ''),
(26, 'membre', 'Zaze', '$2y$10$FurFaA4GWXInXGI35nI/mOQ/RLa/rn.MhdcRKdn9HceSLJ13pfAb2', 'zaze@free.fr', '2018-12-03 00:00:00', '', ''),
(27, 'membre', 'Titi', '$2y$10$16wfBK7A4hZ9jeHoi/7CTudwd3oEzRMxFPsx2F8PQKO9is9JOYSKC', 'titi@free.fr', '2018-12-03 00:00:00', '', ''),
(28, 'membre', 'Titi', '$2y$10$eqqJtFJjkPxweeExLPksle7y092LDg0OnXieblTk9NsebWdGRUWBO', 'titi@free.fr', '2018-12-03 00:00:00', '', ''),
(29, 'membre', 'Toto', '$2y$10$t0vQS2ryeysvkVjwnYIG3.9a4T32p6MgtyNRPJurQ5Kzh5WgJ6g2.', 'toto@free.fr', '2018-12-03 00:00:00', '', ''),
(30, 'membre', 'Lolo', '$2y$10$kXCU/v6s8iEs8jTVv0pUj.uhQx5p9e9zFd5gGzrfzhkpLwhHtoQk6', 'lolo@free.fr', '2018-12-08 00:00:00', '', ''),
(31, 'membre', 'Lolo', '$2y$10$7KeB/AqqvEiGHxLDfsL/3OzFaor1CqrZXA2KHf2EE2ah1awELb2YK', 'lolo@free.fr', '2018-12-08 00:00:00', '', ''),
(32, 'membre', 'Lolo', '$2y$10$TFoSUVJUfDVO1mmsSIk/ruG4aU53tsrxV1FyeStwObZZqGOGIr3W6', 'lolo@free.fr', '2018-12-08 00:00:00', '', ''),
(33, 'membre', 'Mama', '$2y$10$Oyz0n3WF6GT9RNWI9kPCGuh0anmC/SM7M0P14XQC2HU0Sqh0JqBFq', 'mama@free.fr', '2018-12-08 00:00:00', '', ''),
(34, 'membre', 'Mama', '$2y$10$Oiqwhbrgw5EJEjfhHTM4heYE/B2xGUm2qIDdxWoFFDMzlKB/rh7ga', 'mama@free.fr', '2018-12-08 00:00:00', '', ''),
(35, 'membre', 'Mama', '$2y$10$tWxebd4we.lHTQQwElYuKuSPiQLcEi./finDa08ro7Novll8IZmTu', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(36, 'membre', 'Mama', '$2y$10$ea/KpGWI5tFNOYb.DKUhdOQyiD7LKqiMwQue1t2rN7RODF7AwjI3W', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(37, 'membre', 'Mama', '$2y$10$EZa8fBgjwsXbHey/HgrQM.qRnxQ.7uyCyE77FV265cqxr0kz06olK', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(38, 'membre', 'Mama', '$2y$10$saknJcYvvYJ4GdNyz75kD.HwllhSMT8V3UBHYi5qfsoCPZm5kBtXa', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(39, 'membre', 'Mama', '$2y$10$DmR94YBH7VwAnNHIQXaRluwVpLULjtwKFTq7GSHYDRapokbEWIbq.', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(40, 'membre', 'Bibi', '$2y$10$XdMxFjrQv4hiVopvRWs4UeMce586OPApAvqmwUsjvjvB/cpe5Wu1S', 'bibi@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(41, 'membre', 'Bibi', '$2y$10$xz7eMKAp.eAbRGWuet6kBuw8C99PYnDafKBfwkK6ocrA98DV1b8li', 'bibi@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(42, 'membre', 'Bobo', '$2y$10$c0wMEEdtQZY063wksuO1qe7dEDM66mhQvqm/VL8r6bJt3w2DIV5yq', 'bobo@free.fr', '2018-12-08 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `creation_date`) VALUES
(1, 'Premier billet', 'Bonjour à vous! Ceci est le premier billet sur mon blog .', 'J.Forteroche', '2018-11-06 14:29:00'),
(2, 'Au travail', 'Il faut enrichir ce blog dès maintenant.', 'J.Forteroche', '0000-00-00 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
