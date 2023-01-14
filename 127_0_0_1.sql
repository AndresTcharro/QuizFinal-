-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 14:36:32
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `online_quiz`
--
CREATE DATABASE IF NOT EXISTS `online_quiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `online_quiz`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `exam_time_in_minutes` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(6, 'futbolMin', '5'),
(10, 'futbolMax', '5'),
(12, 'baloncesto', '6'),
(14, 'karate', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `question` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `opt1` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `opt2` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `opt3` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `opt4` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `answer` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(1, '1', 'Mejor jugador de la historia ', 'Messi', 'Ronaldo', 'Pele', 'M', '', 'futbolMin'),
(2, '2', 'Mejor entrenador ', 'Guardiola', 'Xavi', 'Pelegrini', 'Pelegrini', 'XaVI', 'futbolMin'),
(3, '3', '1+1=', '7', '4', '8', '2', '2', 'futbolMin'),
(11, '4', '', 'opt_images/a0c01bce1836ada148fb68266e46abef4.png', 'opt_images/6cd5a37452f949a640f30903f8bc83ef2.png', 'opt_images/2bd4dbb9fb80ee8235463d2d96000c223.png', 'opt_images/6cd5a37452f949a640f30903f8bc83ef1.png', 'opt_images/6cd5a37452f949a640f30903f8bc83ef1.png', 'futbolMin'),
(12, '5', 'test2', '', 'opt_images/8e73fea230ce0cf27d801c230b09a96e1.png', 'opt_images/8e73fea230ce0cf27d801c230b09a96e4.png', 'opt_images/8e73fea230ce0cf27d801c230b09a96e3.png', 'opt_images/8e73fea230ce0cf27d801c230b09a96e4.png', 'futbolMin'),
(13, '6', 'test5', 'opt_images/2e1e8c71450fa074352019850666c601DiagramaMoodle.png', 'opt_images/2e1e8c71450fa074352019850666c601diagramaUMLnetbenas.png', 'opt_images/2e1e8c71450fa074352019850666c601empleadosUML.png', 'opt_images/2e1e8c71450fa074352019850666c601javadoc.png', 'opt_images/2e1e8c71450fa074352019850666c601moodle.png', 'futbolMin'),
(15, '2', '', 'opt_images/d508f3115d1483eaa4c9ecf6a3edb4401.png', 'opt_images/d508f3115d1483eaa4c9ecf6a3edb4402.png', 'opt_images/d508f3115d1483eaa4c9ecf6a3edb4403.png', 'opt_images/200acf598b430f88bf34e34d7694da202.png', 'opt_images/d508f3115d1483eaa4c9ecf6a3edb4402.png', 'karate'),
(16, '3', '', 'opt_images/1be00780eb9b9e6e10af23e2898e4dd12.png', 'opt_images/1be00780eb9b9e6e10af23e2898e4dd11.png', 'opt_images/1be00780eb9b9e6e10af23e2898e4dd13.png', 'opt_images/e81ab961598a4c6e26c6026741b962ae1.png', 'opt_images/1be00780eb9b9e6e10af23e2898e4dd14.png', 'karate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registration`
--

INSERT INTO `registration` (`id`, `nombre`, `apellido`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Juan', 'Gomez', 'Juango', '', 'juan@gmail.com', '695040750'),
(2, 'andres', 'charro', 'andy', '6950', 'andrestupiza@gmail.com', '655938492'),
(3, 'Juan', 'charro', 'juancho', '1234', 'juan@gmail.com', '695040750');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
