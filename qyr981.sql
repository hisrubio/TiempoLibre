-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-11-2017 a las 08:06:25
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qyr981`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `idActividad` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objetivos` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `actividad` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idUsuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`idActividad`, `titulo`, `objetivos`, `actividad`, `imagen`, `idUsuario`) VALUES
(12, 'Actividad tutorial', 'Aqui aparecen los objetivos rellenados con anterioridad en su correspondiente apartado y ademas en la tarjeta de la actividad en el inicio', 'En este apartado describiremos de manera extensa e intentando que sea facil de entender para todo el mundo ya que la finalidad de esta pagina web a parte de recoger una base de datos con muchas actividades y que podamos hacernos el trabajo o voluntariado mas sencillo los unos a los otros, es que podamos mejorar y ser lo mas eficientes posibles', 'images/page-1_img3.jpg', 'Jorgete'),
(13, 'RamÃ³n el ladrÃ³n', 'Estimular la memoria de los niÃ±os.', 'Material: objetos variados y papel y bolÃ­grafo para cada jugador.\r\nDuraciÃ³n: media hora\r\nSe dejan todos los objetos en la habitaciÃ³n mÃ­nimo 20 objetos. Se deja que los jugadores observen durante 4-5 minutos para que memoricen.\r\nSalen de la habitaciÃ³n y el monitor o monitores cambian de posiciÃ³n algunos objetos y quita otros. Vuelven a entrar los jugadores.\r\nAhora tienen que escribir los objetos que han cambiado de posiciÃ³n y los que han desaparecido. La puntuaciÃ³n es la siguiente:\r\nAcierto en objeto movido: 1 punto\r\nAcierto en objeto quitado: 3 puntos\r\nFallo en objeto movido o quitado: -2 puntos\r\nGana el jugador con mas puntos de la ronda.', 'images/page-1_img3.jpg', 'Elisa'),
(14, 'La ley de la selva ', '- Vivir con alegrÃ­a lo que implica la Hermandad Scout. \r\n- Valorar la oportunidad de vivir un encuentro nacional.\r\n- Reconocer el ser scout como elemento de cohesiÃ³n\r\nenriqueciÃ©ndonos de la diversidad. \r\n  ', 'Para realizar esta actividad nos sentaremos en el suelo, en cÃ­rculo por seisenas. En este taller los \r\nniÃ±os deben de realizar con arcilla blanca algo que ellos identifiquen como sÃ­mbolo de  la hermandad\r\nscout. \r\n\r\nEs un momento de imaginaciÃ³n y trabajo en equipo, pueden aportarse ideas, sugerencias, recursosâ€¦\r\nPueden utilizar todos los recursos y herramientas que encuentren. Al trabajar el valor de la\r\nhermandad es interesante que los lobatos busquen una finalidad a su manualidad, regalarla,\r\nintercambiarla, formar algo entre todos. Dejaremos que creen a su antojo. \r\n\r\nDurante la actividad se debe interactuar con la seisena para que nos cuenten que estÃ¡n realizando,\r\nque representa y que harÃ¡n con la manualidad.', 'images/page-1_img3.jpg', 'paula'),
(15, 'Â¿QuiÃ©n soy?', 'Fomentar la convivencia, hacer que los niÃ±os se relacionen unos con otros.', 'Escribe nombres de animales como vaca, leÃ³n y perro en muchas fichas. Haz que los niÃ±os se sienten alrededor de la mesa y coloca las cartas boca abajo en el medio. Un jugador debe pegar una ficha en su frente con la palabra al frente. Sin embargo, asegÃºrate de que el jugador no vea la palabra. El jugador puede hacer 10 preguntas de sÃ­ o no a los jugadores alrededor de la mesa. Si el jugador adivina el animal correctamente, Ã©l o ella obtiene un punto. Repite hasta que un jugador obtenga cinco puntos para ganar. Para otro juego, divide a los jugadores en equipos y utiliza las mismas cartas para jugar charada. Los jugadores tienen un minuto para representar al animal, si su equipo adivina correctamente ganan un punto. El primer equipo que obtenga cinco puntos gana el juego.', 'images/page-1_img3.jpg', 'Elisa'),
(16, 'Pueblo duerme', 'Fomentar las relaciones sociales entre los niÃ±os asÃ­ como el compaÃ±erismo y que se conozcan entre ellos y conozcan sus nombres.', 'Todos los niÃ±os se sientan en cÃ­rculo y cierran los ojos. Se elige a uno para que sea el jefe, el cual estarÃ¡ de pie y con los ojos abiertos y darÃ¡ un toque en la espalda a un niÃ±o y dos toques a otro niÃ±o diferente. \r\nAl que ha dado un toque serÃ¡ asesino y al que ha dado dos toques serÃ¡ cupido.\r\nEl niÃ±o â€œjefeâ€ se encarga de decir:\r\n-â€œAsesino despiertaâ€ y el niÃ±o al que ha dado un toque abrirÃ¡ los ojos y seÃ±alarÃ¡ a uno (lo matarÃ¡) tras ello dirÃ¡ el jefe â€œasesino duermeâ€\r\n-â€œCupido despiertaâ€ y el niÃ±o al que ha dado dos toques abrirÃ¡ lo ojos y dirÃ¡ el jefe â€œcupido enamoraâ€ y el niÃ±o seÃ±alarÃ¡ a otros dos para enamorarlos. Tras ello el jefe dirÃ¡ â€œcupido duermeâ€ \r\nDespuÃ©s de todo esto el jefe dice â€œpueblo despiertaâ€ y todos los niÃ±os tienen que adivinar quien es el asesino y quien es cupido despuÃ©s de que el jefe haya dicho quiÃ©n ha muerto y quienes estÃ¡n enamorados.\r\nLa siguiente partida se elige otro jefe y asÃ­ sucesivamente.', 'images/page-1_img3.jpg', 'Alba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_categoria`
--

CREATE TABLE `actividad_categoria` (
  `idActividad` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Union de las tablas actividades con categorias';

--
-- Volcado de datos para la tabla `actividad_categoria`
--

INSERT INTO `actividad_categoria` (`idActividad`, `idCategoria`) VALUES
(16, 1),
(13, 2),
(14, 2),
(12, 3),
(16, 7),
(12, 8),
(13, 8),
(14, 8),
(16, 8),
(15, 9),
(13, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `categoria`) VALUES
(1, 'Exterior'),
(2, 'Interior'),
(3, 'Dinamica'),
(4, 'Con balon'),
(7, 'Edad: <8'),
(8, 'Edad: 8-11'),
(9, 'Edad: 11-14'),
(10, 'Edad: 14-17'),
(11, 'Edad: 17-20'),
(12, 'Edad: >20'),
(14, 'Gynkana'),
(15, 'Juego pistas'),
(16, 'De reflexion'),
(17, 'Razonar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `comentario` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `idUsuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idActividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `comentario`, `idUsuario`, `idActividad`) VALUES
(1, 'hola\r\n', 'juanjo', 8),
(2, 'hola', 'juanjo', 1),
(3, 'La idea de estos comentarios es expresar como ha funcionado la actividad y dar ideas de posibles mejoras, pero que fluya la imaginaciÃ³n y todos amigos', 'Jorgete', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecNac` date NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `correo`, `fecNac`, `password`) VALUES
('Admin', 'Miguel Rubio', 'miguelRubio@gmail.com', '2017-11-13', 'admin'),
('Alba', 'Alba Melic', 'lorenyalba@hotmail.com', '1996-08-04', '10102014'),
('Elisa', 'Bravo', 'tropatxangale@gmail.com', '1994-07-05', 'q6k9dp'),
('Jorgete', 'Jorge Pimpinela', 'jorgepimpinela8@gmail.com', '2017-11-14', 'jorge165'),
('paula', 'Paula Martinez Gomez', 'paula_zgz1996@hotmail.com', '1996-04-07', 'paumola');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `actividad_categoria`
--
ALTER TABLE `actividad_categoria`
  ADD PRIMARY KEY (`idActividad`,`idCategoria`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_categoria`
--
ALTER TABLE `actividad_categoria`
  ADD CONSTRAINT `actividad_categoria_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_categoria_ibfk_2` FOREIGN KEY (`idActividad`) REFERENCES `actividades` (`idActividad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
