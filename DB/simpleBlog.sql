-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 16 Mars 2019 à 19:41
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
(43, 1, 'Tata', '$2y$10$GfSpuRSaWrZuqAaHRVJ9z.6UsRN0yD/mtLccalxtmDg1IebNirT2q', 'tata@free.fr', '2018-12-10 00:00:00', NULL, NULL),
(47, 1, 'Louloutte', '$2y$10$bKRNz4X0gaIu1NhVw40GRO2qfOOaCnZQV2hrZFxLWobxka66Yi4nG', 'louloutte@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(48, 1, 'Riri', '$2y$10$C9bXqkBH074PYQ0AwSlwpeIV8bRuaVSlfNXndWSM7h9eD6/eaE1MC', 'riri@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(49, 1, 'Alfa', '$2y$10$BE62AI269Xz5cxRvAvA5hezAR7Z2P0XGowVajMV.JF.93ZoBN2R2i', 'alfa@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(53, 1, 'Fifi', '$2y$10$i4YeGTuEgeY.crMGs5tpQOEDrBnFTgtRzHSgNViqotfrR55tSLN7W', 'fifi@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(54, 1, 'lila', '$2y$10$rSDJE0sGT1/dzLzyRXmVYe.76NcavnMWU4TR0uxlzSozq2hyAKeDa', 'lila@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(55, 1, 'Lali', '$2y$10$l/8HdjQOcG8KSZhhb4yYFOnng9ZlJK2o.NbIHhVfNuaNtRqXDltzW', 'lali@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(56, 1, 'Lilo', '$2y$10$mIGUCOqi4Sy2sewX.3kzNOYM6eCOi3Rj6h2xtB7FKZJrwkRnlLZ2y', 'lilo@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(57, 2, 'Toutou', '$2y$10$fqQkS9MOeOEprTsXlyBdvOgSbNPlclHjFf0qsl24LHJXMtg4/BwDq', 'toutou@free.fr', '2018-12-12 02:00:00', NULL, NULL),
(58, 1, 'roro', '$2y$10$V.Hy1/BtUMxhd6M6OgSN5.LiMNKBzjXDykUZkp5B9DxzUGrNhsfyi', 'roro@free.fr', '2018-12-20 00:00:00', NULL, NULL),
(60, 2, 'J.Forteroche', '$2y$10$FlQ/f3uPsgpowoelzp.WXe7BpatC3CcLfpCCRMLL7qetBhj2dRR9y', 'j.forteroche@free.fr', '2019-03-16 00:00:00', NULL, NULL),
(61, 2, 'Admin', '$2y$10$iFpd5NmqThOyIF2envyLsuHIxVHuWAKnBa7Kv4ZZQjKyZLEAYRDr2', 'admin@free.fr', '2019-03-16 00:00:00', NULL, NULL);

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
(73, 'Chapitre 1 : &quot;Arrivée en Alaska&quot;', '<p><img src=\"Content/img/chapitre_1.png\" alt=\"Arriv&eacute;e en Alaska\" width=\"288\" height=\"209\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><span style=\"font-size: 10pt;\"><em><span style=\"font-family: georgia, palatino, serif;\">Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo, quarum acerbissimum extat indicium et ad insignem memoriam turpitudinis et paene ad iustum odium imperii nostri, quod constat nobilissimas virgines se in puteos abiecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia nunc sine teste dico.</span></em></span></p>\r\n<p><span style=\"font-size: 10pt;\"><em><span style=\"font-family: georgia, palatino, serif;\">Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam et cognita duplicarent in peius, laudes vero supprimerent Caesaris, quas invitis conpluribus formido malorum inpendentium exprimebat.</span></em></span></p>\r\n<p><span style=\"font-size: 10pt;\"><em><span style=\"font-family: georgia, palatino, serif;\">Victus universis caro ferina est lactisque abundans copia qua sustentantur, et herbae multiplices et siquae alites capi per aucupium possint, et plerosque mos vidimus frumenti usum et vini penitus ignorantes.</span></em></span></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:17:11'),
(74, 'Chapitre 2: &quot;Entre mer et montagne&quot;', '<p><img src=\"Content/img/chapitre_2.png\" alt=\"Entre mer et montagne\" width=\"345\" height=\"259\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:22:38'),
(75, 'Chapitre 3 : &quot;Nature sauvage en été&quot;', '<p><img src=\"Content/img/chapitre_3.jpg\" alt=\"Nature sauvage en &eacute;t&eacute;\" width=\"402\" height=\"225\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Eodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.</span></em></p>\r\n<p><em><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Hacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo.</span></em></p>\r\n<p><em><span style=\"font-family: georgia, palatino, serif; font-size: 10pt;\">Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam dedit&scaron;nihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:26:52'),
(76, 'Chapitre 4 : &quot;Nuance de verts&quot;', '<p><img src=\"Content/img/chapitre_4.png\" alt=\"Nuance de verts\" width=\"496\" height=\"329\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse deterritum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus, et Serenianus dignus exsecratione cunctorum, innoxius, modo non reclamante publico vigore, discessit.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ut enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est, ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit. Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat, me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt, non sunt tamen ab earum spe causae diligendi profectae.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:30:56'),
(77, 'Chapitre 5 : &quot;Puissante nature maritime&quot;', '<p><img src=\"Content/img/chapitre_5.png\" alt=\"\" width=\"419\" height=\"273\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec et huius modi quaedam innumerabilia ultrix facinorum impiorum bonorumque praemiatrix aliquotiens operatur Adrastia atque utinam semper quam vocabulo duplici etiam Nemesim appellamus: ius quoddam sublime numinis efficacis, humanarum mentium opinione lunari circulo superpositum, vel ut definiunt alii, substantialis tutela generali potentia partilibus praesidens fatis, quam theologi veteres fingentes Iustitiae filiam ex abdita quadam aeternitate tradunt omnia despectare terrena.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Nec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste. Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:35:49'),
(78, 'Chapitre 6 : &quot;Départ vers les montagnes&quot;', '<p><img src=\"Content/img/chapitre_6.png\" alt=\"D&eacute;part vers les montagnes\" width=\"470\" height=\"320\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Vide, quantum, inquam, fallare, Torquate. oratio me istius philosophi non offendit; nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; et tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed quot homines, tot sententiae; falli igitur possumus.</span></p>\r\n<p><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Thalassius vero ea tempestate praefectus praetorio praesens ipse quoque adrogantis ingenii, considerans incitationem eius ad multorum augeri discrimina, non maturitate vel consiliis mitigabat, ut aliquotiens celsae potestates iras principum molliverunt, sed adversando iurgandoque cum parum congrueret, eum ad rabiem potius evibrabat, Augustum actus eius exaggerando creberrime docens, idque, incertum qua mente, ne lateret adfectans. quibus mox Caesar acrius efferatus, velut contumaciae quoddam vexillum altius erigens, sine respectu salutis alienae vel suae ad vertenda opposita instar rapidi fluminis irrevocabili impetu ferebatur.</span></p>\r\n<p><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Saepissime igitur mihi de amicitia cogitanti maxime illud considerandum videri solet, utrum propter imbecillitatem atque inopiam desiderata sit amicitia, ut dandis recipiendisque meritis quod quisque minus per se ipse posset, id acciperet ab alio vicissimque redderet, an esset hoc quidem proprium amicitiae, sed antiquior et pulchrior et magis a natura ipsa profecta alia causa. Amor enim, ex quo amicitia nominata est, princeps est ad benevolentiam coniungendam. Nam utilitates quidem etiam ab iis percipiuntur saepe qui simulatione amicitiae coluntur et observantur temporis causa, in amicitia autem nihil fictum est, nihil simulatum et, quidquid est, id est verum et voluntarium.</span></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:38:38'),
(79, 'Chapitre 7 : &quot;Arrivée de l\'hivers&quot;', '<p><img src=\"Content/img/chapitre_7.png\" alt=\"Arriv&eacute;e de l\'hivers\" width=\"300\" height=\"443\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:42:34'),
(80, 'Chapitre 8 : &quot;L\'appel de la fôret&quot;', '<p><img src=\"Content/img/chapitre_8.jpg\" alt=\"\" width=\"504\" height=\"335\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves, sustinere. Non enim neque tu possis, quamvis excellas, omnes tuos ad honores amplissimos perducere, ut Scipio P. Rupilium potuit consulem efficere, fratrem eius L. non potuit. Quod si etiam possis quidvis deferre ad alterum, videndum est tamen, quid ille possit sustinere.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.</span></em></p>\r\n</div>\r\n<p>&nbsp;</p>', 'J.Forteroche', '2019-03-16 18:45:26'),
(81, 'Chapitre 9 : &quot;La route blanche&quot;', '<p><img src=\"Content/img/chapitre_9.png\" alt=\"\" width=\"457\" height=\"353\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Alii nullo quaerente vultus severitate adsimulata patrimonia sua in inmensum extollunt, cultorum ut puta feracium multiplicantes annuos fructus, quae a primo ad ultimum solem se abunde iactitant possidere, ignorantes profecto maiores suos, per quos ita magnitudo Romana porrigitur, non divitiis eluxisse sed per bella saevissima, nec opibus nec victu nec indumentorum vilitate gregariis militibus discrepantes opposita cuncta superasse virtute.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida quaedam ingentes Bostram et Gerasam atque Philadelphiam murorum firmitate cautissimas. hanc provinciae inposito nomine rectoreque adtributo obtemperare legibus nostris Traianus conpulit imperator incolarum tumore saepe contunso cum glorioso marte Mediam urgeret et Parthos.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et interdum acciderat, ut siquid in penetrali secreto nullo citerioris vitae ministro praesente paterfamilias uxori susurrasset in aurem, velut Amphiarao referente aut Marcio, quondam vatibus inclitis, postridie disceret imperator. ideoque etiam parietes arcanorum soli conscii timebantur.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:52:24'),
(82, 'Chapitre 10 : &quot;Escapade en montagne&quot;', '<p><img src=\"Content/img/chapitre_10.jpg\" alt=\"\" width=\"466\" height=\"310\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Sed cautela nimia in peiores haeserat plagas, ut narrabimus postea, aemulis consarcinantibus insidias graves apud Constantium, cetera medium principem sed siquid auribus eius huius modi quivis infudisset ignotus, acerbum et inplacabilem et in hoc causarum titulo dissimilem sui.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 18:56:31'),
(83, 'Chapitre 11 : &quot;Sommet à portée de vue&quot;', '<p><img src=\"Content/img/chapitre_11.jpg\" alt=\"\" width=\"431\" height=\"287\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida quaedam ingentes Bostram et Gerasam atque Philadelphiam murorum firmitate cautissimas. hanc provinciae inposito nomine rectoreque adtributo obtemperare legibus nostris Traianus conpulit imperator incolarum tumore saepe contunso cum glorioso marte Mediam urgeret et Parthos.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Quod opera consulta cogitabatur astute, ut hoc insidiarum genere Galli periret avunculus, ne eum ut praepotens acueret in fiduciam exitiosa coeptantem. verum navata est opera diligens hocque dilato Eusebius praepositus cubiculi missus est Cabillona aurum secum perferens, quo per turbulentos seditionum concitores occultius distributo et tumor consenuit militum et salus est in tuto locata praefecti. deinde cibo abunde perlato castra die praedicto sunt mota.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:00:52'),
(84, 'Chapitre 12 : &quot;Nuit blanche&quot;', '<p><img src=\"Content/img/chapitre_12.png\" alt=\"Nuit blanche\" width=\"510\" height=\"336\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Victus universis caro ferina est lactisque abundans copia qua sustentantur, et herbae multiplices et siquae alites capi per aucupium possint, et plerosque mos vidimus frumenti usum et vini penitus ignorantes.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Advenit post multos Scudilo Scutariorum tribunus velamento subagrestis ingenii persuasionis opifex callidus. qui eum adulabili sermone seriis admixto solus omnium proficisci pellexit vultu adsimulato saepius replicando quod flagrantibus votis eum videre frater cuperet patruelis, siquid per inprudentiam gestum est remissurus ut mitis et clemens, participemque eum suae maiestatis adscisceret, futurum laborum quoque socium, quos Arctoae provinciae diu fessae poscebant.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:06:18'),
(85, 'Chapitre 13 : &quot;Bivouac à la rivière-miroir&quot;', '<p><img src=\"Content/img/chapitre_13.png\" alt=\"\" width=\"526\" height=\"323\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ex turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:34:03'),
(86, 'Chapitre 14 : &quot;Rencontre avec un chercheur d\'or&quot;', '<p><img src=\"Content/img/chapitre_14.png\" alt=\"Chercheur d\'or\" width=\"298\" height=\"270\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. quam Constantina exultans ut in tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ibi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant, nec resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:36:08'),
(87, 'Chapitre 15 : &quot;La fonte du glacier&quot;', '<p><img src=\"Content/img/chapitre_15.jpg\" alt=\"\" width=\"386\" height=\"257\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro acciverat, ad Italiam properare blande hortaretur et verecunde.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent, vigore corporum ac levitate confisi per flexuosas semitas ad summitates collium tardius evadebant. et cum superatis difficultatibus arduis ad supercilia venissent fluvii Melanis alti et verticosi, qui pro muro tuetur accolas circumfusus, augente nocte adulta terrorem quievere paulisper lucem opperientes. arbitrabantur enim nullo inpediente transgressi inopino adcursu adposita quaeque vastare, sed in cassum labores pertulere gravissimos.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:36:47'),
(88, 'Chapitre 16 :&quot;En chemin pour Kondike-City&quot;', '<p><img src=\"Content/img/chapitre_16.jpg\" alt=\"\" width=\"269\" height=\"358\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Dein Syria per speciosam interpatet diffusa planitiem. hanc nobilitat Antiochia, mundo cognita civitas, cui non certaverit alia advecticiis ita adfluere copiis et internis, et Laodicia et Apamia itidemque Seleucia iam inde a primis auspiciis florentissimae.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos, ut memorat vates Ascraeus, Censorius Cato monstravit. qui interrogatus quam ob rem inter multos... statuam non haberet malo inquit ambigere bonos quam ob rem id non meruerim, quam quod est gravius cur inpetraverim mussitare.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:37:24'),
(89, 'Chapitre 17 : &quot;Escale définitive à Kondike-City sur la rive de Yukon-River&quot;', '<p><img src=\"Content/img/chapitre_17.jpg\" alt=\"\" width=\"492\" height=\"319\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ergo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo. Quid? si ipsas inimicitias, depono rei publicae causa, quis me tandem iure reprehendet, praesertim cum ego omnium meorum consiliorum atque factorum exempla semper ex summorum hominum consiliis atque factis mihi censuerim petenda.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Ex turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 19:37:59');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
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
