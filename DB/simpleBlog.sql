-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 23 Mars 2019 à 18:28
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
(48, 1, 'Riri', '$2y$10$7CLgVo25KjY82Qk8/AsmbOzJuaRjJZ51XxApfzexrOWJ/pDVJA0iu', 'riri@free.fr', '2018-12-12 00:00:00', NULL, NULL),
(57, 2, 'Toutou', '$2y$10$O8PEAInf.tptcx3/GZjNROWoBWDKx0xEuA8tcGfRCzDRP8mTlCNEq', 'toutou@free.fr', '2018-12-12 02:00:00', NULL, NULL),
(60, 2, 'J.Forteroche', '$2y$10$FlQ/f3uPsgpowoelzp.WXe7BpatC3CcLfpCCRMLL7qetBhj2dRR9y', 'j.forteroche@free.fr', '2019-03-16 00:00:00', NULL, NULL),
(61, 2, 'Admin', '$2y$10$iFpd5NmqThOyIF2envyLsuHIxVHuWAKnBa7Kv4ZZQjKyZLEAYRDr2', 'admin@free.fr', '2019-03-16 00:00:00', NULL, NULL),
(62, 1, 'Titi', '$2y$10$qtMsZb6HQL6hkTtPDSY2HOAEesTGVwG2B3o5GyaJYr2TaKtm0rPbG', 'titi@free.fr', '2019-03-19 00:00:00', NULL, NULL);

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
(90, 'Chapitre 9 : &quot;La route blanche&quot;', '<p><img src=\"Content/img/chapitre_9.png\" alt=\"\" width=\"425\" height=\"328\" /></p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis confertos, aliquotiens et dispersos multitudine superabatur ingenti, quae nata et educata inter editos recurvosque ambitus montium eos ut loca plana persultat et mollia, missilibus obvios eminus lacessens et ululatu truci perterrens.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Iam in altera philosophiae parte. quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.</span></em></p>\r\n</div>\r\n<p>&nbsp;</p>', 'J.Forteroche', '2019-03-16 19:58:54'),
(91, 'Chapitre 10 : &quot;Escapade en montagne&quot;', '<p><img src=\"Content/img/chapitre_10.jpg\" alt=\"Escapade en montagne\" width=\"470\" height=\"313\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Coactique aliquotiens nostri pedites ad eos persequendos scandere clivos sublimes etiam si lapsantibus plantis fruticeta prensando vel dumos ad vertices venerint summos, inter arta tamen et invia nullas acies explicare permissi nec firmare nisu valido gressus: hoste discursatore rupium abscisa volvente, ruinis ponderum inmanium consternuntur, aut ex necessitate ultima fortiter dimicante, superati periculose per prona discedunt.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Inter quos Paulus eminebat notarius ortus in Hispania, glabro quidam sub vultu latens, odorandi vias periculorum occultas perquam sagax. is in Brittanniam missus ut militares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discreta. unde admissum est facinus impium, quod Constanti tempus nota inusserat sempiterna.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:01:08'),
(92, 'Chapitre 11 : &quot;Sommet à portée de vue&quot;', '<p><img src=\"Content/img/chapitre_11.jpg\" alt=\"Sommet &agrave; port&eacute;e de vue\" width=\"497\" height=\"331\" /></p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et quoniam apud eos ut in capite mundi morborum acerbitates celsius dominantur, ad quos vel sedandos omnis professio medendi torpescit, excogitatum est adminiculum sospitale nequi amicum perferentem similia videat, additumque est cautionibus paucis remedium aliud satis validum, ut famulos percontatum missos quem ad modum valeant noti hac aegritudine colligati, non ante recipiant domum quam lavacro purgaverint corpus. ita etiam alienis oculis visa metuitur labes.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Hac ita persuasione reducti intra moenia bellatores obseratis undique portarum aditibus, propugnaculis insistebant et pinnis, congesta undique saxa telaque habentes in promptu, ut si quis se proripuisset interius, multitudine missilium sterneretur et lapidum.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:03:42'),
(93, 'Chapitre 12 : &quot;Nuit blanche&quot;', '<p><img src=\"Content/img/chapitre_12.png\" alt=\"\" width=\"493\" height=\"325\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Montius nos tumore inusitato quodam et novo ut rebellis et maiestati recalcitrantes Augustae per haec quae strepit incusat iratus nimirum quod contumacem praefectum, quid rerum ordo postulat ignorare dissimulantem formidine tenus iusserim custodiri.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:05:51'),
(94, 'Chapitre 13 : &quot;Bivouac à la rivière-miroir&quot;', '<p><img src=\"Content/img/chapitre_13.png\" alt=\"rivi&egrave;re miroir\" width=\"569\" height=\"350\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse deterritum.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus, quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunt conditoris, primigenia tamen nomina non amittunt, quae eis Assyria lingua institutores veteres indiderunt.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:08:21'),
(95, 'Chapitre 14 : &quot;Rencontre avec un chercheur d\'or&quot;', '<p><img src=\"Content/img/chapitre_14.png\" alt=\"Chercheur d\'or\" width=\"298\" height=\"270\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Thalassius vero ea tempestate praefectus praetorio praesens ipse quoque adrogantis ingenii, considerans incitationem eius ad multorum augeri discrimina, non maturitate vel consiliis mitigabat, ut aliquotiens celsae potestates iras principum molliverunt, sed adversando iurgandoque cum parum congrueret, eum ad rabiem potius evibrabat, Augustum actus eius exaggerando creberrime docens, idque, incertum qua mente, ne lateret adfectans. quibus mox Caesar acrius efferatus, velut contumaciae quoddam vexillum altius erigens, sine respectu salutis alienae vel suae ad vertenda opposita instar rapidi fluminis irrevocabili impetu ferebatur.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus, quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunt conditoris, primigenia tamen nomina non amittunt, quae eis Assyria lingua institutores veteres indiderunt.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:10:00'),
(96, 'Chapitre 15 : &quot;La fonte du glacier&quot;', '<p><img src=\"Content/img/chapitre_15.jpg\" alt=\"glacier\" width=\"450\" height=\"300\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Eius populus ab incunabulis primis ad usque pueritiae tempus extremum, quod annis circumcluditur fere trecentis, circummurana pertulit bella, deinde aetatem ingressus adultam post multiplices bellorum aerumnas Alpes transcendit et fretum, in iuvenem erectus et virum ex omni plaga quam orbis ambit inmensus, reportavit laureas et triumphos, iamque vergens in senium et nomine solo aliquotiens vincens ad tranquilliora vitae discessit.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Constituendi autem sunt qui sint in amicitia fines et quasi termini diligendi. De quibus tres video sententias ferri, quarum nullam probo, unam, ut eodem modo erga amicum adfecti simus, quo erga nosmet ipsos, alteram, ut nostra in amicos benevolentia illorum erga nos benevolentiae pariter aequaliterque respondeat, tertiam, ut, quanti quisque se ipse facit, tanti fiat ab amicis.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Omitto iuris dictionem in libera civitate contra leges senatusque consulta; caedes relinquo; libidines praetereo, quarum acerbissimum extat indicium et ad insignem memoriam turpitudinis et paene ad iustum odium imperii nostri, quod constat nobilissimas virgines se in puteos abiecisse et morte voluntaria necessariam turpitudinem depulisse. Nec haec idcirco omitto, quod non gravissima sint, sed quia nunc sine teste dico.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:11:48'),
(97, 'Chapitre 16 :&quot;En chemin pour Kondike-City&quot;', '<p><img src=\"Content/img/chapitre_16.jpg\" alt=\"Chemin\" width=\"268\" height=\"357\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Itaque tum Scaevola cum in eam ipsam mentionem incidisset, exposuit nobis sermonem Laeli de amicitia habitum ab illo secum et cum altero genero, C. Fannio Marci filio, paucis diebus post mortem Africani. Eius disputationis sententias memoriae mandavi, quas hoc libro exposui arbitratu meo; quasi enim ipsos induxi loquentes, ne \'inquam\' et \'inquit\' saepius interponeretur, atque ut tamquam a praesentibus coram haberi sermo videretur.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus aequo quid in amicitiam congeratur.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:13:25'),
(98, 'Chapitre 17 : &quot;Escale définitive à Kondike-City sur la rive de Yukon-River&quot;', '<p><img src=\"Content/img/chapitre_17.jpg\" alt=\"ville\" width=\"567\" height=\"368\" /></p>\r\n<p>&nbsp;</p>\r\n<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Et eodem impetu Domitianum praecipitem per scalas itidem funibus constrinxerunt, eosque coniunctos per ampla spatia civitatis acri raptavere discursu. iamque artuum et membrorum divulsa conpage superscandentes corpora mortuorum ad ultimam truncata deformitatem velut exsaturati mox abiecerunt in flumen.</span></em></p>\r\n<p><em><span style=\"font-size: 10pt; font-family: georgia, palatino, serif;\">Saepissime igitur mihi de amicitia cogitanti maxime illud considerandum videri solet, utrum propter imbecillitatem atque inopiam desiderata sit amicitia, ut dandis recipiendisque meritis quod quisque minus per se ipse posset, id acciperet ab alio vicissimque redderet, an esset hoc quidem proprium amicitiae, sed antiquior et pulchrior et magis a natura ipsa profecta alia causa. Amor enim, ex quo amicitia nominata est, princeps est ad benevolentiam coniungendam. Nam utilitates quidem etiam ab iis percipiuntur saepe qui simulatione amicitiae coluntur et observantur temporis causa, in amicitia autem nihil fictum est, nihil simulatum et, quidquid est, id est verum et voluntarium.</span></em></p>\r\n</div>', 'J.Forteroche', '2019-03-16 20:15:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
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
