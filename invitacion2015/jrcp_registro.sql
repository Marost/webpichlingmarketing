-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-09-2016 a las 17:09:01
-- Versión del servidor: 5.5.48-37.8
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jurecpie_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jrcp_registro`
--

CREATE TABLE IF NOT EXISTS `jrcp_registro` (
  `id` int(11) NOT NULL,
  `facebook_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nombre_apellido` varchar(250) CHARACTER SET latin1 NOT NULL,
  `username` varchar(0) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `genero` varchar(10) CHARACTER SET latin1 NOT NULL,
  `asistencia` varchar(250) CHARACTER SET latin1 NOT NULL,
  `camiseta` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `jrcp_registro`
--

INSERT INTO `jrcp_registro` (`id`, `facebook_id`, `nombre_apellido`, `username`, `email`, `genero`, `asistencia`, `camiseta`) VALUES
(1, '10207795671554619', 'Ronal Daniel Maita Vasquez', '', '', '', 'L', 'ronal_daniel'),
(2, '1635563863360310', 'Ricardo Gallo GonzÃ¡lez', '', '', '', 'S', 'ricardo_gallo'),
(3, '703588566440138', 'GermÃ¡n PrÃ³', '', '', '', 'M', 'german_pro'),
(4, '1071836259496337', 'Cristian Caballero', '', '', '', 'S', 'cristian_caballero'),
(5, '1193959387298771', 'Salvador Rojas NuÃ±ez', '', '', '', 'M', 'salvador_rojas'),
(6, '809620855803395', 'Franco Champion ', '', '', '', 'M', 'franco_champion'),
(7, '1078799918811659', 'Ruben Bazalar', '', '', '', 'S', 'ruben_bazalar'),
(8, '1211159165577681', 'Paulo Lacherre', '', '', '', 'S', 'paulo_lacherre'),
(9, '1130018797026517', 'Fabio Lacherre', '', '', '', 'S', 'fabio_lacherre'),
(10, '906783932720108', 'Nicolas Flores', '', '', '', 'M', 'nicolas_flores'),
(11, '1243727745644702', 'Rodrigo Berry', '', '', '', 'S', 'rodrigo_berry'),
(12, '939875196049912', 'Fernando Roman', '', '', '', 'L', 'fernando_roman'),
(13, '1028990327165452', 'Luis Felipe Pichling Villegas', '', '', '', 'XL', 'luis_pichling'),
(14, '1057021707649109', 'Julio Pichling Villegas', '', '', '', 'M', 'julio_pichling'),
(15, '849515465162074', 'Franco Ameri LeÃ³n', '', '', '', 'S', 'franco_ameri'),
(16, '1697226100508287', 'Sebastian Meza', '', '', '', 'M', 'sebastian_meza'),
(17, '706495002788074', 'Stefano Carabin', '', '', '', 'M', 'stefano_carabin'),
(18, '1724891331072462', 'Rodrigo Pineda Garcia', '', '', '', 'M', 'rodrigo_pineda'),
(19, '895598247183769', 'Flavio Renato Becerra Rojas', '', '', '', 'S', 'flavio_becerra'),
(20, '986011581462682', 'Rodrigo MontaÃ±ez E', '', '', '', 'S', 'rodrigo_montanez'),
(21, '887546917966391', 'Angelo Piero Puccio Armestar', '', '', '', 'XL', 'angelo_puccio'),
(22, '1649925555289719', 'Alvaro RodrÃ­guez', '', '', '', 'S', 'alvaro_rodriguez'),
(23, '802834703172575', 'Rodrigo Rojas', '', '', '', 'S', 'rodrigo_rojas'),
(24, '880361628717998', 'Rodrigo Ochoa SantivaÃ±es', '', '', '', 'S', 'rodrigo_ochoa'),
(25, '1148076298541402', 'Diego Alonso Vega Otiniano', '', '', '', 'M', 'diego_vega'),
(26, '1198597713500245', 'Jorge Godos Ortiz', '', '', '', 'S', 'jorge_godos'),
(27, '843346109118877', 'Jorge Alonso Paez Malarin', '', '', '', 'L', 'alonso_paez'),
(28, '869508386448522', 'Mauricio Rivera', '', '', '', 'M', 'mauricio_rivera'),
(29, '437145609825563', 'Patricio Figueroa', '', '', '', '14', 'patricio_figueroa'),
(30, '927922517275379', 'Jose Carlos DÃ¡vila Zegarra', '', '', '', 'XS', 'jose_davila'),
(31, '765495860262334', 'Jaime Jimenez', '', '', '', 'L', 'jaime_jimenez'),
(32, '1060971077260758', 'William Frederick Pichling Rojas', '', '', '', 'XL', 'william_pichling');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jrcp_registro`
--
ALTER TABLE `jrcp_registro`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `facebook_id` (`facebook_id`), ADD UNIQUE KEY `facebook_id_2` (`facebook_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jrcp_registro`
--
ALTER TABLE `jrcp_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
