-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2020 a las 16:08:52
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

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
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `tituloLibro` varchar(50) NOT NULL,
  `descripcionLibro` text NOT NULL,
  `autorLibro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `tituloLibro`, `descripcionLibro`, `autorLibro`) VALUES
(47, 'Historia de dos ciudades', 'Esta novela del escritor británico Charles Dickens ha vendido más de 200 millones de copias. La novela se sitúa en la época de la Revolución Francesa, entre dos ciudades: Londres y París. El autor es muy crítico con las instituciones del victorianismo, aunque la novela se aleja de cualquier debate político o filosófico sobre la revolución debido a la indiferencia y el desprecio hacia los políticos por parte del autor.', 'Charles Dickens'),
(48, '7 hábitos de la gente altamente efectiva', 'Este libro de Stephen R. Covey es una de las referencias del mundo empresarial. En sus hojas se repasan las costumbres más destacadas de las personas que resultan altamente efectivas en su día a día.', 'Stephen R. Covey'),
(49, 'Lo que el viento se llevó', 'Este libro de Margaret Mitchell es uno de los más vendidos de la historia y fue llevado al cine debido a su gran éxito. La historia transcurre durante la Guerra de Sucesión de Estados Unidos y narra la historia de amor y las experiencias de la postguerra de Scarlett O´Hara, así como las dificultades propias de la época.', 'Margaret Mitchell'),
(50, ' El nombre de la rosa', 'Esta magnífica novela del recientemente fallecido Umberto Eco mezcla tanto la novela gótica y policiaca como la crónica medieval, y se centra en las actividades detectivescas de Guillermo de Baskerville para aclarar los asesinatos cometidos en una abadía benedictina en el año 1327.', 'Umberto Eco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
