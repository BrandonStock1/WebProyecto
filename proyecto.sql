-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2022 a las 22:12:33
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figuritas`
--

CREATE TABLE `figuritas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_jugador` int(11) DEFAULT NULL,
  `pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `figuritas`
--

INSERT INTO `figuritas` (`id`, `tipo`, `id_jugador`, `pagina`) VALUES
(1, 'especial', NULL, 2),
(2, 'especial', NULL, 2),
(3, 'especial', NULL, 3),
(4, 'especial', NULL, 3),
(5, 'especial', NULL, 4),
(6, 'jugador', 3, 4),
(7, 'jugador', 4, 4),
(8, 'jugador', 5, 4),
(9, 'jugador', 6, 5),
(10, 'jugador', 7, 5),
(11, 'jugador', 8, 5),
(12, 'jugador', 9, 5),
(13, 'jugador', 10, 5),
(14, 'jugador', 11, 5),
(15, 'jugador', 12, 5),
(16, 'jugador', 13, 5),
(17, 'especial', NULL, 6),
(18, 'jugador', 14, 6),
(19, 'jugador', 15, 6),
(20, 'jugador', 16, 6),
(21, 'jugador', 17, 7),
(22, 'jugador', 18, 7),
(23, 'jugador', 19, 7),
(24, 'jugador', 20, 7),
(25, 'jugador', 21, 7),
(26, 'jugador', 22, 7),
(27, 'jugador', 23, 7),
(28, 'jugador', 24, 7),
(29, 'especial', NULL, 8),
(30, 'jugador', 25, 8),
(31, 'jugador', 26, 8),
(32, 'jugador', 27, 8),
(33, 'jugador', 28, 9),
(34, 'jugador', 29, 9),
(35, 'jugador', 30, 9),
(36, 'jugador', 31, 9),
(37, 'jugador', 32, 9),
(38, 'jugador', 33, 9),
(39, 'jugador', 34, 9),
(40, 'jugador', 35, 9),
(41, 'especial', NULL, 10),
(42, 'jugador', 36, 10),
(43, 'jugador', 37, 10),
(44, 'jugador', 38, 10),
(45, 'jugador', 39, 11),
(46, 'jugador', 40, 11),
(47, 'jugador', 41, 11),
(48, 'jugador', 42, 11),
(49, 'jugador', 43, 11),
(50, 'jugador', 44, 11),
(51, 'jugador', 45, 11),
(52, 'jugador', 46, 11),
(53, 'especial', NULL, 12),
(54, 'jugador', 47, 12),
(55, 'jugador', 48, 12),
(56, 'jugador', 49, 12),
(57, 'jugador', 50, 13),
(58, 'jugador', 51, 13),
(59, 'jugador', 52, 13),
(60, 'jugador', 53, 13),
(61, 'jugador', 54, 13),
(62, 'jugador', 55, 13),
(63, 'jugador', 56, 13),
(64, 'jugador', 57, 13),
(65, 'especial', NULL, 14),
(66, 'jugador', 58, 14),
(67, 'jugador', 59, 14),
(68, 'jugador', 60, 14),
(69, 'jugador', 61, 15),
(70, 'jugador', 62, 15),
(71, 'jugador', 63, 15),
(72, 'jugador', 64, 15),
(73, 'jugador', 65, 15),
(74, 'jugador', 66, 15),
(75, 'jugador', 67, 15),
(76, 'jugador', 68, 15),
(77, 'especial', NULL, 16),
(78, 'jugador', 69, 16),
(79, 'jugador', 70, 16),
(80, 'jugador', 71, 16),
(81, 'jugador', 72, 17),
(82, 'jugador', 73, 17),
(83, 'jugador', 74, 17),
(84, 'jugador', 75, 17),
(85, 'jugador', 76, 17),
(86, 'jugador', 77, 17),
(87, 'jugador', 78, 17),
(88, 'jugador', 79, 17),
(89, 'especial', NULL, 18),
(90, 'jugador', 80, 18),
(91, 'jugador', 81, 18),
(92, 'jugador', 82, 18),
(93, 'jugador', 83, 19),
(94, 'jugador', 84, 19),
(95, 'jugador', 85, 19),
(96, 'jugador', 86, 19),
(97, 'jugador', 87, 19),
(98, 'jugador', 88, 19),
(99, 'jugador', 89, 19),
(100, 'jugador', 90, 19),
(101, 'especial', NULL, 20),
(102, 'jugador', 91, 20),
(103, 'jugador', 92, 20),
(104, 'jugador', 93, 21),
(105, 'jugador', 94, 21),
(106, 'jugador', 95, 21),
(107, 'jugador', 96, 21),
(108, 'jugador', 97, 21),
(109, 'jugador', 98, 21),
(110, 'jugador', 99, 21),
(111, 'jugador', 100, 21),
(112, 'jugador', 101, 21),
(113, 'especial', NULL, 22),
(114, 'jugador', 102, 22),
(115, 'jugador', 103, 22),
(116, 'jugador', 104, 22),
(117, 'jugador', 105, 23),
(118, 'jugador', 106, 23),
(119, 'jugador', 107, 23),
(120, 'jugador', 108, 23),
(121, 'jugador', 109, 23),
(122, 'jugador', 110, 23),
(123, 'jugador', 111, 23),
(124, 'jugador', 112, 23),
(125, 'especial', NULL, 24),
(126, 'jugador', 113, 24),
(127, 'jugador', 114, 24),
(128, 'jugador', 115, 24),
(129, 'jugador', 116, 25),
(130, 'jugador', 117, 25),
(131, 'jugador', 118, 25),
(132, 'jugador', 119, 25),
(133, 'jugador', 120, 25),
(134, 'jugador', 121, 25),
(135, 'jugador', 122, 25),
(136, 'jugador', 123, 25),
(137, 'especial', NULL, 26),
(138, 'jugador', 124, 26),
(139, 'jugador', 125, 26),
(140, 'jugador', 126, 26),
(141, 'jugador', 127, 27),
(142, 'jugador', 128, 27),
(143, 'jugador', 129, 27),
(144, 'jugador', 130, 27),
(145, 'jugador', 131, 27),
(146, 'jugador', 132, 27),
(147, 'jugador', 133, 27),
(148, 'jugador', 134, 27),
(149, 'especial', NULL, 28),
(150, 'jugador', 135, 28),
(151, 'jugador', 136, 28),
(152, 'jugador', 137, 28),
(153, 'jugador', 138, 29),
(154, 'jugador', 139, 29),
(155, 'jugador', 140, 29),
(156, 'jugador', 141, 29),
(157, 'jugador', 142, 29),
(158, 'jugador', 143, 29),
(159, 'jugador', 144, 29),
(160, 'jugador', 145, 29),
(161, 'especial', NULL, 30),
(162, 'jugador', 146, 30),
(163, 'jugador', 147, 30),
(164, 'jugador', 148, 30),
(165, 'jugador', 149, 31),
(166, 'jugador', 150, 31),
(167, 'jugador', 151, 31),
(168, 'jugador', 152, 31),
(169, 'jugador', 153, 31),
(170, 'jugador', 154, 31),
(171, 'jugador', 155, 31),
(172, 'jugador', 156, 31),
(173, 'especial', NULL, 32),
(174, 'jugador', 157, 32),
(175, 'jugador', 158, 32),
(176, 'jugador', 159, 32),
(177, 'jugador', 160, 33),
(178, 'jugador', 161, 33),
(179, 'jugador', 162, 33),
(180, 'jugador', 163, 33),
(181, 'jugador', 164, 33),
(182, 'jugador', 165, 33),
(183, 'jugador', 166, 33),
(184, 'jugador', 167, 33),
(185, 'especial', NULL, 34),
(186, 'jugador', 168, 34),
(187, 'jugador', 169, 34),
(188, 'jugador', 170, 34),
(189, 'jugador', 171, 35),
(190, 'jugador', 172, 35),
(191, 'jugador', 173, 35),
(192, 'jugador', 174, 35),
(193, 'jugador', 175, 35),
(194, 'jugador', 176, 35),
(195, 'jugador', 177, 35),
(196, 'jugador', 178, 35),
(197, 'especial', NULL, 36),
(198, 'jugador', 179, 36),
(199, 'jugador', 180, 36),
(200, 'jugador', 181, 36),
(201, 'jugador', 182, 37),
(202, 'jugador', 183, 37),
(203, 'jugador', 184, 37),
(204, 'jugador', 185, 37),
(205, 'jugador', 186, 37),
(206, 'jugador', 187, 37),
(207, 'jugador', 188, 37),
(208, 'jugador', 189, 37),
(209, 'especial', NULL, 38),
(210, 'jugador', 190, 38),
(211, 'jugador', 191, 38),
(212, 'jugador', 192, 38),
(213, 'jugador', 193, 39),
(214, 'jugador', 194, 39),
(215, 'jugador', 195, 39),
(216, 'jugador', 196, 39),
(217, 'jugador', 197, 39),
(218, 'jugador', 198, 39),
(219, 'jugador', 199, 39),
(220, 'jugador', 200, 39),
(221, 'especial', NULL, 40),
(222, 'jugador', 201, 40),
(223, 'jugador', 202, 40),
(224, 'jugador', 203, 40),
(225, 'jugador', 204, 41),
(226, 'jugador', 205, 41),
(227, 'jugador', 206, 41),
(228, 'jugador', 207, 41),
(229, 'jugador', 208, 41),
(230, 'jugador', 209, 41),
(231, 'jugador', 210, 41),
(232, 'jugador', 211, 41),
(233, 'especial', NULL, 42),
(234, 'jugador', 212, 42),
(235, 'jugador', 213, 42),
(236, 'jugador', 214, 42),
(237, 'jugador', 215, 43),
(238, 'jugador', 216, 43),
(239, 'jugador', 217, 43),
(240, 'jugador', 218, 43),
(241, 'jugador', 219, 43),
(242, 'jugador', 220, 43),
(243, 'jugador', 221, 43),
(244, 'jugador', 222, 43),
(245, 'especial', NULL, 44),
(246, 'jugador', 223, 44),
(247, 'jugador', 224, 44),
(248, 'jugador', 225, 44),
(249, 'jugador', 226, 45),
(250, 'jugador', 227, 45),
(251, 'jugador', 228, 45),
(252, 'jugador', 229, 45),
(253, 'jugador', 230, 45),
(254, 'jugador', 231, 45),
(255, 'jugador', 232, 45),
(256, 'jugador', 233, 45),
(257, 'especial', NULL, 46),
(258, 'jugador', 234, 46),
(259, 'jugador', 235, 46),
(260, 'jugador', 236, 46),
(261, 'jugador', 237, 47),
(262, 'jugador', 238, 47),
(263, 'jugador', 239, 47),
(264, 'jugador', 240, 47),
(265, 'jugador', 241, 47),
(266, 'jugador', 242, 47),
(267, 'jugador', 243, 47),
(268, 'jugador', 244, 47),
(269, 'especial', NULL, 48),
(270, 'jugador', 245, 48),
(271, 'jugador', 246, 48),
(272, 'jugador', 247, 48),
(273, 'jugador', 248, 49),
(274, 'jugador', 249, 49),
(275, 'jugador', 250, 49),
(276, 'jugador', 251, 49),
(277, 'jugador', 252, 49),
(278, 'jugador', 253, 49),
(279, 'jugador', 254, 49),
(280, 'jugador', 255, 49),
(281, 'especial', NULL, 50),
(282, 'jugador', 256, 50),
(283, 'jugador', 257, 50),
(284, 'jugador', 258, 50),
(285, 'jugador', 259, 51),
(286, 'jugador', 260, 51),
(287, 'jugador', 261, 51),
(288, 'jugador', 262, 51),
(289, 'jugador', 263, 51),
(290, 'jugador', 264, 51),
(291, 'jugador', 265, 51),
(292, 'jugador', 266, 51),
(293, 'especial', NULL, 52),
(294, 'jugador', 267, 52),
(295, 'jugador', 268, 52),
(296, 'jugador', 269, 52),
(297, 'jugador', 270, 53),
(298, 'jugador', 271, 53),
(299, 'jugador', 272, 53),
(300, 'jugador', 273, 53),
(301, 'jugador', 274, 53),
(302, 'jugador', 275, 53),
(303, 'jugador', 276, 53),
(304, 'jugador', 277, 53),
(305, 'especial', NULL, 54),
(306, 'jugador', 278, 54),
(307, 'jugador', 279, 54),
(308, 'jugador', 280, 54),
(309, 'jugador', 281, 55),
(310, 'jugador', 282, 55),
(311, 'jugador', 283, 55),
(312, 'jugador', 284, 55),
(313, 'jugador', 285, 55),
(314, 'jugador', 286, 55),
(315, 'jugador', 287, 55),
(316, 'jugador', 288, 55),
(317, 'especial', NULL, 56),
(318, 'jugador', 289, 56),
(319, 'jugador', 290, 56),
(320, 'jugador', 291, 56),
(321, 'jugador', 292, 57),
(322, 'jugador', 293, 57),
(323, 'jugador', 294, 57),
(324, 'jugador', 295, 57),
(325, 'jugador', 296, 57),
(326, 'jugador', 297, 57),
(327, 'jugador', 298, 57),
(328, 'jugador', 299, 57),
(329, 'especial', NULL, 58),
(330, 'jugador', 300, 58),
(331, 'jugador', 301, 58),
(332, 'jugador', 302, 58),
(333, 'jugador', 303, 59),
(334, 'jugador', 304, 59),
(335, 'jugador', 305, 59),
(336, 'jugador', 306, 59),
(337, 'jugador', 307, 59),
(338, 'jugador', 308, 59),
(339, 'jugador', 309, 59),
(340, 'jugador', 310, 59),
(341, 'especial', NULL, 60),
(342, 'jugador', 311, 60),
(343, 'jugador', 312, 60),
(344, 'jugador', 313, 60),
(345, 'jugador', 314, 61),
(346, 'jugador', 315, 61),
(347, 'jugador', 316, 61),
(348, 'jugador', 317, 61),
(349, 'jugador', 318, 61),
(350, 'jugador', 319, 61),
(351, 'jugador', 320, 61),
(352, 'jugador', 321, 61),
(353, 'especial', NULL, 62),
(354, 'jugador', 322, 62),
(355, 'jugador', 323, 62),
(356, 'jugador', 324, 62),
(357, 'jugador', 325, 63),
(358, 'jugador', 326, 63),
(359, 'jugador', 327, 63),
(360, 'jugador', 328, 63),
(361, 'jugador', 329, 63),
(362, 'jugador', 330, 63),
(363, 'jugador', 331, 63),
(364, 'jugador', 332, 63),
(365, 'especial', NULL, 64),
(366, 'jugador', 333, 64),
(367, 'jugador', 334, 64),
(368, 'jugador', 335, 64),
(369, 'jugador', 336, 65),
(370, 'jugador', 337, 65),
(371, 'jugador', 338, 65),
(372, 'jugador', 339, 65),
(373, 'jugador', 340, 65),
(374, 'jugador', 341, 65),
(375, 'jugador', 342, 65),
(376, 'jugador', 343, 65),
(377, 'especial', NULL, 66),
(378, 'jugador', 344, 66),
(379, 'jugador', 345, 66),
(380, 'jugador', 346, 66),
(381, 'jugador', 347, 67),
(382, 'jugador', 248, 67),
(383, 'jugador', 249, 67),
(384, 'jugador', 250, 67),
(385, 'jugador', 251, 67),
(386, 'jugador', 252, 67),
(387, 'jugador', 253, 67),
(388, 'jugador', 254, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre_y_apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre_y_apellido`, `edad`, `peso`, `altura`, `posicion`) VALUES
(3, 'SAAD AL SHEEB', 32, 79, 185, 'Portero'),
(4, 'BASSAM ALRAWI', 24, 77, 174, 'Defensor'),
(5, 'ABDULKARIM HASSAN', 28, 79, 186, 'Defensor'),
(6, 'BOUALEM KOUKHI', 31, 76, 182, 'Mediocampista'),
(7, 'PEDRO MIGUEL', 32, 73, 182, 'Defensor'),
(8, 'TAREK SALMAN', 24, 77, 180, 'Mediocampista'),
(9, 'KARIM BOUDIAF', 31, 64, 187, 'Defensor'),
(10, 'ABDULAZIZ HATEM', 31, 76, 182, 'Mediocampista'),
(11, 'AKRAM HASSAN AFIF ', 25, 80, 177, 'Delantero'),
(12, 'HASAN AL-HAYDOS', 31, 58, 170, 'Delantero'),
(13, 'ALMOEZ ALI', 26, 64, 180, 'Delantero'),
(14, 'HERNAN GALINDEZ', 35, 80, 189, 'Portero'),
(15, 'PERVIS ESTUPINIAN', 24, 79, 175, 'Defensor'),
(16, 'PIERO HINCAPIÉ', 20, 66, 184, 'Defensor'),
(17, 'ANGELO PRECIADO', 24, 73, 173, 'Defensor'),
(18, 'FELIX TORRES ', 25, 78, 187, 'Defensor'),
(19, 'MOISÉS CAICEDO', 20, 73, 178, 'Mediocampista'),
(20, 'CARLOS GRUEZO', 27, 71, 173, 'Mediocampista'),
(21, 'MICHAEL ESTRADA', 26, 86, 188, 'Delantero'),
(22, 'ÁNGEL MENA', 34, 65, 168, 'Delantero'),
(23, 'GONZALO PLATA', 21, 65, 178, 'Delantero'),
(24, 'ENNER VALENCIA', 32, 74, 177, 'Delantero'),
(25, 'ÉDOUARD MEDY', 30, 93, 197, 'Portero'),
(26, 'SALIOU CISS', 32, 76, 173, 'Defensor'),
(27, 'ABDOU DIALLO', 26, 79, 187, 'Defensor'),
(28, 'KALIDOU KOULIBALY', 31, 78, 186, 'Defensor'),
(29, 'BOUNA SAAR', 30, 71, 178, 'Defensor'),
(30, 'IDRISSA GUEYE', 23, 66, 174, 'Mediocampista'),
(31, 'CHEIKHOU KOUYATÉ', 32, 79, 192, 'Mediocampista'),
(32, 'NAMPALYS MENDY', 30, 78, 167, 'Mediocampista'),
(33, 'BOULAYE DIA ', 25, 67, 180, 'Delantero'),
(34, 'SADIO MANE', 30, 69, 174, 'Delantero'),
(35, 'ISMAILA SARR', 24, 76, 185, 'Delantero'),
(36, 'JUSTIN BIJLOW', 24, 84, 188, 'Portero'),
(37, 'DALEY BLIND', 32, 72, 180, 'Defensor'),
(38, 'MATTHIS DE LIGT', 23, 89, 189, 'Defensor'),
(39, 'DENZEL DUMFRIES', 26, 80, 188, 'Defensor'),
(40, 'STEFAN DE VRIJ', 30, 78, 190, 'Defensor'),
(41, 'VIRJIL VAN DIJK', 31, 92, 193, 'Defensor'),
(42, 'FRENKIE DE JONG', 25, 74, 180, 'Mediocampista'),
(43, 'DAVY KLAASSEN', 29, 79, 179, 'Mediocampista'),
(44, 'GEORGINIO WIJNALDUM', 31, 69, 175, 'Mediocampista'),
(45, 'STEVEN BERGWIJN', 25, 74, 178, 'Delantero'),
(46, 'MEMPHIS DEPAY', 28, 78, 176, 'Delantero'),
(47, 'JORDAN PICKFORD', 28, 77, 185, 'Portero'),
(48, 'HARRY MAGUIRE', 29, 100, 194, 'Defensor'),
(49, 'LUKE SHAW', 27, 75, 178, 'Defensor'),
(50, 'JOHN STONES', 28, 70, 188, 'Defensor'),
(51, 'KYLE WALKER', 32, 80, 178, 'Defensor'),
(52, 'MASON MOUNT', 23, 70, 180, 'Mediocampista'),
(53, 'KALVIN PHILLIPS', 27, 73, 178, 'Mediocampista'),
(54, 'DECLAN RICE', 23, 76, 185, 'Mediocampista'),
(55, 'PHIL FODEN', 22, 61, 171, 'Mediocampista'),
(56, 'HARRY KANE', 29, 69, 188, 'Delantero'),
(57, 'RAHEEM STERLING', 28, 69, 170, 'Delantero'),
(58, 'ALIREZA BEIRANVAND', 29, 85, 198, 'Portero'),
(59, 'HOSSEIN KANANNI', 28, 82, 188, 'Defensor'),
(60, 'SHOJA KHALILZADEH', 33, 80, 183, 'Defensor'),
(61, 'MILAD MOHAMMADI', 28, 79, 178, 'Defensor'),
(62, 'OMID NOORAFKAN', 25, 78, 182, 'Defensor'),
(63, 'SAEID EZATOLAHI', 25, 84, 190, 'Mediocampista'),
(64, 'ALI GHOLIZADEH', 26, 69, 176, 'Mediocampista'),
(65, 'ALIREZA JAHANBAKHSH', 29, 78, 180, 'Mediocampista'),
(66, 'AHMAD NOUROLLAHI', 29, 83, 185, 'Mediocampista'),
(67, 'SADAR AZMOUN', 27, 75, 186, 'Delantero'),
(68, 'MEHDI TAREMI', 30, 69, 187, 'Delantero'),
(69, 'MATT TURNER', 28, 76, 191, 'Portero'),
(70, 'SERGINIO DEST', 21, 62, 175, 'Defensor'),
(71, 'ANTONEE ROBINSON', 25, 70, 183, 'Defensor'),
(72, 'DEANDRE YEDLIN', 29, 74, 172, 'Defensor'),
(73, 'WALKER ZIMMERMAN', 29, 68, 191, 'Defensor'),
(74, 'TYLER ADAMS', 23, 72, 175, 'Mediocampista'),
(75, 'WESTON MCKENNIE', 24, 86, 180, 'Mediocampista'),
(76, 'RICARDO PEPI', 19, 74, 185, 'Delantero'),
(77, 'CHRISTIAN PULISIC', 23, 73, 177, 'Delantero'),
(78, 'GIOVANNI REYNA', 19, 79, 185, 'Delantero'),
(79, 'TIMOTHY WEAH', 22, 66, 183, 'Delantero'),
(80, 'WAYNE HENNESSEY', 35, 85, 198, 'Portero'),
(81, 'ETHAN AMPADU', 22, 78, 183, 'Defensor'),
(82, 'BEN DAVIES', 29, 76, 181, 'Defensor'),
(83, 'CONNOR ROBERTS', 26, 75, 173, 'Defensor'),
(84, 'JOE RODON', 24, 90, 193, 'Defensor'),
(85, 'NECO WILLIAMS', 21, 72, 183, 'Defensor'),
(86, 'JOE ALLEN', 32, 62, 168, 'Mediocampista'),
(87, 'AARON RAMSEY', 32, 78, 180, 'Mediocampista'),
(88, 'GARETH BALE', 33, 81, 185, 'Delantero'),
(89, 'DANIEL JAMES', 24, 76, 170, 'Delantero'),
(90, 'KIEFER MOORE', 30, 80, 196, 'Delantero'),
(91, 'EMILIANO MARTINEZ', 29, 88, 193, 'Portero'),
(92, 'MARCOS ACUNIA', 30, 72, 172, 'Defensor'),
(93, 'NAHUEL MOLINA', 24, 70, 198, 'Defensor'),
(94, 'NICOLÁS OTAMENDI', 34, 81, 183, 'Defensor'),
(95, 'CRISTIAN ROMERO', 24, 79, 188, 'Defensor'),
(96, 'RODRIGO DE PAUL', 28, 70, 180, 'Mediocampista'),
(97, 'ANGEL DI MARÍA', 34, 75, 180, 'Delantero'),
(98, 'GIOVANI LO CELSO', 26, 76, 177, 'Mediocampista'),
(99, 'LEANDRO PAREDES', 28, 75, 180, 'Mediocampista'),
(100, 'LAUTARO MARTINEZ', 24, 72, 174, 'Delantero'),
(101, 'LIONEL MESSI', 35, 72, 170, 'Delantero'),
(102, 'MOHAMED AL-OWAIS', 30, 70, 185, 'Portero'),
(103, 'ABDULELAH AL-AMRI', 25, 74, 185, 'Defensor'),
(104, 'SULTAN AL-GHANNAM', 28, 67, 173, 'Defensor'),
(105, 'YASSER AL-SHAHRANI', 30, 62, 171, 'Defensor'),
(106, 'HASSAN AL-TAMBAKTI', 23, 69, 182, 'Defensor'),
(107, 'ABDULLAH MADU', 29, 77, 187, 'Defensor'),
(108, 'SALMAN AL-FARAJ', 33, 78, 179, 'Mediocampista'),
(109, 'ABDULELAH AL-MALKI', 27, 67, 176, 'Mediocampista'),
(110, 'MOHAMED KANNO', 28, 73, 191, 'Mediocampista'),
(111, 'SALEM AL-DAWSARI', 31, 72, 171, 'Delantero'),
(112, 'KHALID AL-GHANNAM', 21, 80, 171, 'Delantero'),
(113, 'GUILLERMO OCHOA', 37, 85, 185, 'Portero'),
(114, 'NÉSTOR ARÁUJO', 31, 87, 188, 'Defensor'),
(115, 'JESÚS GALLARDO', 28, 68, 176, 'Defensor'),
(116, 'CÉSAR MONTÉS', 25, 70, 191, 'Defensor'),
(117, 'JORGE SÁNCHEZ', 24, 70, 175, 'Defensor'),
(118, 'ÉDSON ÁLVAREZ', 24, 72, 187, 'Defensor'),
(119, 'JESÚS MANUEL CORONA', 29, 65, 174, 'Mediocampista'),
(120, 'HÉCTOR HERRERA', 32, 80, 183, 'Mediocampista'),
(121, 'CARLOS RODRÍGUEZ', 32, 66, 171, 'Mediocampista'),
(122, 'RAÚL JIMENEZ', 31, 76, 190, 'Delantero'),
(123, 'HIRVING LOZANO', 27, 70, 175, 'Delantero'),
(124, 'WOJCIECH SZCZESNY', 32, 96, 192, 'Portero'),
(125, 'JAN BEDNAREK', 26, 77, 190, 'Defensor'),
(126, 'BARTOSZ BERESZYNSKI', 30, 73, 183, 'Defensor'),
(127, 'MATTY CASH', 25, 69, 185, 'Defensor'),
(128, 'KAMIL GLIK', 34, 80, 190, 'Defensor'),
(129, 'KAWIL JÓZWIAK', 24, 70, 176, 'Mediocampista'),
(130, 'GRZGORZ CRYCHOWIAK', 32, 80, 186, 'Mediocampista'),
(131, 'JAKUB MODER', 23, 78, 190, 'Mediocampista'),
(132, 'PIOTR ZIELINSKI', 28, 64, 178, 'Mediocampista'),
(133, 'ROBERT LEWANDOWSKI', 34, 81, 185, 'Delantero'),
(134, 'ARKADIUSZ MILIK', 28, 67, 186, 'Delantero'),
(135, 'HUGO LLORIS', 35, 80, 188, 'Portero'),
(136, 'THEO HERNÁNDEZ', 24, 82, 184, 'Defensor'),
(137, 'PRESNEL KIMPEMBE', 27, 77, 183, 'Defensor'),
(138, 'JULES KOUNDÉ', 23, 70, 180, 'Defensor'),
(139, 'RAPHAEL VARANE', 29, 81, 191, 'Defensor'),
(140, 'N\'GOLO KANTÉ', 31, 70, 168, 'Mediocampista'),
(141, 'PAUL POGBA', 29, 78, 191, 'Mediocampista'),
(142, 'ADRIEN RABIOT', 27, 80, 192, 'Mediocampista'),
(143, 'KARIM BENZEMA', 34, 81, 185, 'Delantero'),
(144, 'ANTOINE GRIEZMANN', 31, 73, 176, 'Delantero'),
(145, 'KYLIAN MBAPPÉ', 23, 73, 178, 'Delantero'),
(146, 'MATHEW RYAN', 30, 80, 183, 'Portero'),
(147, 'AZIZ BEHICH', 31, 63, 170, 'Defensor'),
(148, 'RHYAN GRANT', 31, 74, 174, 'Defensor'),
(149, 'TRENT SAINSBURY', 30, 69, 183, 'Defensor'),
(150, 'HARRY SOUTTAR', 23, 79, 198, 'Defensor'),
(151, 'AJDIN HRUSTIC', 26, 74, 183, 'Mediocampista'),
(152, 'JACKSON IRVINE', 29, 74, 189, 'Mediocampista'),
(153, 'AARON MOOY', 31, 70, 174, 'Mediocampista'),
(154, 'MARTIN BOYLE', 29, 53, 172, 'Mediocampista'),
(155, 'MITCHELL DUKE', 31, 75, 185, 'Delantero'),
(156, 'MATHEW LECKIE', 31, 69, 181, 'Delantero'),
(157, 'KASPER SCHEMEICHEL', 35, 89, 189, 'Portero'),
(158, 'ANDREAS CHRISTENSEN', 26, 82, 187, 'Defensor'),
(159, 'SIMON KJAER', 33, 82, 190, 'Defensor'),
(160, 'JOAKIM MAEHLE', 25, 77, 186, 'Defensor'),
(161, 'JANNIK YESTERGAARD', 30, 98, 199, 'Defensor'),
(162, 'THOMAS DELANEY', 30, 75, 180, 'Mediocampista'),
(163, 'CHRISTIAN ERIKSEN', 30, 76, 182, 'Mediocampista'),
(164, 'PIERRE EMILE HOJBJERG', 27, 78, 185, 'Mediocampista'),
(165, 'DANIEL WASS', 33, 73, 181, 'Mediocampista'),
(166, 'MARTIN BRAITHWAITE', 31, 73, 177, 'Delantero'),
(167, 'YOUSSUF POULSEN', 28, 78, 193, 'Delantero'),
(168, 'BECHIR BEN SAID', 27, 70, 188, 'Portero'),
(169, 'DYLAN BRONN', 27, 77, 187, 'Defensor'),
(170, 'MOHAMED DRAGER', 26, 69, 178, 'Defensor'),
(171, 'ALI MAALOUL', 32, 78, 175, 'Defensor'),
(172, 'MONTASAAR TALBI', 24, 76, 190, 'Defensor'),
(173, 'WAHBI KHAZRI', 31, 75, 182, 'Mediocampista'),
(174, 'AISSA LAIDOUNI', 25, 75, 179, 'Mediocampista'),
(175, 'ELLYES SKHIRI', 27, 69, 185, 'Mediocampista'),
(176, 'ANIS SLIMANE', 21, 76, 188, 'Mediocampista'),
(177, 'SEIFEDDINE JAZIRI', 29, 73, 180, 'Delantero'),
(178, 'YOUSSEF MSAKNI', 31, 64, 179, 'Delantero'),
(179, 'UNAI SIMÓN', 25, 88, 192, 'Portero'),
(180, 'CÉSAR AZPILICUETA', 32, 78, 178, 'Defensor'),
(181, 'ERIC GARCÍA', 21, 79, 182, 'Defensor'),
(182, 'JORDI ALBA', 33, 68, 170, 'Defensor'),
(183, 'AYMERIC LAPORTE', 28, 85, 189, 'Defensor'),
(184, 'GAVI', 18, 65, 173, 'Mediocampista'),
(185, 'PEDRI', 19, 60, 174, 'Mediocampista'),
(186, 'SERGIO BUSQUETS', 34, 76, 189, 'Mediocampista'),
(187, 'DANI OLMO', 24, 73, 179, 'Mediocampista'),
(188, 'FERRAN TORRES', 22, 77, 184, 'Delantero'),
(189, 'ÁLVARO MORATA', 29, 84, 190, 'Delantero'),
(190, 'KEYLOR NAVAS', 35, 79, 185, 'Portero'),
(191, 'FRANCISCO CALVO', 30, 80, 181, 'Defensor'),
(192, 'ÓSCAR DUARTE', 33, 76, 186, 'Defensor'),
(193, 'KEYSHER FULLER', 28, 78, 183, 'Defensor'),
(194, 'BRYAN OVIEDO', 32, 70, 172, 'Defensor'),
(195, 'CELSO BORGES', 34, 81, 183, 'Mediocampista'),
(196, 'BRYAN RUIZ', 37, 81, 188, 'Mediocampista'),
(197, 'YELTSIN TEJEDA', 30, 67, 179, 'Mediocampista'),
(198, 'JEWISON BENNETTE', 18, 70, 175, 'Delantero'),
(199, 'JOEL CAMPBELL', 30, 78, 178, 'Delantero'),
(200, 'ANTHONY CONTRERAS', 22, 75, 180, 'Delantero'),
(201, 'MANUEL NEUR', 36, 93, 193, 'Portero'),
(202, 'THILO KEHRER', 25, 76, 186, 'Defensor'),
(203, 'DAVID RAUM', 24, 75, 180, 'Defensor'),
(204, 'ANTONIO RUDIGER', 29, 86, 190, 'Defensor'),
(205, 'NIKLAS SULE', 27, 97, 195, 'Defensor'),
(206, 'LEON GORETZKA', 27, 82, 189, 'Mediocampista'),
(207, 'KAI HAVERTZ', 23, 82, 190, 'Mediocampista'),
(208, 'JOSHUA KIMMICH', 27, 75, 177, 'Mediocampista'),
(209, 'SERGE GNABRY', 27, 75, 175, 'Delantero'),
(210, 'THOMAS MULLER', 33, 75, 186, 'Delantero'),
(211, 'TIMO WERNER', 26, 78, 180, 'Delantero'),
(212, 'SHUICHI GONDA', 33, 77, 187, 'Portero'),
(213, 'YUTO NAGATOMO', 36, 68, 170, 'Defensor'),
(214, 'TAKEHIRO TOMIYASU', 23, 70, 188, 'Defensor'),
(215, 'MIKI YAMANE', 28, 72, 178, 'Defensor'),
(216, 'MAYA YOSHIDA', 34, 78, 189, 'Defensor'),
(217, 'WATARU ENDO', 29, 73, 178, 'Defensor'),
(218, 'GAKU SHIBASAKI', 30, 65, 175, 'Mediocampista'),
(219, 'AO TANAKA', 23, 69, 177, 'Mediocampista'),
(220, 'JUNYA ITO', 29, 68, 176, 'Mediocampista'),
(221, 'TAKUMI MINAMINO', 27, 68, 174, 'Delantero'),
(222, 'YUYA OSAKO', 32, 70, 182, 'Delantero'),
(223, 'THIBAUT COURTOIS', 30, 96, 199, 'Portero'),
(224, 'TOBY ALDERWEIRELD', 33, 76, 187, 'Defensor'),
(225, 'JASON DENAYER', 27, 70, 184, 'Defensor'),
(226, 'THOMAS MEUNIER', 30, 90, 191, 'Defensor'),
(227, 'JAN VERTONGHEN', 35, 86, 189, 'Defensor'),
(228, 'YANNICK CARRASCO', 28, 72, 181, 'Mediocampista'),
(229, 'KEVIN DE BRUYNE', 31, 70, 181, 'Mediocampista'),
(230, 'YOURI TIELEMANS', 25, 72, 176, 'Mediocampista'),
(231, 'AXEL WITSEL', 33, 81, 186, 'Mediocampista'),
(232, 'EDEN HAZARD', 31, 74, 175, 'Delantero'),
(233, 'ROMELU LUKAKU', 29, 103, 191, 'Delantero'),
(234, 'MILAN BORJAN', 34, 91, 196, 'Portero'),
(235, 'ALISTAIR JOHNSTON', 23, 77, 180, 'Defensor'),
(236, 'RICHIE LARYEA', 27, 68, 175, 'Defensor'),
(237, 'KAMAL MILLER', 25, 75, 183, 'Defensor'),
(238, 'STEVEN VITORIA', 35, 63, 195, 'Defensor'),
(239, 'TAJON BUCHANAN', 23, 71, 183, 'Mediocampista'),
(240, 'ALPHONSO DAVIES', 21, 75, 183, 'Mediocampista'),
(241, 'STEPHEN EUSTAQUIO', 25, 70, 177, 'Mediocampista'),
(242, 'ATIBA HUTCHINSON', 39, 87, 187, 'Mediocampista'),
(243, 'JONATHAN DAVID', 22, 71, 175, 'Delantero'),
(244, 'CYLE LARIN', 27, 74, 188, 'Delantero'),
(245, 'YASSINE BOUNOU', 31, 80, 195, 'Portero'),
(246, 'NAYEF AGUERD', 26, 76, 188, 'Defensor'),
(247, 'ACHRAF HAKIMI', 23, 73, 181, 'Defensor'),
(248, 'ADAM MASINA', 28, 78, 189, 'Defensor'),
(249, 'ROMAIN SAISS', 32, 80, 188, 'Defensor'),
(250, 'SELIM AMALLAH', 25, 70, 186, 'Mediocampista'),
(251, 'SOFYAN AMRABAT', 26, 70, 183, 'Mediocampista'),
(252, 'IMRAM LOUZA', 23, 65, 178, 'Mediocampista'),
(253, 'SOFIANE BOUFAL', 28, 75, 175, 'Mediocampista'),
(254, 'YOUSSEF EN-NESYRI', 35, 73, 188, 'Delantero'),
(255, 'RYAN MMAEE', 25, 85, 188, 'Delantero'),
(256, 'DOMINIK LIVAKOVIC', 27, 85, 188, 'Portero'),
(257, 'JOSKO GVARDIOL', 20, 75, 185, 'Defensor'),
(258, 'JOSIP JURANOVIC', 27, 69, 175, 'Defensor'),
(259, 'DEJAN LOVREN', 33, 84, 188, 'Defensor'),
(260, 'BORNA SOSA', 24, 77, 174, 'Defensor'),
(261, 'MARCELO BROZOVIC', 30, 68, 181, 'Mediocampista'),
(262, 'MATEO KOVACIC', 28, 78, 179, 'Mediocampista'),
(263, 'LUKA MODRIC', 36, 66, 172, 'Mediocampista'),
(264, 'IVAN PERISIC', 33, 80, 186, 'Mediocampista'),
(265, 'NIKOLA VLASIC', 27, 79, 178, 'Mediocampista'),
(266, 'ANDREJ KRAMARIC', 31, 68, 177, 'Delantero'),
(267, 'ALISSON', 29, 88, 191, 'Portero'),
(268, 'ALEX SANDRO', 31, 80, 180, 'Defensor'),
(269, 'DANILO', 31, 78, 184, 'Defensor'),
(270, 'MARQUINHOS', 28, 75, 183, 'Defensor'),
(271, 'THIAGO SILVA', 37, 79, 181, 'Defensor'),
(272, 'CASEMIRO', 30, 84, 185, 'Mediocampista'),
(273, 'FRED', 29, 72, 169, 'Mediocampista'),
(274, 'LUCAS PAQUETÁ', 24, 72, 180, 'Mediocampista'),
(275, 'GABRIEL JESUS', 25, 73, 175, 'Delantero'),
(276, 'NEYMAR JR', 30, 68, 175, 'Delantero'),
(277, 'VINICIUS JR', 22, 73, 176, 'Delantero'),
(278, 'PREDRAG RAJKOVIC', 26, 73, 190, 'Portero'),
(279, 'NIKOLA MILENKOVIC', 24, 90, 195, 'Defensor'),
(280, 'STRAHINJA PAVLOVIC', 21, 86, 194, 'Defensor'),
(281, 'MILOS VELJKOVIC', 26, 77, 188, 'Defensor'),
(282, 'NEMANJA GUDELJ', 30, 80, 187, 'Defensor'),
(283, 'FILIP KOSTIC', 30, 82, 184, 'Mediocampista'),
(284, 'DARKO LAZOVIC', 31, 78, 181, 'Mediocampista'),
(285, 'SERGEJ MILINKOVIC-SAVIC', 27, 76, 191, 'Mediocampista'),
(286, 'ALEKSANDAR MITROVIC', 27, 90, 189, 'Delantero'),
(287, 'DUSAN TADIC', 33, 75, 181, 'Delantero'),
(288, 'DUSAN VLAHOVIC', 22, 75, 190, 'Delantero'),
(289, 'YANN SOMMER', 33, 78, 183, 'Portero'),
(290, 'MANUEL AKANJI', 25, 85, 188, 'Defensor'),
(291, 'NICO ELVEDI', 26, 78, 189, 'Defensor'),
(292, 'RICARDO RODRIGUEZ', 30, 81, 181, 'Defensor'),
(293, 'SILVAN WIDMER', 29, 79, 182, 'Defensor'),
(294, 'REMO FREULER', 30, 77, 181, 'Mediocampista'),
(295, 'XHERDAN SHAQUIRI', 30, 78, 169, 'Mediocampista'),
(296, 'GRANT XHAKA', 29, 82, 186, 'Mediocampista'),
(297, 'DENIS ZAKARIA', 25, 81, 191, 'Mediocampista'),
(298, 'BREEL EMBOLO', 25, 84, 184, 'Delantero'),
(299, 'HARIS SEFEROVIC', 30, 85, 189, 'Delantero'),
(300, 'ANDRÉ ONANA', 26, 82, 190, 'Portero'),
(301, 'JEAN-CHARLES CASTELLETTO', 27, 80, 186, 'Defensor'),
(302, 'COLLINS FAI', 30, 70, 165, 'Defensor'),
(303, 'MICHAEL NGADEU', 32, 70, 165, 'Defensor'),
(304, 'NOUHOU', 25, 79, 178, 'Defensor'),
(305, 'SAMUEL OUM GOUET', 24, 74, 185, 'Mediocampista'),
(306, 'ANDRE-FRANK ZAMBO ANGUISSA', 27, 83, 184, 'Mediocampista'),
(307, 'VINCENT ABOUBAKAR', 30, 78, 186, 'Delantero'),
(308, 'ERIC MAXIM CHUPO-MOTING', 33, 82, 191, 'Delantero'),
(309, 'NICOLAS MOUMI NGAMALEU', 28, 74, 181, 'Delantero'),
(310, 'KARL TOKO EKAMBI', 30, 78, 185, 'Delantero'),
(311, 'DIOGO COSTA', 23, 81, 187, 'Portero'),
(312, 'JOAO CANCELO', 28, 74, 182, 'Defensor'),
(313, 'PEPE', 39, 81, 188, 'Defensor'),
(314, 'RAPHAEL GUERRREIRO', 29, 71, 170, 'Defensor'),
(315, 'RUBEN DIAS', 25, 83, 186, 'Defensor'),
(316, 'BERNARDO SILVA', 28, 64, 173, 'Mediocampista'),
(317, 'BRUNO FERNANDES', 27, 69, 180, 'Mediocampista'),
(318, 'DANILO PEREIRA', 31, 83, 188, 'Mediocampista'),
(319, 'JOAO MOUTINHO', 35, 65, 170, 'Mediocampista'),
(320, 'CRISTIANO RONALDO', 37, 83, 187, 'Delantero'),
(321, 'DIOGO JOTA', 25, 70, 178, 'Delantero'),
(322, 'JOE WALLACOTT', 26, 80, 190, 'Defensor'),
(323, 'DANIEL AMARTEY', 28, 79, 186, 'Defensor'),
(324, 'ABDUL-RAHMAN BABA', 28, 70, 179, 'Defensor'),
(325, 'ALEXANDER DJIKU', 28, 70, 182, 'Defensor'),
(326, 'ANDY YIADOM', 30, 75, 180, 'Defensor'),
(327, 'IDDRISU BABA', 26, 73, 182, 'Mediocampista'),
(328, 'MOHAMMED KUDUS', 22, 70, 177, 'Mediocampista'),
(329, 'THOMAS PARTEY', 29, 77, 180, 'Mediocampista'),
(330, 'ANDRÉ AYEW', 33, 72, 176, 'Delantero'),
(331, 'JORDAN AYEW', 30, 80, 181, 'Delantero'),
(332, 'KAMALDEEN SULEMANA', 20, 70, 175, 'Delantero'),
(333, 'FERNANDO MUSLERA', 36, 74, 190, 'Portero'),
(334, 'RONALD ARAUJO', 23, 79, 188, 'Defensor'),
(335, 'JOSÉ MARÍA GIMENEZ', 27, 69, 185, 'Defensor'),
(336, 'DIEGO GODÍN', 36, 79, 187, 'Defensor'),
(337, 'MATHIAS OLIVERA', 24, 78, 184, 'Defensor'),
(338, 'RODRIGO BENTANCUR', 25, 79, 185, 'Mediocampista'),
(339, 'GIORGIAN DE ARRASCAETA', 28, 67, 172, 'Mediocampista'),
(340, 'NICOLÁS DE LA CRUZ', 25, 65, 167, 'Mediocampista'),
(341, 'FEDERICO VALVERDE', 24, 76, 182, 'Mediocampista'),
(342, 'EDINSON CAVANI', 35, 71, 184, 'Delantero'),
(343, 'LUIS SUAREZ', 35, 86, 182, 'Delantero'),
(344, 'SEUNG-GYU KIM', 31, 75, 187, 'Portero'),
(345, 'MIN-JAE KIM', 26, 88, 190, 'Defensor'),
(346, 'YOUNG-GWON KIM', 32, 74, 186, 'Defensor'),
(347, 'JIN-SU KIM', 30, 68, 177, 'Defensor'),
(348, 'YONG LEE', 35, 74, 180, 'Defensor'),
(349, 'IN-BEOM HWANG', 25, 70, 177, 'Mediocampista'),
(350, 'WOO-YOUNG JUNG', 33, 78, 186, 'Mediocampista'),
(351, 'JAE-SUNG LEE', 30, 70, 180, 'Mediocampista'),
(352, 'HEE-CHANG HWANG', 26, 77, 177, 'Delantero'),
(353, 'UI-JO HWANG', 30, 73, 183, 'Delantero'),
(354, 'HEUNG-MIN SON', 30, 78, 183, 'Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_figuritas`
--

CREATE TABLE `user_figuritas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_figuritas` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_de_usuario` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_de_usuario`, `mail`, `contrasenia`) VALUES
(1, 'Brandon', 'brandonstock@gmail.com', '123'),
(3, 'juani', 'juani@gmail.com', '123'),
(5, 'lara', 'laragenovese@gmail.com', '1234'),
(6, 'mirko', 'mirkowalenten@gmail.com', 'mirko123'),
(7, 'sasha', 'sashaa@cattaneo.com', 'gilbrrt'),
(8, 'nico', 'nico@gmail.com', '1234'),
(9, 'gasti', 'gasti@gmail.com', '123456'),
(11, 'Fausto¨*', 'juani1@gmail.com', '´+}'),
(12, 'LARA123456789', 'larulari@gmail.com', 'laraaaaaaaaaaaaa'),
(14, '123456789', 'sdfghjkl@dfghjk', 'ertyuiol'),
(16, 'messi', 'juanicama@gmail.com', '123'),
(17, 'root', 'root@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `figuritas`
--
ALTER TABLE `figuritas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_figuritas`
--
ALTER TABLE `user_figuritas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `figuritas`
--
ALTER TABLE `figuritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT de la tabla `user_figuritas`
--
ALTER TABLE `user_figuritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
