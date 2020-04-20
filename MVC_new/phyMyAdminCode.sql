-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2020 at 09:18 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `PSI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Annuaire`
--

CREATE TABLE `Annuaire` (
  `id_annuaire` int(11) NOT NULL,
  `libelle` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Annuaire`
--

INSERT INTO `Annuaire` (`id_annuaire`, `libelle`) VALUES
(1, 'HARPEGE'),
(2, 'APOGEE'),
(3, 'FOMASUP');

-- --------------------------------------------------------

--
-- Table structure for table `Appartenir`
--

CREATE TABLE `Appartenir` (
  `id_annee` int(11) NOT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `id_individu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Appartenir`
--

INSERT INTO `Appartenir` (`id_annee`, `id_groupe`, `id_individu`) VALUES
(2020, 1, 1),
(2020, 1, 2),
(2020, 1, 3),
(2020, 1, 4),
(2020, 1, 5),
(2020, 1, 6),
(2020, 1, 7),
(2020, 1, 8),
(2020, 1, 9),
(2020, 1, 10),
(2020, 1, 11),
(2020, 1, 12),
(2020, 1, 13),
(2020, 1, 14),
(2020, 1, 15),
(2020, 1, 16),
(2020, 1, 17),
(2020, 1, 18),
(2020, 1, 19),
(2020, 1, 20),
(2020, 1, 21),
(2020, 1, 22),
(2020, 1, 23),
(2020, 1, 24),
(2020, 1, 25),
(2020, 4, 26),
(2020, 4, 27),
(2020, 4, 28),
(2020, 4, 29),
(2020, 4, 30),
(2020, 4, 31),
(2020, 4, 32),
(2020, 4, 33),
(2020, 4, 34),
(2020, 4, 35),
(2020, 4, 36),
(2020, 4, 37),
(2020, 4, 38),
(2020, 4, 39),
(2020, 4, 40),
(2020, 4, 41),
(2020, 4, 42),
(2020, 4, 43),
(2020, 4, 44),
(2020, 4, 45),
(2020, 4, 46),
(2020, 4, 47),
(2020, 4, 48),
(2020, 4, 49),
(2020, 4, 50),
(2020, 4, 51),
(2020, 4, 52),
(2020, 4, 53),
(2020, 4, 54),
(2020, 4, 55),
(2020, 4, 56),
(2020, 4, 57),
(2020, 4, 58),
(2020, 4, 59),
(2020, 4, 60),
(2020, 4, 61),
(2020, 4, 62),
(2020, 4, 63),
(2020, 4, 64),
(2020, 4, 65),
(2020, 4, 66),
(2020, 4, 67),
(2020, 4, 68),
(2020, 4, 69),
(2020, 4, 70),
(2020, 4, 71),
(2020, 4, 72),
(2020, 4, 73),
(2020, 4, 74),
(2020, 4, 75),
(2020, 4, 76),
(2020, 4, 77),
(2020, 4, 78),
(2020, 4, 79),
(2020, 4, 80),
(2020, 4, 81),
(2020, 4, 82),
(2020, 4, 83),
(2020, 4, 84),
(2020, 4, 85),
(2020, 4, 86),
(2020, 4, 87),
(2020, 4, 88),
(2020, 4, 89),
(2020, 4, 90),
(2020, 4, 91),
(2020, 4, 92),
(2020, 4, 93),
(2020, 4, 94),
(2020, 4, 95),
(2020, 4, 96),
(2020, 4, 97),
(2020, 4, 98),
(2020, 4, 99),
(2020, 4, 100),
(2020, 4, 101),
(2020, 4, 102),
(2020, 4, 103),
(2020, 4, 104),
(2020, 4, 105),
(2020, 4, 106),
(2020, 4, 107),
(2020, 4, 108),
(2020, 4, 109),
(2020, 4, 110),
(2020, 4, 111),
(2020, 4, 112),
(2020, 4, 113),
(2020, 4, 114),
(2020, 4, 115),
(2020, 4, 116),
(2020, 4, 117),
(2020, 4, 118),
(2020, 4, 119),
(2020, 4, 120),
(2020, 4, 121),
(2020, 4, 122),
(2020, 4, 123),
(2020, 4, 124),
(2020, 4, 125),
(2020, 4, 126),
(2020, 4, 127),
(2020, 4, 128),
(2020, 4, 129),
(2020, 4, 130),
(2020, 4, 131),
(2020, 4, 132),
(2020, 5, 133),
(2020, 5, 134),
(2020, 5, 135),
(2020, 5, 136),
(2020, 5, 137),
(2020, 5, 138),
(2020, 5, 139),
(2020, 5, 140),
(2020, 5, 141),
(2020, 5, 142),
(2020, 5, 143),
(2020, 5, 144),
(2020, 5, 145),
(2020, 5, 146),
(2020, 5, 147),
(2020, 5, 148),
(2020, 5, 149),
(2020, 5, 150),
(2020, 5, 151),
(2020, 5, 152),
(2020, 5, 153),
(2020, 5, 154),
(2020, 5, 155),
(2020, 5, 156),
(2020, 5, 157),
(2020, 5, 158),
(2020, 5, 159),
(2020, 5, 160),
(2020, 5, 161),
(2020, 5, 162),
(2020, 5, 163),
(2020, 5, 164),
(2020, 5, 165),
(2020, 5, 166),
(2020, 5, 167),
(2020, 5, 168),
(2020, 5, 169),
(2020, 5, 170),
(2020, 5, 171),
(2020, 5, 172),
(2020, 5, 173),
(2020, 5, 174),
(2020, 5, 175),
(2020, 5, 176),
(2020, 5, 177),
(2020, 5, 178),
(2020, 5, 179),
(2020, 5, 180),
(2020, 5, 181),
(2020, 5, 182),
(2020, 5, 183),
(2020, 5, 184),
(2020, 5, 185),
(2020, 5, 186),
(2020, 5, 187),
(2020, 5, 188),
(2020, 5, 189),
(2020, 5, 190),
(2020, 5, 191),
(2020, 5, 192),
(2020, 5, 193),
(2020, 5, 194),
(2020, 5, 195),
(2020, 5, 196),
(2020, 5, 197);

-- --------------------------------------------------------

--
-- Table structure for table `GROUPE`
--

CREATE TABLE `GROUPE` (
  `id_groupe` int(11) NOT NULL,
  `libelle` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `GROUPE`
--

INSERT INTO `GROUPE` (`id_groupe`, `libelle`) VALUES
(1, 'L3 MIAGE APP'),
(2, 'M1 MIAGE APP'),
(3, 'M2 MIAGE APP'),
(4, 'L2 MIASHS'),
(5, 'Encadrant');

-- --------------------------------------------------------

--
-- Table structure for table `Individu`
--

CREATE TABLE `Individu` (
  `id_individu` int(11) NOT NULL,
  `Nom` varchar(70) NOT NULL,
  `Prenom` varchar(70) NOT NULL,
  `email` varchar(140) NOT NULL,
  `num` int(50) NOT NULL,
  `id_annuaire` int(50) DEFAULT NULL,
  `id_statut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Individu`
--

INSERT INTO `Individu` (`id_individu`, `Nom`, `Prenom`, `email`, `num`, `id_annuaire`, `id_statut`) VALUES
(1, 'Ahmed', 'Noufeine', 'Noufeine.Ahmed@parisnanterre.fr', 340001, 2, 1),
(2, 'Ait akli', 'Litissia', 'Litissia.Ait akli@parisnanterre.fr', 340002, 2, 1),
(3, 'Ba', 'Adja', 'Adja.Ba@parisnanterre.fr', 340003, 2, 1),
(4, 'Binous', 'Wassim', 'Wassim.Binous@parisnanterre.fr', 340004, 2, 1),
(5, 'Bocoum', 'Idy', 'Idy.Bocoum@parisnanterre.fr', 340005, 2, 1),
(6, 'Brochado', 'Alexandre', 'Alexandre.Brochado@parisnanterre.fr', 340006, 2, 1),
(7, 'Clebien', 'Nangninta', 'Nangninta.Clebien@parisnanterre.fr', 340007, 2, 1),
(8, 'Das', 'Rahul', 'Rahul.Das@parisnanterre.fr', 340008, 2, 1),
(9, 'Elarj', 'Aniss', 'Aniss.Elarj@parisnanterre.fr', 340009, 2, 1),
(10, 'Fall', 'Seynabou', 'Seynabou.Fall@parisnanterre.fr', 340010, 2, 1),
(11, 'Jestin', 'Gabriel', 'Gabriel.Jestin@parisnanterre.fr', 340011, 2, 1),
(12, 'Keloute ndamukong', 'Ubald', 'Ubald.Keloute ndamukong@parisnanterre.fr', 340012, 2, 1),
(13, 'Khalfi', 'Sofian', 'Sofian.Khalfi@parisnanterre.fr', 340013, 2, 1),
(14, 'Le men', 'Yann', 'Yann.Le men@parisnanterre.fr', 340014, 2, 1),
(15, 'Mboup', 'Gaye', 'Gaye.Mboup@parisnanterre.fr', 340015, 2, 1),
(16, 'Mouzouri', 'Ilhame', 'Ilhame.Mouzouri@parisnanterre.fr', 340016, 2, 1),
(17, 'Ndiaye', 'Moussa', 'Moussa.Ndiaye@parisnanterre.fr', 340017, 2, 1),
(18, 'Quellec', 'Nathan', 'Nathan.Quellec@parisnanterre.fr', 340018, 2, 1),
(19, 'Rajaratnam', 'Sarujan', 'Sarujan.Rajaratnam@parisnanterre.fr', 340019, 2, 1),
(20, 'Raypoulet', 'Hemanath', 'Hemanath.Raypoulet@parisnanterre.fr', 340020, 2, 1),
(21, 'Sakho', 'Assane', 'Assane.Sakho@parisnanterre.fr', 340021, 2, 1),
(22, 'Schauffler', 'Ophelie', 'Ophelie.Schauffler@parisnanterre.fr', 340022, 2, 1),
(23, 'Si-mohammed', 'Samy', 'Samy.Si-mohammed@parisnanterre.fr', 340023, 2, 1),
(24, 'Sidate', 'Alexis', 'Alexis.Sidate@parisnanterre.fr', 340024, 2, 1),
(25, 'Zemali', 'Lynda', 'Lynda.Zemali@parisnanterre.fr', 340025, 2, 1),
(26, 'Abalil', 'Rizlane', 'Rizlane.Abalil@parisnanterre.fr', 340026, 2, 1),
(27, 'Achou', 'Sara', 'Sara.Achou@parisnanterre.fr', 340027, 2, 1),
(28, 'Akkoura', 'Aniesse', 'Aniesse.Akkoura@parisnanterre.fr', 340028, 2, 1),
(29, 'Ali', 'Ikram-masjid', 'Ikram-masjid.Ali@parisnanterre.fr', 340029, 2, 1),
(30, 'Ali', 'Faiz', 'Faiz.Ali@parisnanterre.fr', 340030, 2, 1),
(31, 'Ali', 'Ikram-masjid', 'Ikram-masjid.Ali@parisnanterre.fr', 340031, 2, 1),
(32, 'Alouda', 'Lidao', 'Lidao.Alouda@parisnanterre.fr', 340032, 2, 1),
(33, 'Alouda', 'Lidao', 'Lidao.Alouda@parisnanterre.fr', 340033, 2, 1),
(34, 'Askar', 'Mohammad', 'Mohammad.Askar@parisnanterre.fr', 340034, 2, 1),
(35, 'Auger', 'Antoine', 'Antoine.Auger@parisnanterre.fr', 340035, 2, 1),
(36, 'Auger', 'Antoine', 'Antoine.Auger@parisnanterre.fr', 340036, 2, 1),
(37, 'Balde', 'Mamadou saliou', 'Mamadou saliou.Balde@parisnanterre.fr', 340037, 2, 1),
(38, 'Baro', 'Mohamed', 'Mohamed.Baro@parisnanterre.fr', 340038, 2, 1),
(39, 'Barolle', 'Romain', 'Romain.Barolle@parisnanterre.fr', 340039, 2, 1),
(40, 'Barolle', 'Romain', 'Romain.Barolle@parisnanterre.fr', 340040, 2, 1),
(41, 'Barry', 'Aissatou', 'Aissatou.Barry@parisnanterre.fr', 340041, 2, 1),
(42, 'Belhaimeur', 'Mohamed', 'Mohamed.Belhaimeur@parisnanterre.fr', 340042, 2, 1),
(43, 'Benaissa', 'Adam', 'Adam.Benaissa@parisnanterre.fr', 340043, 2, 1),
(44, 'Benali', 'Ahmed', 'Ahmed.Benali@parisnanterre.fr', 340044, 2, 1),
(45, 'Berte', 'Ulrich', 'Ulrich.Berte@parisnanterre.fr', 340045, 2, 1),
(46, 'Berte', 'Ulrich', 'Ulrich.Berte@parisnanterre.fr', 340046, 2, 1),
(47, 'Beyaz', 'Sefkan', 'Sefkan.Beyaz@parisnanterre.fr', 340047, 2, 1),
(48, 'Bodart', 'Valentin', 'Valentin.Bodart@parisnanterre.fr', 340048, 2, 1),
(49, 'Boucamus', 'Cassandra', 'Cassandra.Boucamus@parisnanterre.fr', 340049, 2, 1),
(50, 'Boumaza', 'Karim', 'Karim.Boumaza@parisnanterre.fr', 340050, 2, 1),
(51, 'Bouzekri', 'Ryan', 'Ryan.Bouzekri@parisnanterre.fr', 340051, 2, 1),
(52, 'Bouzekri', 'Ryan', 'Ryan.Bouzekri@parisnanterre.fr', 340052, 2, 1),
(53, 'Callet', 'Theo', 'Theo.Callet@parisnanterre.fr', 340053, 2, 1),
(54, 'Callet', 'Theo', 'Theo.Callet@parisnanterre.fr', 340054, 2, 1),
(55, 'Cazenave', 'Louis', 'Louis.Cazenave@parisnanterre.fr', 340055, 2, 1),
(56, 'Chatillon', 'Julien', 'Julien.Chatillon@parisnanterre.fr', 340056, 2, 1),
(57, 'Chatillon', 'Julien', 'Julien.Chatillon@parisnanterre.fr', 340057, 2, 1),
(58, 'Chen', 'Juline', 'Juline.Chen@parisnanterre.fr', 340058, 2, 1),
(59, 'Chen', 'Juline', 'Juline.Chen@parisnanterre.fr', 340059, 2, 1),
(60, 'Crentsil', 'Robert', 'Robert.Crentsil@parisnanterre.fr', 340060, 2, 1),
(61, 'Crentsil', 'Robert', 'Robert.Crentsil@parisnanterre.fr', 340061, 2, 1),
(62, 'Dandeu', 'Tom', 'Tom.Dandeu@parisnanterre.fr', 340062, 2, 1),
(63, 'Dandeu', 'Tom', 'Tom.Dandeu@parisnanterre.fr', 340063, 2, 1),
(64, 'Delaporte', 'Lucie', 'Lucie.Delaporte@parisnanterre.fr', 340064, 2, 1),
(65, 'Delaporte', 'Lucie', 'Lucie.Delaporte@parisnanterre.fr', 340065, 2, 1),
(66, 'Diop', 'Maguette', 'Maguette.Diop@parisnanterre.fr', 340066, 2, 1),
(67, 'Djamaldine ben', 'Hadji', 'Hadji.Djamaldine ben@parisnanterre.fr', 340067, 2, 1),
(68, 'Dubois', 'Dorian', 'Dorian.Dubois@parisnanterre.fr', 340068, 2, 1),
(69, 'El amrani', 'Amine', 'Amine.El amrani@parisnanterre.fr', 340069, 2, 1),
(70, 'Esmel', 'Nome', 'Nome.Esmel@parisnanterre.fr', 340070, 2, 1),
(71, 'Fahim', 'Aymane', 'Aymane.Fahim@parisnanterre.fr', 340071, 2, 1),
(72, 'Fekih', 'Kevin', 'Kevin.Fekih@parisnanterre.fr', 340072, 2, 1),
(73, 'Feugier', 'Augustin', 'Augustin.Feugier@parisnanterre.fr', 340073, 2, 1),
(74, 'Gac', 'Kevin', 'Kevin.Gac@parisnanterre.fr', 340074, 2, 1),
(75, 'Ganeshn', 'Haresh', 'Haresh.Ganeshn@parisnanterre.fr', 340075, 2, 1),
(76, 'Gavalda', 'Clement', 'Clement.Gavalda@parisnanterre.fr', 340076, 2, 1),
(77, 'Gilbert', 'Cyprien', 'Cyprien.Gilbert@parisnanterre.fr', 340077, 2, 1),
(78, 'Gilbert', 'Cyprien', 'Cyprien.Gilbert@parisnanterre.fr', 340078, 2, 1),
(79, 'Gorlicki', 'Paul', 'Paul.Gorlicki@parisnanterre.fr', 340079, 2, 1),
(80, 'Goyet', 'Camille', 'Camille.Goyet@parisnanterre.fr', 340080, 2, 1),
(81, 'Goyet', 'Camille', 'Camille.Goyet@parisnanterre.fr', 340081, 2, 1),
(82, 'Grandelaude', 'Mathias', 'Mathias.Grandelaude@parisnanterre.fr', 340082, 2, 1),
(83, 'Hadjara', 'Celina', 'Celina.Hadjara@parisnanterre.fr', 340083, 2, 1),
(84, 'Houhou', 'Sara', 'Sara.Houhou@parisnanterre.fr', 340084, 2, 1),
(85, 'Igoudjilene', 'Kenza', 'Kenza.Igoudjilene@parisnanterre.fr', 340085, 2, 1),
(86, 'Jalloh', 'Yusuf', 'Yusuf.Jalloh@parisnanterre.fr', 340086, 2, 1),
(87, 'Jardin', 'Samy', 'Samy.Jardin@parisnanterre.fr', 340087, 2, 1),
(88, 'Jardin', 'Samy', 'Samy.Jardin@parisnanterre.fr', 340088, 2, 1),
(89, 'Jules', 'Julissa', 'Julissa.Jules@parisnanterre.fr', 340089, 2, 1),
(90, 'Kadi', 'Imane', 'Imane.Kadi@parisnanterre.fr', 340090, 2, 1),
(91, 'Kadri', 'Nassim', 'Nassim.Kadri@parisnanterre.fr', 340091, 2, 1),
(92, 'Kende', 'Emmanuela', 'Emmanuela.Kende@parisnanterre.fr', 340092, 2, 1),
(93, 'Kouhafa', 'Latifa', 'Latifa.Kouhafa@parisnanterre.fr', 340093, 2, 1),
(94, 'Lacom', 'Marveen', 'Marveen.Lacom@parisnanterre.fr', 340094, 2, 1),
(95, 'Le', 'Phong sac', 'Phong sac.Le@parisnanterre.fr', 340095, 2, 1),
(96, 'Le lorier', 'Lucas', 'Lucas.Le lorier@parisnanterre.fr', 340096, 2, 1),
(97, 'Legendre', 'Angele', 'Angele.Legendre@parisnanterre.fr', 340097, 2, 1),
(98, 'Lemaza kunday ndjuka', 'Revelle', 'Revelle.Lemaza kunday ndjuka@parisnanterre.fr', 340098, 2, 1),
(99, 'Limbasse', 'Noemie', 'Noemie.Limbasse@parisnanterre.fr', 340099, 2, 1),
(100, 'Limbasse', 'Noemie', 'Noemie.Limbasse@parisnanterre.fr', 340100, 2, 1),
(101, 'Lin', 'Xinlei', 'Xinlei.Lin@parisnanterre.fr', 340101, 2, 1),
(102, 'Louveau', 'Christophe', 'Christophe.Louveau@parisnanterre.fr', 340102, 2, 1),
(103, 'Malinvaud', 'Paul', 'Paul.Malinvaud@parisnanterre.fr', 340103, 2, 1),
(104, 'Martin', 'Vanessa', 'Vanessa.Martin@parisnanterre.fr', 340104, 2, 1),
(105, 'Medaoud', 'Salim', 'Salim.Medaoud@parisnanterre.fr', 340105, 2, 1),
(106, 'Mousset', 'Pierre', 'Pierre.Mousset@parisnanterre.fr', 340106, 2, 1),
(107, 'Mousset', 'Pierre', 'Pierre.Mousset@parisnanterre.fr', 340107, 2, 1),
(108, 'Nanquette', 'Olivier', 'Olivier.Nanquette@parisnanterre.fr', 340108, 2, 1),
(109, 'Nanquette', 'Olivier', 'Olivier.Nanquette@parisnanterre.fr', 340109, 2, 1),
(110, 'Nass', 'Julien', 'Julien.Nass@parisnanterre.fr', 340110, 2, 1),
(111, 'Nass', 'Julien', 'Julien.Nass@parisnanterre.fr', 340111, 2, 1),
(112, 'Noursaid', 'Lahcen', 'Lahcen.Noursaid@parisnanterre.fr', 340112, 2, 1),
(113, 'Oumbe oumbe', 'David', 'David.Oumbe oumbe@parisnanterre.fr', 340113, 2, 1),
(114, 'Pires', 'Dany', 'Dany.Pires@parisnanterre.fr', 340114, 2, 1),
(115, 'Pires', 'Dany', 'Dany.Pires@parisnanterre.fr', 340115, 2, 1),
(116, 'Quenum', 'Heloise', 'Heloise.Quenum@parisnanterre.fr', 340116, 2, 1),
(117, 'Quenum', 'Heloise', 'Heloise.Quenum@parisnanterre.fr', 340117, 2, 1),
(118, 'Rageh', 'Nydel', 'Nydel.Rageh@parisnanterre.fr', 340118, 2, 1),
(119, 'Rageh', 'Nydel', 'Nydel.Rageh@parisnanterre.fr', 340119, 2, 1),
(120, 'Ripert', 'Alexandre', 'Alexandre.Ripert@parisnanterre.fr', 340120, 2, 1),
(121, 'Sadat', 'Halima', 'Halima.Sadat@parisnanterre.fr', 340121, 2, 1),
(122, 'Sardaoui', 'Amine', 'Amine.Sardaoui@parisnanterre.fr', 340122, 2, 1),
(123, 'Sereir', 'Zohra', 'Zohra.Sereir@parisnanterre.fr', 340123, 2, 1),
(124, 'Sharma', 'Aurelien', 'Aurelien.Sharma@parisnanterre.fr', 340124, 2, 1),
(125, 'Sintes', 'Manon', 'Manon.Sintes@parisnanterre.fr', 340125, 2, 1),
(126, 'Smahi', 'Lydia', 'Lydia.Smahi@parisnanterre.fr', 340126, 2, 1),
(127, 'Soleil', 'Emilie', 'Emilie.Soleil@parisnanterre.fr', 340127, 2, 1),
(128, 'Soumare', 'Fatimata', 'Fatimata.Soumare@parisnanterre.fr', 340128, 2, 1),
(129, 'Sun', 'Jialei', 'Jialei.Sun@parisnanterre.fr', 340129, 2, 1),
(130, 'Tahir', 'Mohamed - imrane', 'Mohamed - imrane.Tahir@parisnanterre.fr', 340130, 2, 1),
(131, 'Tissot', 'Guilhem', 'Guilhem.Tissot@parisnanterre.fr', 340131, 2, 1),
(132, 'Tliba', 'Ahmed', 'Ahmed.Tliba@parisnanterre.fr', 340132, 2, 1),
(133, 'LE ROUX', 'Annaig', 'Annaig.LE ROUX@parisnanterre.fr', 34100, 1, 2),
(134, 'Bouchakhchoukha', 'Adel', 'Adel.Bouchakhchoukha@parisnanterre.fr', 34101, 1, 2),
(135, 'BELLINI', 'Béatrice', 'Béatrice.BELLINI@parisnanterre.fr', 34102, 1, 2),
(136, 'Hardouin Ceccantini', 'Cécile', 'Cécile.Hardouin Ceccantini@parisnanterre.fr', 34103, 1, 2),
(137, 'Mesnager', 'Laurent', 'Laurent.Mesnager@parisnanterre.fr', 34104, 1, 2),
(138, 'Le Cun', 'Bertrand', 'Bertrand.Le Cun@parisnanterre.fr', 34105, 1, 2),
(139, 'Hanen', 'Claire', 'Claire.Hanen@parisnanterre.fr', 34106, 1, 2),
(140, 'Guyon', 'Thomas', 'Thomas.Guyon@parisnanterre.fr', 34107, 1, 2),
(141, 'Ben Hamida Mrabet', 'Sana', 'Sana.Ben Hamida Mrabet@parisnanterre.fr', 34108, 1, 2),
(142, 'Ikken', 'Sonia', 'Sonia.Ikken@parisnanterre.fr', 34109, 1, 2),
(143, 'Gervais', 'Marie-Pierre', 'Marie-Pierre.Gervais@parisnanterre.fr', 34110, 1, 2),
(144, 'Duvernet', 'Laurent', 'Laurent.Duvernet@parisnanterre.fr', 34111, 1, 2),
(145, 'Castillo_', 'Alberto', 'Alberto.Castillo_@parisnanterre.fr', 34112, 1, 2),
(146, 'Baarir', 'Souheib', 'Souheib.Baarir@parisnanterre.fr', 34113, 1, 2),
(147, 'Delbot', 'François', 'François.Delbot@parisnanterre.fr', 34114, 1, 2),
(148, 'Azhar-Arnal', 'Juliette', 'Juliette.Azhar-Arnal@parisnanterre.fr', 34115, 1, 2),
(149, 'Rukoz-Castillo', 'Marta', 'Marta.Rukoz-Castillo@parisnanterre.fr', 34116, 1, 2),
(150, 'Legond-Aubry', 'Fabrice', 'Fabrice.Legond-Aubry@parisnanterre.fr', 34117, 1, 2),
(151, 'Quinio', 'Bernard', 'Bernard.Quinio@parisnanterre.fr', 34118, 1, 2),
(152, 'Pradat-Peyre', 'Jean-François', 'Jean-François.Pradat-Peyre@parisnanterre.fr', 34119, 1, 2),
(153, 'Ameur', 'Yannick', 'Yannick.Ameur@parisnanterre.fr', 34120, 1, 2),
(154, 'Décallonne', 'Marc', 'Marc.Décallonne@parisnanterre.fr', 34121, 1, 2),
(155, 'Dubois', 'Aloîs', 'Aloîs.Dubois@parisnanterre.fr', 34122, 1, 2),
(156, 'Duriez', 'Nathalie', 'Nathalie.Duriez@parisnanterre.fr', 34123, 1, 2),
(157, 'Florea', 'Paul', 'Paul.Florea@parisnanterre.fr', 34124, 1, 2),
(158, 'Isoard', 'Thierry Michel', 'Thierry Michel.Isoard@parisnanterre.fr', 34125, 1, 2),
(159, 'Latif', 'Youssef', 'Youssef.Latif@parisnanterre.fr', 34126, 1, 2),
(160, 'Leloir', 'Nicole', 'Nicole.Leloir@parisnanterre.fr', 34127, 1, 2),
(161, 'Novelli', 'Emmanuelle', 'Emmanuelle.Novelli@parisnanterre.fr', 34128, 1, 2),
(162, 'Pujol', 'Nicolas', 'Nicolas.Pujol@parisnanterre.fr', 34129, 1, 2),
(163, 'Renaud', 'Francis', 'Francis.Renaud@parisnanterre.fr', 34130, 1, 2),
(164, 'Serdoun', 'Samy', 'Samy.Serdoun@parisnanterre.fr', 34131, 1, 2),
(165, 'Starck', 'Monia', 'Monia.Starck@parisnanterre.fr', 34132, 1, 2),
(166, 'Thomas', 'Aurélie', 'Aurélie.Thomas@parisnanterre.fr', 34133, 1, 2),
(167, 'Tourvieille', 'Marc', 'Marc.Tourvieille@parisnanterre.fr', 34134, 1, 2),
(168, 'Zamfirou', 'Michel', 'Michel.Zamfirou@parisnanterre.fr', 34135, 1, 2),
(169, 'Zilova', 'Jana', 'Jana.Zilova@parisnanterre.fr', 34136, 1, 2),
(170, 'Menouer', 'Tarek', 'Tarek.Menouer@parisnanterre.fr', 34137, 1, 2),
(171, 'Rodier', 'Lise', 'Lise.Rodier@parisnanterre.fr', 34138, 1, 2),
(172, 'Angarita Arocha', 'Rafael Enrique', 'Rafael Enrique.Angarita Arocha@parisnanterre.fr', 34139, 1, 2),
(173, 'Ait Salaht', 'Farah', 'Farah.Ait Salaht@parisnanterre.fr', 34140, 1, 2),
(174, 'Rousseau', 'Pierre', 'Pierre.Rousseau@parisnanterre.fr', 34141, 1, 2),
(175, 'Medjek', 'Sarah', 'Sarah.Medjek@parisnanterre.fr', 34142, 1, 2),
(176, 'Guézou', 'Xavier', 'Xavier.Guézou@parisnanterre.fr', 34143, 1, 2),
(177, 'D_Alfonso', 'Giovanna', 'Giovanna.D_Alfonso@parisnanterre.fr', 34144, 1, 2),
(178, 'KELLOU-MENOUER', 'Kenza', 'Kenza.KELLOU-MENOUER@parisnanterre.fr', 34145, 1, 2),
(179, 'Oulhaci', 'Faiza', 'Faiza.Oulhaci@parisnanterre.fr', 34146, 1, 2),
(180, 'Poizat', 'Pascal', 'Pascal.Poizat@parisnanterre.fr', 34147, 1, 2),
(181, 'SADDEM', 'Rim ', 'Rim .SADDEM@parisnanterre.fr', 34148, 1, 2),
(182, 'BENAMMAR', 'Nassima ', 'Nassima .BENAMMAR@parisnanterre.fr', 34149, 1, 2),
(183, 'ARFAOUI', 'Khadija', 'Khadija.ARFAOUI@parisnanterre.fr', 34150, 1, 2),
(184, 'Walter', 'Jean-Marc', 'Jean-Marc.Walter@parisnanterre.fr', 34151, 1, 2),
(185, 'Bendraou', 'Reda', 'Reda.Bendraou@parisnanterre.fr', 34152, 1, 2),
(186, 'Cojean', 'Bruno', 'Bruno.Cojean@parisnanterre.fr', 34153, 1, 2),
(187, 'Abrantes', 'Pedro', 'Pedro.Abrantes@parisnanterre.fr', 34154, 1, 2),
(188, 'Zouari', 'Belhassen', 'Belhassen.Zouari@parisnanterre.fr', 34155, 1, 2),
(189, 'HOUHOU', 'Sara ', 'Sara .HOUHOU@parisnanterre.fr', 34156, 1, 2),
(190, 'GUEHIS-SAADAOUI', 'Sonia', 'Sonia.GUEHIS-SAADAOUI@parisnanterre.fr', 34157, 1, 2),
(191, 'Hillah', 'Lom Messan', 'Lom Messan.Hillah@parisnanterre.fr', 34158, 1, 2),
(192, 'Hmedeh', 'Zeinab', 'Zeinab.Hmedeh@parisnanterre.fr', 34159, 1, 2),
(193, 'Gherbi', 'Tahar', 'Tahar.Gherbi@parisnanterre.fr', 34160, 1, 2),
(194, 'Alaoui', 'Malek', 'Malek.Alaoui@parisnanterre.fr', 34161, 1, 2),
(195, 'Non defini', 'Non defini', 'Non defini.Non defini@parisnanterre.fr', 404, 1, 2),
(196, 'Pierre', 'Laurent', 'Laurent.Pierre@parisnanterre.fr', 34163, 1, 2),
(197, 'Hyon', 'Emmanuel', 'Emmanuel.Hyon@parisnanterre.fr', 34164, 1, 2),
(202, 'Raja', 'Saru', 'r.saru@gmail.com', 116034, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Statut`
--

CREATE TABLE `Statut` (
  `id_statut` int(11) NOT NULL,
  `libelle` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Statut`
--

INSERT INTO `Statut` (`id_statut`, `libelle`) VALUES
(1, 'ETU'),
(2, 'PR'),
(3, 'MCF'),
(4, 'VAC_EXT'),
(5, 'VAC_INT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Annuaire`
--
ALTER TABLE `Annuaire`
  ADD PRIMARY KEY (`id_annuaire`);

--
-- Indexes for table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD KEY `fkGroupe` (`id_groupe`),
  ADD KEY `fkIndividu` (`id_individu`);

--
-- Indexes for table `GROUPE`
--
ALTER TABLE `GROUPE`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Indexes for table `Individu`
--
ALTER TABLE `Individu`
  ADD PRIMARY KEY (`id_individu`),
  ADD KEY `fkStatut` (`id_statut`),
  ADD KEY `fkid_annuaire` (`id_annuaire`);

--
-- Indexes for table `Statut`
--
ALTER TABLE `Statut`
  ADD PRIMARY KEY (`id_statut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Annuaire`
--
ALTER TABLE `Annuaire`
  MODIFY `id_annuaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `GROUPE`
--
ALTER TABLE `GROUPE`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Individu`
--
ALTER TABLE `Individu`
  MODIFY `id_individu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `Statut`
--
ALTER TABLE `Statut`
  MODIFY `id_statut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appartenir`
--
ALTER TABLE `Appartenir`
  ADD CONSTRAINT `fkGroupe` FOREIGN KEY (`id_groupe`) REFERENCES `GROUPE` (`id_groupe`),
  ADD CONSTRAINT `fkIndividu` FOREIGN KEY (`id_individu`) REFERENCES `Individu` (`id_individu`);

--
-- Constraints for table `Individu`
--
ALTER TABLE `Individu`
  ADD CONSTRAINT `fkStatut` FOREIGN KEY (`id_statut`) REFERENCES `Statut` (`id_statut`) ON DELETE CASCADE,
  ADD CONSTRAINT `fkid_annuaire` FOREIGN KEY (`id_annuaire`) REFERENCES `Annuaire` (`id_annuaire`) ON DELETE CASCADE;
