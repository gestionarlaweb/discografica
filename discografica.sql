-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2018 a las 15:26:25
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `discografica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Shakira', 'Cantautora, productora discográfica, bailarina, modelo, empresaria, actriz y embajadora de buena voluntad de la UNICEF y filántropa colombiana, ha sido nombrada varias veces por Sony y Billboard con el sobrenombre de La Reina del pop latino.'),
(2, 'Bruce Springsteen', 'Cantante, músico y compositor estadounidense. Apodado a menudo The Boss —en español: El jefe—, Springsteen es ampliamente conocido por su trabajo con el grupo The E Street Band y considerado uno de los artistas más exitosos de la música rock, con ventas que superan los 64,5 millones de álbumes en los Estados Unidos y más de 120 millones a nivel mundial,4​5​ y un total de diez discos números uno, un registro solo superado por The Beatles y Jay-Z'),
(3, 'Madonna', 'Cantante, compositora, actriz y empresaria estadounidense. Pasó sus primeros años en Bay City y en 1977 se mudó a la ciudad de Nueva York para realizar una carrera de danza contemporánea'),
(4, 'Michael Jackson', 'Fue un cantante, compositor, productor discográfico, bailarín, actor y filántropo estadounidense.2​3​4​ Conocido como el «Rey del Pop»,5​ sus contribuciones y reconocimiento en la historia de la música y el baile, así como su publicitada vida personal, lo convirtieron en una figura internacional en la cultura popular durante más de cuatro décadas.'),
(5, 'David Bowie', 'Más conocido por su nombre artístico David Bowie (AFI: [ˈboʊ.iː]),8​ fue un músico y compositor británico de rock, quien ejerció a su vez de actor, productor discográfico y arreglista. Figura importante de la música popular durante casi cinco décadas, Bowie es considerado un innovador, en particular por sus trabajos de la década de 1970 y por su peculiar voz, además de la profundidad intelectual de su obra.'),
(6, 'Bob Dylan', 'Registrado al nacer como Robert Allen Zimmerman (en hebreo: שבתאי זיסל בן אברהם, Shabtai Zisl ben Avraham), es un músico, compositor, cantante y poeta estadounidense, ampliamente considerado como una de las figuras más prolíficas e influyentes en la música popular del siglo XX y de comienzos del siglo XXI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lp`
--

CREATE TABLE `lp` (
  `id` int(11) NOT NULL,
  `id_artista` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lp`
--

INSERT INTO `lp` (`id`, `id_artista`, `nombre`, `descripcion`) VALUES
(1, 1, 'Pies descalzos', 'En 1995, el sello discográfico decide lanzar al mercado un disco de éxitos de artistas colombianos. Es así como piensan en Shakira y le comentan que incluirán una canción de alguno de sus trabajos discográficos anteriores, Magia y Peligro, a lo que Shakira se niega y ofrece componer una canción especialmente para dicho disco recopilatorio. Es así como nace «¿Dónde estás corazón?», convirtiéndose en un éxito solicitado en las radios. La canción también comenzó a escucharse fuera de su Colombia natal.'),
(2, 2, 'Born to Run', 'El 13 de agosto de 1975, Springsteen y la E Street Band dieron comienzo a diez conciertos en cinco noches en el club Bottom Line de Nueva York. Los conciertos atrajeron a los medios de comunicación, siendo retransmitidos por WNEW-FM y sirviendo a muchos escépticos como prueba de las críticas musicales favorables. (Décadas después, la revista musical Rolling Stone definió los conciertos como uno de los 50 momentos que cambiaron el rock and roll.25​) Con la publicación de Born to Run el 25 de agosto de 1975, Springsteen obtuvo finalmente éxito. A pesar de no producir sencillos de especial éxito, las canciones «Born to Run», «Thunder Road», «Tenth Avenue Freeze-Out» y «Jungleland» fueron promocionadas de forma masiva en cadenas de radio norteamericanas. Con sus imágenes panorámicas y su optimismo lírico, buena parte de sus seguidores consideran Born to Run uno de los mejores trabajos de Springsteen con la E-Street Band. Para capitalizar el triunfo, Springsteen apareció en la portada de las revistas Time y Newsweek en la misma semana, el 27 de octubre'),
(3, 6, 'Bob Dylan', 'Primer álbum de estudio del músico estadounidense.'),
(4, 6, 'The Freewheelin\' Bob Dylan', 'Segundo álbum de estudio del músico estadounidense Bob Dylan, publicado por la compañía discográfica Columbia Records en mayo de 1963. Tras empezar su carrera versionando y adaptando temas tradicionales de su país, The Freewheelin\' supuso el comienzo de la carrera compositiva de Dylan al presentar once composiciones propias'),
(5, 4, 'The Wiz', 'En el año 1975 la obra obtuvo un total de siete Premios Tony incluyendo Mejor Musical'),
(6, 4, 'Moonwalker', 'Moonwalker, también conocida como Michael Jackson: Moonwalker, es una película del género de antología musical del artista estadounidense Michael Jackson, lanzada en octubre de 1988.'),
(7, 4, 'Invincible', 'Décimo primer y último álbum de estudio en vida de Michael Jackson lanzado el 30 de octubre de 2001.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'davidrabassa@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lp`
--
ALTER TABLE `lp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lp`
--
ALTER TABLE `lp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
