-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 12 Mars 2019 à 19:14
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
  `flagged` tinyint(1) DEFAULT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `flagged`, `comment_date`) VALUES
(221, 70, 'Mathieu', 'Yes !', 0, '2019-02-16 00:46:51'),
(222, 71, 'Baptiste', 'TIP TOP !!!', 0, '2019-02-16 00:47:17'),
(223, 71, 'Mathieu', 'TROP TOP ', 0, '2019-02-16 00:47:39'),
(224, 69, 'Lola', 'WOUHA !!!', 0, '2019-02-16 00:54:26'),
(225, 70, 'Baptiste', 'Top !', 0, '2019-02-18 17:02:35'),
(226, 70, 'Mathieu', 'OUI !', 0, '2019-02-18 17:05:42'),
(227, 70, 'Baptiste', 'ok !', 0, '2019-02-18 18:04:38'),
(228, 70, 'Mathieu', 'YES BAT !', 0, '2019-02-18 18:08:17'),
(229, 70, 'Mathieu', 'TIP TOP !!!', 0, '2019-02-18 18:20:43'),
(230, 70, 'Baptiste', 'OUI !!!', 0, '2019-02-18 18:22:03'),
(231, 70, 'Mathieu', 'Et Oui !', 0, '2019-02-18 18:25:19'),
(232, 70, 'Baptiste', 'Genial !', 0, '2019-02-18 18:27:32'),
(233, 70, 'Mathieu', 'Presque !', 0, '2019-02-18 18:29:13'),
(234, 70, 'Baptiste', 'Bientôt', 0, '2019-02-18 18:29:49'),
(235, 70, 'Mathieu', 'Demain ?..', 0, '2019-02-18 19:25:31'),
(236, 70, 'Baptiste', 'Non Maintenant ...', 0, '2019-02-18 19:26:30'),
(237, 70, 'Mathieu', 'T', 0, '2019-02-18 19:28:56'),
(238, 70, 'Baptiste', 'MOUAI !', 0, '2019-02-18 19:35:00'),
(239, 70, 'Mathieu', 'NON', 0, '2019-02-18 19:36:33'),
(240, 70, 'Baptiste', 'Blablabla !!!', 0, '2019-02-18 20:03:46'),
(241, 70, 'Mathieu', 'J\'essai encore ...', 0, '2019-02-18 20:10:32'),
(242, 70, 'Baptiste', 'Essaies essaie ...!', 0, '2019-02-18 20:12:08'),
(243, 70, 'Mathieu', 'j\'essaie !', 0, '2019-02-18 20:39:40'),
(244, 70, 'Baptiste', '\r\n\r\n\r\n    \r\n        \r\n        \r\n        \r\n        \r\n        \r\n         \r\n\r\n\r\n        \r\n        \r\n    \r\n    \r\n       \r\n        \r\n\r\n\r\n\r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\nAlors !?\r\n       \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n    ', 0, '2019-02-18 20:51:09'),
(245, 70, 'Mathieu', 'J\'essai encore et encore ...', 0, '2019-02-18 20:52:37'),
(246, 70, 'Baptiste', 'J\'attend....', 0, '2019-02-18 20:54:23'),
(247, 70, 'Mathieu', 'ok !', 0, '2019-02-18 20:55:30'),
(248, 70, 'Baptiste', 'bon alors ?...', 0, '2019-02-18 20:56:17'),
(249, 70, 'Mathieu', 'No comment !\r\n', 0, '2019-02-23 19:36:15'),
(250, 70, 'Baptiste', 'Super cool !', 0, '2019-03-07 14:09:21'),
(254, 71, 'Toutou', 'OK !!!', 0, '2019-03-12 19:07:17');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `role` int(255) NOT NULL,
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
(28, 1, 'Titi', '$2y$10$eqqJtFJjkPxweeExLPksle7y092LDg0OnXieblTk9NsebWdGRUWBO', 'titi@free.fr', '2018-12-03 00:00:00', '', ''),
(29, 1, 'Toto', '$2y$10$t0vQS2ryeysvkVjwnYIG3.9a4T32p6MgtyNRPJurQ5Kzh5WgJ6g2.', 'toto@free.fr', '2018-12-03 00:00:00', '', ''),
(32, 1, 'Lolo', '$2y$10$TFoSUVJUfDVO1mmsSIk/ruG4aU53tsrxV1FyeStwObZZqGOGIr3W6', 'lolo@free.fr', '2018-12-08 00:00:00', '', ''),
(39, 1, 'Mama', '$2y$10$DmR94YBH7VwAnNHIQXaRluwVpLULjtwKFTq7GSHYDRapokbEWIbq.', 'mama@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(41, 1, 'Bibi', '$2y$10$xz7eMKAp.eAbRGWuet6kBuw8C99PYnDafKBfwkK6ocrA98DV1b8li', 'bibi@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(42, 1, 'Bobo', '$2y$10$c0wMEEdtQZY063wksuO1qe7dEDM66mhQvqm/VL8r6bJt3w2DIV5yq', 'bobo@free.fr', '2018-12-08 00:00:00', NULL, NULL),
(43, 1, 'Tata', '$2y$10$GfSpuRSaWrZuqAaHRVJ9z.6UsRN0yD/mtLccalxtmDg1IebNirT2q', 'tata@free.fr', '2018-12-10 00:00:00', NULL, NULL),
(47, 1, 'Louloutte', '$2y$10$bKRNz4X0gaIu1NhVw40GRO2qfOOaCnZQV2hrZFxLWobxka66Yi4nG', 'louloutte@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(48, 1, 'Riri', '$2y$10$C9bXqkBH074PYQ0AwSlwpeIV8bRuaVSlfNXndWSM7h9eD6/eaE1MC', 'riri@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(49, 1, 'Alfa', '$2y$10$BE62AI269Xz5cxRvAvA5hezAR7Z2P0XGowVajMV.JF.93ZoBN2R2i', 'alfa@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(53, 1, 'Fifi', '$2y$10$i4YeGTuEgeY.crMGs5tpQOEDrBnFTgtRzHSgNViqotfrR55tSLN7W', 'fifi@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(54, 1, 'lila', '$2y$10$rSDJE0sGT1/dzLzyRXmVYe.76NcavnMWU4TR0uxlzSozq2hyAKeDa', 'lila@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(55, 1, 'Lali', '$2y$10$l/8HdjQOcG8KSZhhb4yYFOnng9ZlJK2o.NbIHhVfNuaNtRqXDltzW', 'lali@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(56, 1, 'Lilo', '$2y$10$mIGUCOqi4Sy2sewX.3kzNOYM6eCOi3Rj6h2xtB7FKZJrwkRnlLZ2y', 'lilo@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(57, 2, 'Toutou', '$2y$10$fqQkS9MOeOEprTsXlyBdvOgSbNPlclHjFf0qsl24LHJXMtg4/BwDq', 'toutou@free.fr', '2018-12-12 02:00:00', NULL, NULL),
(58, 1, 'roro', '$2y$10$V.Hy1/BtUMxhd6M6OgSN5.LiMNKBzjXDykUZkp5B9DxzUGrNhsfyi', 'roro@free.fr', '2018-12-20 00:00:00', NULL, NULL);

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
(53, 'DEVENIR WEB DEV', '\r\n\r\nQuam ob rem cave Catoni anteponas ne istum quidem ipsum, quem Apollo, ut ais, sapientissimum iudicavit; huius enim facta, illius dicta laudantur. De me autem, ut iam cum utroque vestrum loquar, sic habetote.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nQuam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere, P. Scipioni ex multis diebus, quos in vita celeberrimos laetissimosque viderit, illum diem clarissimum fuisse, cum senatu dimisso domum reductus ad vesperum est a patribus conscriptis, populo Romano, sociis et Latinis, pridie quam excessit e vita, ut ex tam alto dignitatis gradu ad superos videatur deos potius quam ad inferos pervenisse.\r\n', 'J.Forteroche', '2019-02-12 21:03:37'),
(58, 'P4 !...', '\r\n<b>Principium</b>au unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.\r\n\r\nProinde concepta rabie saeviore, quam desperatio incendebat et fames, amplificatis viribus ardore incohibili in excidium urbium matris Seleuciae efferebantur, quam comes tuebatur Castricius tresque legiones bellicis sudoribus induratae.\r\n\r\nEt prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.\r\n', 'J.Forteroche', '2019-02-12 21:15:11'),
(59, 'Bientôt le P5 !', '\r\n\r\nInter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.\r\n\r\nQuapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; deinde cum similis sensus exstitit amoris, si aliquem nacti sumus cuius cum moribus et natura congruamus, quod in eo quasi lumen aliquod probitatis et virtutis perspicere videamur.\r\n\r\nAt nunc si ad aliquem bene nummatum tumentemque ideo honestus advena salutatum introieris, primitus tamquam exoptatus suscipieris et interrogatus multa coactusque mentiri, miraberis numquam antea visus summatem virum tenuem te sic enixius observantem, ut paeniteat ob haec bona tamquam praecipua non vidisse ante decennium Romam.\r\n', 'J.Forteroche', '2019-02-12 21:14:15'),
(61, 'TinyMCE', '<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<h1 style=\"text-align: justify;\"><em>Per hoc minui studium <strong>suum existimans Paulus, ut</strong> erat in conplicandis negotiis artifex dirus</em>, <strong>unde ei Catenae inditum est cognomentum,</strong> vicarium ipsum eos quibus praeerat adhuc defensantem ad sortem periculorum communium traxit. et instabat ut eum quoque cum tribunis et aliis pluribus ad comitatum imperatoris vinctum perduceret: quo percitus ille exitio urgente abrupto ferro eundem adoritur Paulum. et quia languente dextera, letaliter ferire non potuit, iam districtum mucronem in proprium latus inpegit. hocque deformi genere mortis excessit e vita iustissimus rector ausus miserabiles casus levare multorum.</h1>\r\n<p>Auxerunt haec vulgi sordidioris audaciam, quo<span style=\"text-decoration: underline;\">d cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam</span> ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminec<span style=\"background-color: #f1c40f;\">em laniatu miserando discerpsi</span>t. p<sub>ost cuius lacrimo</sub>sum int<sup>eritum in un</sup>ius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.</p>\r\n<p style=\"text-align: center;\">Soleo <span style=\"color: #18a085;\">saepe ante oculos ponere, idqu</span>e libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.</p>\r\n</div>', 'J.Forteroche', '2019-02-13 21:26:20'),
(69, 'Image', '<p><img src=\"http://cdn-uploads.gameblog.fr/images/actu/full/81376_gb_news.jpg?ver=1550074645\" alt=\"\" width=\"670\" height=\"377\" /></p>', 'J.Forteroche', '2019-02-14 11:15:15'),
(70, 'Video', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\" style=\"padding-left: 80px;\"><iframe src=\"//www.youtube.com/embed/h81Cyg1d_Zk\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p><em><strong>ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum est cognomentum, vicarium ipsum eos quibus praeerat adhuc defensantem ad sortem periculorum communium traxit.</strong></em></p>\r\n<p><span style=\"color: #3598db;\">et instabat ut eum quoque cum tribunis et aliis pluribus ad comitatum imperatoris vinctum perduceret: quo percitus ille exitio urgente abrupto ferro eundem adoritur Paulum. et quia languente dextera, <span style=\"color: #9b59b6;\">letaliter ferire non potuit, iam districtum mucronem in proprium latus inpegit. hocque deformi genere mortis excessit <span style=\"color: #e67e23; background-color: #f1c40f;\">e vita iustissimus rector ausus miserabiles casus levare multorum.</span></span></span></p>', 'J.Forteroche', '2019-03-10 14:27:56'),
(71, 'Test 3', '<h2>Per hoc minui studium suum existimans Paulus, ut erat in conplicandis negotiis artifex dirus, unde ei Catenae inditum est cognomentum, vicarium ipsum eos quibus praeerat adhuc defensantem ad sortem periculorum communium traxit. et instabat ut eum quoque cum tribunis et aliis pluribus ad comitatum imperatoris vinctum perduceret: quo percitus ille exitio urgente abrupto ferro eundem adoritur Paulum. et quia languente dextera, letaliter ferire non potuit, iam districtum mucronem in proprium latus inpegit. hocque deformi genere mortis excessit e vita iustissimus rector ausus miserabiles casus levare multorum.</h2>', 'J.Forteroche', '2019-02-14 14:22:18');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'membre'),
(2, 'administrateur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post` (`post_id`);

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
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
