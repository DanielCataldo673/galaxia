-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2024 a las 12:22:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `star_wars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id` int(11) NOT NULL,
  `nombre` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id`, `nombre`) VALUES
(1, 'Humano'),
(2, 'Yoda\\\'s species'),
(3, 'Zabrak'),
(4, 'Droide'),
(5, 'Togruta'),
(6, 'Wookiee'),
(7, 'Twi\'lek '),
(8, 'Hutt  '),
(9, 'Mon Calamari'),
(10, 'Ewok  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_sables`
--

CREATE TABLE `nombre_sables` (
  `id` int(11) NOT NULL,
  `nombre` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nombre_sables`
--

INSERT INTO `nombre_sables` (`id`, `nombre`) VALUES
(1, 'Sable de Luz Roja'),
(2, 'Sable de Luz Azul'),
(3, 'Sable de Luz Verde'),
(4, 'Sable de Luz Morada'),
(5, 'Sable de Luz Amarilla'),
(6, 'Sable de Luz Negro (Darksaber)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `estreno` int(11) NOT NULL,
  `duracion` varchar(100) NOT NULL,
  `recaudacion` varchar(100) NOT NULL,
  `personajes_principales` text NOT NULL,
  `reparto` text NOT NULL,
  `director` varchar(100) NOT NULL,
  `produccion` varchar(100) NOT NULL,
  `guion` varchar(100) NOT NULL,
  `musica` varchar(100) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `montaje` varchar(100) NOT NULL,
  `vestuario` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `curiosidades` text NOT NULL,
  `imagen_uno` varchar(100) NOT NULL,
  `imagen_dos` varchar(100) NOT NULL,
  `titulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `estreno`, `duracion`, `recaudacion`, `personajes_principales`, `reparto`, `director`, `produccion`, `guion`, `musica`, `fotografia`, `montaje`, `vestuario`, `sinopsis`, `curiosidades`, `imagen_uno`, `imagen_dos`, `titulo_id`) VALUES
(1, 1999, ' 136 minutos', 'US$1,021 millones (aproximadamente)', 'Qui-Gon Jinn,\r\nObi-Wan Kenobi,\r\nAnakin Skywalker,\r\nPadmé Amidala,\r\nJar Jar Binks.', 'Liam Neeson (Qui-Gon Jinn),\r\nEwan McGregor (Obi-Wan Kenobi),\r\nJake Lloyd (Anakin Skywalker),\r\nNatalie Portman (Padmé Amidala),\r\nAhmed Best (Jar Jar Binks).', 'George Lucas', 'Lucasfilm', 'George Lucas', 'John Williams', 'David Tattersall', 'Paul Hirsch', 'Trisha Biggar', 'Un Jedi maestro, Qui-Gon Jinn, y su aprendiz, Obi-Wan Kenobi, intentan mediar en un conflicto entre la\r\n                Federación de Comercio y el planeta Naboo. Su misión se complica cuando descubren al joven Anakin\r\n                Skywalker,a quien creen que es el Elegido que traerá equilibrio a la Fuerza.', 'Fue la primera película de Star Wars en 16 años; Jar Jar Binks fue uno de los personajes más\r\n                controvertidos, recibiendo opiniones mixtas de los fans.', 'epi1.webp', 'epi11.jpg', 1),
(2, 2002, '142 minutos', 'US$653 millones (aproximadamente)', 'Anakin Skywalker,\r\nPadmé Amidala,\r\nObi-Wan Kenobi,\r\nJango Fett,\r\nYoda.', 'Hayden Christensen (Anakin Skywalker),\r\nNatalie Portman (Padmé Amidala),       Ewan McGregor (Obi-Wan Kenobi),\r\nTemuera Morrison (Jango Fett),\r\nFrank Oz (Yoda).', 'George Lucas', 'Lucasfilm', 'George Lucas y Jonathan Hales', 'John Williams', 'David Tattersall', 'Ben Burtt y Roger Barton', 'Trisha Biggar', 'A medida que la galaxia se precipita hacia la guerra, Anakin Skywalker y Padmé Amidala se ven envueltos\r\n                en un romance prohibido, mientras Obi-Wan Kenobi investiga un intento de asesinato que revela una\r\n                conspiración mayor.', 'La película fue la primera en utilizar un 100% de CGI (técnica de imágenes generadas por ordenador) en\r\n                algunos entornos.', 'epi2.webp', 'epi12.webp', 2),
(3, 2005, '140 minutos', 'US$868 millones (aproximadamente)', 'Anakin Skywalker,\r\nPadmé Amidala,\r\nObi-Wan Kenobi,\r\nPalpatine,\r\nYoda.', 'Hayden Christensen (Anakin Skywalker),\r\nNatalie Portman (Padmé Amidala),\r\nEwan McGregor (Obi-Wan Kenobi),\r\nIan McDiarmid (Palpatine),\r\nFrank Oz (Yoda).', 'George Lucas', 'Lucasfilm', ' George Lucas', 'John Williams', 'Mr. Gregory Smith', 'Roger Barton y Niven Howie', 'Trisha Biggar', 'La galaxia está en guerra. Anakin Skywalker, en su lucha por salvar a Padmé Amidala, se deja seducir por\r\n                el lado oscuro y se convierte en Darth Vader, mientras los Jedi son traicionados y exterminados.', 'La transformación de Anakin en Darth Vader es uno de los momentos más icónicos de la saga.', 'epi3.webp', 'epi13.webp', 3),
(4, 1977, '121 minutos', ' US$775 millones (aproximadamente en reestrenos)', 'Luke Skywalker,\r\nHan Solo,\r\nLeia Organa,\r\nDarth Vader,\r\nObi-Wan Kenobi.', 'Mark Hamill (Luke Skywalker),\r\nHarrison Ford (Han Solo),\r\nCarrie Fisher (Leia Organa),\r\nAlec Guinness (Obi-Wan Kenobi),\r\nDavid Prowse (Darth Vader, voz de James Earl Jones).', 'George Lucas', 'Lucasfilm', 'George Lucas', 'John Williams', 'Gilbert Taylor', 'Marcia Lucas', 'John Mollo', 'Un joven granjero, Luke Skywalker, se une a la Rebelión para derrotar al Imperio Galáctico y rescatar a\r\n                la Princesa Leia de las garras de Darth Vader, mientras aprende sobre la Fuerza con Obi-Wan Kenobi.', 'Fue la primera película en utilizar efectos especiales innovadores y ganó 6 Premios de la Academia.', 'epi4.webp', 'epi14.jpg', 4),
(5, 1980, '124 minutos', 'US$538 millones (aproximadamente)', 'Luke Skywalker,\r\nHan Solo,\r\nLeia Organa,\r\nDarth Vader,\r\nYoda.', 'Mark Hamill (Luke Skywalker),\r\nHarrison Ford (Han Solo),\r\nCarrie Fisher (Leia Organa),\r\nFrank Oz (Yoda),\r\nDavid Prowse y James Earl Jones (Darth Vader).', 'Irvin Kershner', 'Lucasfilm', 'Leigh Brackett y Lawrence Kasdan', 'John Williams', 'Peter Suschitzky', 'Paul Hirsch, Marcia Lucas y Richard Chew', 'John Mollo', 'La Rebelión sufre grandes pérdidas ante el Imperio, mientras Luke Skywalker entrena con Yoda para\r\n                convertirse en Jedi, y Han y Leia enfrentan su propio viaje de amor y odio.', 'Contiene la famosa revelación de que Darth Vader es el padre de Luke Skywalker.', 'epi5.webp', 'epi15.webp', 5),
(6, 1983, '132 minutos', 'US$475 millones (aproximadamente)', 'Luke Skywalker,\r\nLeia Organa,\r\nHan Solo,\r\nDarth Vader,\r\nPalpatine.', 'Mark Hamill (Luke Skywalker),\r\nCarrie Fisher (Leia Organa),\r\nHarrison Ford (Han Solo),\r\nIan McDiarmid (Palpatine),\r\nDavid Prowse y James Earl Jones (Darth Vader).', 'Richard Marquand', 'Lucasfilm', 'Lawrence Kasdan y George Lucas', 'John Williams', 'Daniel Mindel', 'Maryann Brandon, George Lucas y Richard Chew', 'Stuart Freeborn', 'Luke Skywalker regresa para enfrentar a Darth Vader y el Emperador en una batalla final por la\r\n                libertad de la galaxia, mientras la Rebelión lucha contra la nueva Estrella de la Muerte.', 'Presentó a los Ewoks, que se convirtieron en íconos de la cultura pop.', 'epi6.webp', 'epi16.webp', 6),
(7, 2015, '138 minutos', 'US$2,068 millones (aproximadamente)', 'Rey,\r\nFinn,\r\nPoe Dameron,\r\nKylo Ren,\r\nHan Solo.', 'Daisy Ridley (Rey),\r\nJohn Boyega (Finn),\r\nOscar Isaac (Poe Dameron),\r\nAdam Driver (Kylo Ren),\r\nHarrison Ford (Han Solo).', 'J.J. Abrams', 'Lucasfilm', 'J.J. Abrams y Lawrence Kasdan', 'John Williams', 'Dan Mindel', 'Maryann Brandon', 'Michael Kaplan', 'La galaxia enfrenta una nueva amenaza con la llegada de la Primera Orden, mientras una nueva\r\n                heroína, Rey, busca a Luke Skywalker y se enfrenta a Kylo Ren, el oscuro líder de la Primera Orden.', 'Fue la primera película de la saga bajo la dirección de Disney y obtuvo gran aclamación de\r\n                los críticos y fans.', 'epi7.webp', 'epi17.jpg', 7),
(8, 2017, '152 minutos', 'US$1,332 millones (aproximadamente)', 'Rey,\r\nFinn,\r\nPoe Dameron,\r\nKylo Ren,\r\nLeia Organa.', 'Daisy Ridley (Rey),\r\nJohn Boyega (Finn),\r\nOscar Isaac (Poe Dameron),\r\nAdam Driver (Kylo Ren),\r\nCarrie Fisher (Leia Organa).', 'Rian Johnson', 'Lucasfilm', 'Rian Johnson', 'John Williams', 'Steve Yedlin', 'Bob Ducsay', 'Michael Kaplan', 'Rey continúa su formación como Jedi bajo la guía de Luke Skywalker, mientras la Resistencia es\r\n                perseguida por la Primera Orden en una carrera contra el tiempo.', 'La película fue muy divisiva entre los fans, generando debates intensos sobre su trama y desarrollo de\r\n                personajes.', 'epi8.webp', 'epi18.webp', 8),
(9, 2019, '142 minutos', 'US$1,074 millones (aproximadamente)', 'Rey,\r\nFinn,\r\nPoe Dameron,\r\nKylo Ren,\r\nPalpatine.', 'Daisy Ridley (Rey),\r\nJohn Boyega (Finn),\r\nOscar Isaac (Poe Dameron),\r\nAdam Driver (Kylo Ren),\r\nIan McDiarmid (Palpatine),\r\nCarrie Fisher (Leia Organa) - utilizando material de archivo.', 'J.J. Abrams', 'Lucasfilm', 'J.J. Abrams y Chris Terrio', 'John Williams', 'Dan Mindel', 'Maryann Brandon', 'Michael Kaplan', 'La Resistencia lucha por la libertad de la galaxia mientras Rey enfrenta su pasado y la amenaza de\r\n                Palpatine, quien ha regresado para intentar conquistar nuevamente la galaxia. Junto a sus amigos, Rey\r\n                descubre la verdad sobre su identidad y su conexión con la Fuerza.', 'Fue el cierre de la saga Skywalker y tuvo un enfoque en tratar de reconciliar aspectos de las películas\r\n                anteriores, aunque recibió críticas mixtas por su narrativa.', 'epi9.webp', 'epi19.jpg', 9),
(10, 2016, '133 minutos', 'US$1.056 millones a nivel mundial.', 'Jyn Erso,\r\nCassian Andor,\r\nK-2SO,\r\nChirrut Îmwe,\r\nBaze Malbus,\r\nOrson Krennic,\r\nBodhi Rook.', 'Felicity Jones como Jyn Erso,\r\nDiego Luna como Cassian Andor,\r\nAlan Tudyk como K-2SO,\r\nDonnie Yen como Chirrut Îmwe,\r\nJian Yang como Baze Malbus,\r\nBen Mendelsohn como Orson Krennic,\r\nRiz Ahmed como Bodhi Rook,\r\nForest Whitaker como Saw Guerrera,\r\nMads Mikkelsen como Galen Erso.', 'Gareth Edwards', 'Kathleen Kennedy, Allison Shearmur, Simon Emanuel.', 'Chris Weitz, Tony Gilroy.', 'Michael Giacchino.', 'Greig Fraser', 'John Gilroy, Colleen Halsey, Jodie K. Williams.', 'Glyn Dillon.', ' \"Rogue One\" se sitúa en el contexto de la saga de Star Wars y se centra en un grupo de rebeldes que\r\n                intentan robar los planos de la primera Estrella de la Muerte, la superarma del Imperio Galáctico. Jyn\r\n                Erso, la hija de un científico que fue obligado a trabajar en la construcción de la estación, se une a\r\n                un pequeño grupo de rebeldes liderado por Cassian Andor. Al enfrentarse a fuerzas imperiales y sus\r\n                propios miedos, este equipo poco convencional se embarca en una misión que podría cambiar el rumbo de la\r\n                galaxia.', 'Es la primera película de la saga en ser un spin-off. La actriz Felicity Jones, quien interpreta a Jyn Erso, trabajó con un equipo de creativos para desarrollar su personaje. ¡Primera película sin el logo de Lucasfilm al inicio!\r\n\r\n', 'rouge.webp', 'epi20.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `afiliacion` varchar(100) NOT NULL,
  `planeta _ natal` varchar(100) NOT NULL,
  `habilidades` varchar(100) NOT NULL,
  `arma` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `imagen_uno` varchar(100) NOT NULL,
  `imagen_dos` varchar(100) NOT NULL,
  `especie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `descripcion`, `afiliacion`, `planeta _ natal`, `habilidades`, `arma`, `actor`, `imagen_uno`, `imagen_dos`, `especie_id`) VALUES
(1, 'Darth Vader', 'Darth Vader, antes conocido como Anakin Skywalker, fue un Jedi prodigioso que sucumbió al lado oscuro de la Fuerza. Como aprendiz del Emperador Palpatine, se convirtió en uno de los más temidos señores Sith de la galaxia. A pesar de su caída, la redención de Vader llegó a través de su hijo, Luke, a quien ayudó a destruir al Emperador antes de morir, cumpliendo la profecía que lo había destinado a traer equilibrio a la Fuerza.', 'Imperio Galáctico', 'Tatooine', 'Combate con sable de luz', 'Sable de luz', 'James Earl Jones', 'dark6.webp', 'dark6-fotor-bg-remover-20240911103438.png', 1),
(2, 'Yoda', 'Yoda es uno de los maestros Jedi más sabios y poderosos en la historia de la Orden Jedi. Durante siglos, Yoda formó a generaciones de Jedi en el uso de la Fuerza, y fue una figura central en los acontecimientos que llevaron a la caída de la República y la ascensión del Imperio. Aunque pequeño en tamaño, Yoda es temido por sus enemigos y respetado por sus aliados por su dominio de la Fuerza y su habilidad en el combate con sable de luz.', 'Orden Jedi', 'Desconocido', 'Uso de la Fuerza', 'Sable de luz', 'Frank Oz', 'yoda.webp', 'Yoda-fotor-bg-remover-20240911104135.png', 2),
(3, 'Darth Maul', 'Darth Maul fue el primer aprendiz de Darth Sidious y uno de los guerreros Sith más temidos de la galaxia. Con su característico sable de luz doble y su dominio del combate, Maul casi destruyó a la Orden Jedi al asesinar al Maestro Qui-Gon Jinn. Aunque se creyó que había muerto, Maul sobrevivió a su derrota y continuó sembrando el caos en la galaxia, persiguiendo venganza contra Obi-Wan Kenobi y los Jedi.', 'Imperio Galáctico', 'Dathomir', 'Combate con sable de luz', 'Sable de luz', 'Ray Park ', 'dark-maul.jpg', 'dark-maul-fotor-bg-remover-20240911112150.png', 3),
(4, 'Palpatine', 'Palpatine, también conocido como Darth Sidious, es un poderoso Sith y una figura clave en la saga de Star Wars. Desde su posición como Senador de Naboo, manipula eventos políticos para alcanzar el poder total, convirtiéndose en Canciller y finalmente en Emperador. Su astucia y habilidades en la Fuerza le permiten manipular a otros, creando el Imperio Galáctico y exterminando a los Jedi.', 'Imperio Galáctico', 'Naboo', 'Maestría en la Fuerza, manipulación, estrategia política.', 'Sable de luz', 'Ian McDiarmid', 'emperador.jpg', 'Emperor_Palpatine_GA-fotor-bg-remover-20240911161957.png', 1),
(5, 'C-3PO', 'C-3PO es un droide de protocolo especializado en traducción y etiqueta, conocido por su fluidez en más de seis millones de formas de comunicación. Aunque a menudo es visto como nervioso y preocupado, C-3PO ha sido crucial en muchas misiones diplomáticas y de combate. A lo largo de los años, ha acompañado a figuras clave de la Alianza Rebelde y de la resistencia, y ha demostrado ser un miembro invaluable en la lucha por la libertad galáctica.', 'Rebel Alliance', 'Tatooine', 'Protocolo ', 'N/A', 'Anthony Daniels', 'c-3po.jpg', 'c-3po-fotor-bg-remover-20240911111039.png', 4),
(6, 'Luke Skywalker', 'Luke Skywalker es un caballero Jedi legendario que desempeñó un papel fundamental en la derrota del Imperio Galáctico. Nacido como el hijo de Anakin Skywalker y Padmé Amidala, Luke fue criado en el planeta desértico Tatooine. Con el tiempo, se convirtió en un poderoso Jedi bajo la tutela de Obi-Wan Kenobi y Yoda, luchando contra su propio padre, Darth Vader, y el Emperador Palpatine para restaurar la paz en la galaxia.', 'Rebel Alliance', 'Tatooine', 'Uso de la Fuerza', 'Sable de luz', 'Mark Hamill', 'luke.jpg', 'LukeSkywalker-fotor-bg-remover-2024091116553.png', 1),
(7, 'R2-D2', 'R2-D2 es un droide astromecánico altamente ingenioso y valiente que ha sido testigo de muchos de los eventos más importantes en la historia galáctica. Desde servir a la Reina Amidala hasta ayudar en la destrucción de la Estrella de la Muerte, R2-D2 ha demostrado ser un héroe en numerosas ocasiones. Su habilidad para interactuar con sistemas tecnológicos y su lealtad a sus dueños lo han convertido en uno de los droides más confiables de la galaxia.', 'Rebel Alliance', 'Desconocido', 'Reparación de naves', 'N/A', 'Kenny Baker', 'r2-d2-fondo.jpg', 'r2-d2-fotor-bg-remover-20240911164931.png', 4),
(8, 'Leia Organa', 'Leia Organa es la princesa de Alderaan y una líder clave en la Alianza Rebelde. Como hija de Anakin Skywalker y hermana gemela de Luke, Leia es también fuerte en la Fuerza, aunque fue entrenada principalmente como diplomática y estratega. Su valentía y determinación fueron cruciales en la lucha contra el Imperio, y posteriormente, en la resistencia contra la Primera Orden. También es conocida por su espíritu indomable y sus habilidades como comandante.', 'Rebel Alliance', 'Alderaan', 'Diplomacia', 'Blaster', 'Carrie Fisher', 'leia-star-wars-8-1532775543.jpg', 'leia-star-wars-8-1532775543-fotor-bg-remover-2024091117453.png', 1),
(9, 'Han Solo', 'Han Solo es un contrabandista que se unió a la Rebelión tras ser convencido por Luke y Leia. Pilotando el icónico Halcón Milenario junto a su leal compañero Wookiee, Chewbacca, Han jugó un papel vital en la destrucción de la Estrella de la Muerte y en la victoria contra el Imperio. A pesar de su actitud inicialmente cínica, Han demostró ser un héroe con un gran corazón, y eventualmente se convirtió en el esposo de Leia Organa y padre de Ben Solo.', 'Rebel Alliance', 'Corellia', 'Pilotaje', 'Blaster', 'Harrison Ford', 'handsolo.jpg', 'handsolo-fotor-bg-remover-20240911171921.png', 1),
(10, 'Obi-Wan Kenobi', 'Obi-Wan Kenobi es un legendario Maestro Jedi, conocido por su papel en la formación de Anakin Skywalker y posteriormente de su hijo, Luke. Nacido en el planeta Stewjon, Obi-Wan fue un fiel seguidor del Código Jedi, pero también mostró compasión y sabiduría más allá de lo común. Su duelo final con Anakin lo llevó al exilio en Tatooine, donde vigiló a Luke hasta que llegó el momento de entrenarlo en los caminos de la Fuerza.', 'Orden Jedi', 'Stewjon', 'Combate con sable de luz', 'Sable de luz', 'Ewan McGregor', 'obi-wan-kenobi-tv-series.png', 'obi-wan-kenobi-tv-series-fotor-bg-remover-20240911173258.png', 1),
(11, 'Ahsoka Tano', 'Ahsoka Tano fue la aprendiz de Anakin Skywalker, conocida por su espíritu independiente y su habilidad con los sables de luz. Aunque inicialmente comenzó como una joven impulsiva, Ahsoka maduró para convertirse en una formidable guerrera y líder. Después de abandonar la Orden Jedi, Ahsoka continuó luchando por la justicia durante la Guerra Civil Galáctica, y eventualmente se convirtió en una figura clave en la lucha contra el Imperio.', 'Orden Jedi', 'Shili', 'Combate con sable de luz', 'Sable de luz', 'Rosario Dawson', 'AhsokaTano.webp', 'Ahsoka-Tano-AG-2023-fotor-bg-remover-20240911174548.png', 5),
(12, 'Chewbacca', 'Chewbacca, un Wookiee del planeta Kashyyyk, es el fiel copiloto y amigo de Han Solo. Conocido por su gran fuerza física y su lealtad inquebrantable, Chewbacca ha sido un valioso miembro de la Alianza Rebelde, participando en misiones cruciales para la liberación de la galaxia. Aunque no habla el idioma común, su capacidad para entender a sus amigos humanos y su habilidad en combate lo convierten en un aliado invaluable.', 'Rebel Alliance', 'Kashyyyk', 'Pilotaje', 'Ballesta láser', 'Peter Mayhew', 'chewbacca.jpg', 'life-sized-chewbacca-statue-figure-1-fotor-bg-remover-20240911175322.png', 6),
(13, 'Anakin Skywalker', 'Anakin Skywalker, conocido como el Elegido, es un Jedi excepcional que se convierte en el temido Sith, Darth Vader. Su historia es trágica: desde su niñez como esclavo en Tatooine, su entrenamiento con Obi-Wan Kenobi, hasta su caída hacia el lado oscuro, es un viaje de redención y pérdida. Anakin lucha constantemente con su destino y las expectativas que los demás tienen de él.', 'Jedi, luego Imperio Galáctico', 'Tatooine', 'Piloto excepcional, maestro de la Fuerza, combate con sable de luz', 'Sable de luz', 'Hayden Christensen', 'Anakin_Skywalker_RotS.webp', 'anakin44-fotor-bg-remover-202409258543.png', 1),
(14, 'Aayla Secura', 'Aayla Secura es una Jedi Twi\'lek conocida por su valentía y destreza en el combate. Es aprendiz de Ki-Adi-Mundi y se convierte en una destacada líder durante las Guerras Clónicas. Reconocida por su habilidad con el sable de luz y su agilidad, Aayla también tiene un fuerte sentido de la justicia y una profunda conexión con la Fuerza, que utiliza para proteger a los inocentes.', 'Orden Jedi', 'Ryloth', 'Combate con sable de luz, agilidad, conexión con la Fuerza', 'Sable de luz', 'Amy Allen', 'aayla.jpg', 'aayla-fotor-bg-remover-20240924141530.png', 7),
(15, 'Mara Jade Skywalker', 'Mara Jade, una exasesina del Emperador, se convierte en un Jedi y es la esposa de Luke Skywalker. Su historia comienza como la mano del Emperador, pero su vida cambia drásticamente tras la caída del Imperio. Con una fuerte conexión a la Fuerza y habilidades en combate, Mara busca redimirse y convertirse en un símbolo de esperanza, enfrentándose a sus demonios internos y los peligros del pasado.', 'Nueva Orden Jedi', 'Emperor\'s Hand', 'Maestría en la Fuerza, combate, espionaje.', 'Sable de luz', 'Shannon McRandle (videojuegos, cómics, novelas, Ilustrac', 'sw-mara-jade.jpg', 'sw-mara-jade-fotor-bg-remover-20240924142035.png', 1),
(16, 'Mace Windu', 'Mace Windu fue uno de los miembros más destacados del Consejo Jedi, conocido por su sabiduría y habilidad en el combate. Con su característico sable de luz púrpura, Mace fue un maestro espadachín y un líder respetado dentro de la Orden. Fue uno de los pocos Jedi que desafió abiertamente al Canciller Palpatine, lo que lo llevó a un fatídico enfrentamiento que resultó en su muerte y el inicio de la purga Jedi.', 'Orden Jedi', 'Haruun Kal', 'Combate con sable de luz', 'Sable de luz', 'Samuel L. Jackson', 'mace.jpg', 'mace-fotor-bg-remover-20240924143351.png', 1),
(17, 'Jabba el Hutt', 'Jabba el Hutt es un infame gánster del crimen galáctico, conocido por su influyente poder y su repugnante apariencia. Reside en el desierto de Tatooine y controla un vasto imperio criminal, involucrándose en actividades ilegales que van desde el contrabando hasta la esclavitud. Su naturaleza manipuladora y despiadada lo convierte en un formidable adversario. Jabba es un símbolo de la corrupción que alimenta el submundo galáctico.', 'Ninguna (criminal)', 'Nal Hutta', 'Manipulación, estrategia criminal, intimidación', 'Poder político y su propio palacio como fortaleza', 'Declan Mulholland (como la versión original) y el muñeco', 'jabba2.jpg', 'jabba2-fotor-bg-remover-20240924164527.png', 8),
(18, 'Bib Fortuna', 'Bib Fortuna es el asistente y guardaespaldas de Jabba el Hutt, caracterizado por su apariencia de Twi\'lek y su comportamiento servil. Actúa como el enlace entre Jabba y sus subordinados, gestionando el negocio criminal del gánster. Fortuna es astuto y servicial, pero no dudará en traicionar a aquellos que amenacen su posición. Su lealtad a Jabba es inquebrantable, pero siempre busca enriquecerse a sí mismo.', 'Jabba el Hutt', 'Ryloth', 'Manipulación, espionaje', 'Bastón o garrote', 'Matthew Wood', 'big.jpg', 'big-fotor-bg-remover-20240924165314.png', 7),
(19, 'Admiral Ackbar', 'El Almirante Ackbar es un comandante de la Alianza Rebelde, un Mon Calamari conocido por su icónico grito de “¡Es una trampa!” en la batalla de Endor. Su estrategia naval y enfoque táctico lo convierten en una figura de autoridad en la lucha contra el Imperio. Ackbar es un líder carismático y firme que desempeña un papel crucial en los eventos que culminan con la caída del Imperio.', 'Alianza Rebelde', 'Mon Cala', 'Estrategia militar, liderazgo.', 'Pistola bláster', 'Tim Rose (puppet work)', 'admiral.jpg', 'admiral2-fotor-bg-remover-20240924173434.png', 9),
(20, 'Qui-Gon Jinn', 'Qui-Gon Jinn fue un Maestro Jedi no ortodoxo, conocido por su enfoque poco convencional hacia la Fuerza y su creencia en las profecías Jedi. Fue el descubridor de Anakin Skywalker, a quien creyó que era el Elegido destinado a traer equilibrio a la Fuerza. Aunque fue asesinado por Darth Maul, su legado vivió a través de su aprendiz, Obi-Wan Kenobi, y el entrenamiento de Anakin, que influiría en el destino de la galaxia.', 'Orden Jedi', 'Coruscant', 'Combate con sable de luz', 'Sable de luz', 'Liam Neeson', 'QuiGon.jpg', 'qui33-fotor-bg-remover-20240924181242.png', 1),
(21, 'Darth Bane', 'Darth Bane es conocido como el creador de la Regla de Dos, que establece que solo puede haber un Maestro y un aprendiz en la orden Sith. Su ambición lo lleva a derribar el antiguo orden de los Sith tras la derrota ante los Jedi, reformulando la filosofía Sith. Con una gran maestría en la Fuerza y habilidades combativas sobresalientes, Bane busca venganza contra los Jedi y la dominación del lado oscuro.', 'Sith', 'Apatros', 'Maestría en la Fuerza, combate, estrategia.', 'Sable de luz', 'No ha aparecido en películas.', 'darthbane34.jpg', 'darthbane34-fotor-bg-remover-20240924182758.png', 1),
(22, 'Grand Moff Tarkin', 'Wilhuff Tarkin, conocido como Gran Moff Tarkin, es un alto funcionario del Imperio Galáctico y comandante del temido Sable de la Muerte, la estación espacial de batalla. Es famoso por su crueldad y su habilidad táctica, desempeñando un papel fundamental en la destrucción de Alderaan. Su determinación y lealtad al Emperador lo convierten en un temible líder militar, conocido por aplicar el vuelo del terror para mantener el control.', 'Imperio Galáctico', 'Eriadu', 'Estrategia militar, intimidación.', 'Poder político.', 'Peter Cushing', 'grand_moff_tarkin.jpg', 'grand_moff_tarkin-fotor-bg-remover-20240924173858.png', 1),
(23, 'Conde Dooku', 'El Conde Dooku, también conocido como Darth Tyranus, es un antiguo Maestro Jedi que se convierte en un poderoso Lord Sith. Es un líder separatista durante las Guerras Clónicas, buscando poder y justicia de manera destructiva. Su elegante estilo y habilidades en combate lo hacen formidable, al tiempo que maneja la intriga política con astucia. La dualidad de su carácter refleja la tensión entre el bien y el mal.', 'Separatistas, Sith', 'Serenno', 'Maestría en la Fuerza, combate.', 'Sable de luz', 'Christopher Lee', 'dooku.jpg', 'dooku2-fotor-bg-remover-2024092419149.png', 1),
(24, 'Wicket W. Warrick', 'Wicket W. Warrick es un Ewok valiente y aventurero, conocido por su papel decisivo en la batalla de Endor. Es un guerrero astuto y estratégico, mostrando gran lealtad hacia sus amigos y su tribu. A pesar de su pequeño tamaño, Wicket es valiente y juega un papel importante en la derrota del Imperio, utilizando su ingenio y habilidades naturales en el entorno forestal de su hogar.', 'Alianza Rebelde', 'Endor', 'Combate, estrategia en selva.', 'Hacha, bolos.', 'Warwick Davis', 'Wicket3.jpg', 'Wicket3-fotor-bg-remover-20240924172924.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sables`
--

CREATE TABLE `sables` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `enpuniadura` text NOT NULL,
  `cristal` text NOT NULL,
  `hoja` text NOT NULL,
  `imagen_uno` varchar(100) NOT NULL,
  `imagen_dos` varchar(100) NOT NULL,
  `imagen_tres` varchar(100) NOT NULL,
  `imagen_cuatro` varchar(100) NOT NULL,
  `nombre_sables_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sables`
--

INSERT INTO `sables` (`id`, `descripcion`, `enpuniadura`, `cristal`, `hoja`, `imagen_uno`, `imagen_dos`, `imagen_tres`, `imagen_cuatro`, `nombre_sables_id`) VALUES
(1, 'Los cristales Kyber rojos, utilizados principalmente por los Sith, simbolizan poder y sufrimiento. Originalmente eran naturales, pero su uso constante llevó a su escasez, lo que llevó a los Sith a crear cristales rojos artificialmente mediante la corrupción de otros colores, alimentados por el sufrimiento del usuario. Para obtener este color, un aspirante a Sith debe asesinar a un Jedi y corromper su cristal, aunque una mala concentración puede resultar en un sable inestable, como el de Kylo Ren, que requiere modificaciones para estabilizar su cristal fragmentado. A lo largo de la historia, muchos Sith, como Darth Vader y Darth Maul, han utilizado estos característicos sables de luz.', ' Las empuñaduras de los sables rojos pueden variar desde formas elegantes hasta diseños más\r\n                    intimidantes y agresivos.\r\n                    Por ejemplo, el sable de Darth Vader tiene una empuñadura más gótica, mientras que la de Darth Maul\r\n                    se considera muy distintiva por su doble hoja.', 'Los cristales rojos son artificiales o \"sangrados\", ya que los Sith suelen manipular los cristales\r\n                    kyber naturales para que expresen su propia ira y rencor.\r\n                    Este proceso les da un brillo rojo intenso simbolizando el dominio sobre la Fuerza.', 'La hoja roja es feroz y se asocia con la agresividad y el deseo de poder.\r\n                    A menudo se representa como una presencia amenazante y oscura.', 'darth.webp', 'dooku.webp', 'kylo.webp', 'rojo.jpg', 1),
(2, 'Habilidad. Usado por excelentes duelistas y personajes muy diestros en los\r\n                    estilos de combate. Durante un combate, prefieren hacer uso de sus habilidades físicas\r\n                    excepcionales más que sus habilidades de la Fuerza. En la Orden Jedi estos eran denominados como\r\n                    guardianes Jedi, y casi siempre se encontraban en misiones, algunos personajes como el Conde\r\n                    Dooku, Obi-Wan Kenobi, Anakin Skywalker, Leia Organa, Barriss Offee, Plo Koon, Ki-Adi-Mundi,\r\n                    Luke Skywalker y Rey llegaron a poseer este color de sable de luz, por otro lado el Stormtrooper\r\n                    desertor, Finn también usó una vez este color de sable para defenderse, aunque no es Jedi como\r\n                    tal.', 'Suele ser más robusta y funcional, diseñada para el combate.\r\n                    Muchos Jedi como Obi-Wan y Anakin tenían empuñaduras que eran uniformes pero elegantes, con una\r\n                    estética de guerrero.', 'Al igual que con los sables verdes, se utilizan cristales kyber.\r\n                    El cristal azul es el resultado de un proceso natural de afinación y meditación.', 'La hoja azul es intensa y representa la verdad y la lucha por la justicia.\r\n                    Es un símbolo del papel del Jedi como guerrero y defensor.', 'leia-sable-laser.jpg', 'obi.jpg', 'luke.webp', 'azul.jpg', 2),
(3, 'Sabiduría. Usado por aquellos personajes que son muy poderosos en cuanto a los\r\n                    poderes de La Fuerza. Estos son seres estudiosos e interesados en los misterios de la Fuerza.\r\n                    Durante un combate, prefieren usar la Fuerza en vez del sable. En la Orden Jedi, se les denomina\r\n                    cónsules Jedi, y no salían a misiones muy seguido, sino que se quedaban en el templo Jedi\r\n                    estudiando. Personajes destacados como Qui-Gon Jinn, Yoda, Kit Fisto, Luminara Unduli, Ashoka Tano y\r\n                    Luke Skywalker llegaron a poseer este color de sable.', 'Generalmente estilizada y a menudo hecha de metales duraderos como el aluminio o el acero.\r\n                    Puede incluir detalles ornaméntales que representan la conexión del Jedi con la Fuerza.\r\n                    Los diseños varían entre los Jedi, con ejemplos como la empuñadura de Yoda que es compacta y\r\n                    práctica.', ' El cristal \"kyber\" es el componente clave que determina el color de la hoja.\r\n                    Los cristales verdes emanan una energía que simboliza la conexión con la Fuerza y están típicamente\r\n                    asociados con la meditación.', 'La hoja del sable verde es brillante y, a menudo, más \"viva\" que los otros colores.\r\n                    Representa el equilibrio entre la luz y la oscuridad y la habilidad del Jedi para usar la Fuerza en\r\n                    armonía.', 'yoda.jpg', 'fisto.jpg', 'luke2.jpg', 'verde.jpg', 3),
(4, 'El sable de luz morado, icónico en \"Star Wars\" y asociado a Mace Windu, interpretado por Samuel L. Jackson, se destaca por su color brillante y simboliza un equilibrio entre luz y oscuridad, evidenciando el dominio de la Fuerza de su portador. Este sable no solo refleja su estatus y honor dentro de la comunidad Jedi, sino que también complementa su estilo de combate \"Vaapad\", que combina agresividad y acrobacia, consolidando su legado como un Jedi notable.', 'La empuñadura del sable de luz morado de Mace Windu es elegante, con detalles y a menudo diseñada\r\n                    para un agarre cómodo.\r\n                    Mace Windu diseñó su sable para reflejar su estilo personal y su poder como maestro Jedi.', 'El cristal que produce la luz morada es único y, aunque no se detalla ampliamente en las historias,\r\n                    se asocia con el equilibrio entre la luz y la oscuridad.\r\n                    Representa la maestría en el uso tanto de la Fuerza luminosa como de la oscura.', 'La hoja morada es distintiva y representa un enfoque equilibrado del uso de la Fuerza, sugiriendo\r\n                    que su portador puede navegar entre ambos lados.\r\n                    Mace Windu es conocido por su estilo de combate Vaapad, que utiliza la agresión de sus oponentes\r\n                    contra ellos mismos.', 'ki-adi-mundi.jpg', 'mace.jpg', 'darhtraya.jpg', 'morada.jpg', 4),
(5, 'Ahsoka Tano es la figura más reconocida con sables de luz amarillos, que son menos comunes que los colores tradicionales de los Jedi y Sith. Este color simboliza un enfoque equilibrado y un papel de protector, no ligado a las normas de la Orden Jedi. Tras separarse de los Jedi, Ahsoka usa estos sables en su búsqueda de justicia y lucha contra el lado oscuro, reflejando su camino individual y deseos morales.', 'La empuñadura de los sables de luz amarillos de Ahsoka Tano es distintiva, diseñada para ajustarse a\r\n                    su estilo de combate acrobático y ágil. Generalmente, su forma es más elegante y estilizada que las\r\n                    empuñaduras tradicionales de otros Jedi.\r\n                    La empuñadura tiene un acabado metálico con detalles que reflejan su conexión con la cultura Jedi, a\r\n                    la vez que mantiene un aspecto único.', 'El cristal del sable de luz amarillo es un cristal kyber que Ahsoka obtuvo de una manera que no se\r\n                    ha detallado en profundidad en las historias canónicas.\r\n                    A diferencia de los antiguos Jedi que imbuían sus sables a partir de la tradición, Ahsoka, siendo\r\n                    una ex-Jedi, simboliza un enfoque más personalizado y menos ortodoxo hacia la Fuerza.', 'La hoja del sable de luz amarillo es de un brillante color amarillo dorado, que simboliza su\r\n                    naturaleza equilibrada entre el camino Jedi y su independencia.\r\n                    La intensidad del color puede cambiar ligeramente dependiendo de la iluminación y el contexto,\r\n                    reflejando su conexión tanto con la Luz como con la sombra.', 'ahsoka.jpg', 'rey.jpg', 'sableamarillo.jpg', 'amarilla.jpg', 5),
(6, 'El Darksaber, creado por Tarre Vizsla, el primer Mandaloriano en la Orden Jedi, tiene un diseño único con una hoja plana y negra, simbolizando liderazgo entre los Mandalorianos; la tradición establece que quien lo empuñe y gane en combate tiene derecho a gobernar Mandalore. Aparece en varias series de Star Wars, como The Mandalorian, donde Din Djarin lo reclama tras vencer a Moff Gideon, generando tensiones y subrayando su relevancia cultural, así como la unidad y el conflicto en la sociedad Mandaloriana.', 'El Darksaber tiene una empuñadura más ancha y robusta en comparación con los sables de luz\r\n                    tradicionales, diseñada para su uso en combates cuerpo a cuerpo durante la guerra.\r\n                    La empuñadura es negra con detalles que a menudo tienen aspectos Mandalorianos, marcando su\r\n                    importancia en la cultura de este pueblo.', 'El Darksaber es único en su forma y puede tener su propio conjunto de cristales kyber que logran\r\n                    crear la distintiva hoja negra.\r\n                    Sin embargo, el lore no se ha profundizado exhaustivamente sobre el cristal específico utilizado, lo\r\n                    que hace que su naturaleza exacta siga siendo enigmática. A lo largo de la historia, el Darksaber se\r\n                    ha pasado de un guerrero Mandaloriano a otro, indicando que tiene un poderoso significado más allá\r\n                    de su material.', 'La hoja del Darksaber es de un color negro sólido, con bordes que a menudo resplandecen de manera\r\n                    más intensa. Esto la distingue claramente de cualquier otra hoja de sable de luz.\r\n                    El diseño parece más plano que las hojas tradicionales, lo que le da una apariencia distintiva y\r\n                    amenazadora. Además, su presencia se siente más poderosa e intimidante, reflejando su historia de\r\n                    lucha y liderazgo.', 'tarrevizsla.jpeg', 'dindjarin.jpg', 'maul.webp', 'negro.webp', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`id`, `nombre`) VALUES
(1, 'Episode I - The Phantom Menace (La amenaza fantasma'),
(2, 'Episode II - Attack of the Clones (El ataque de los clones)'),
(3, 'Episode III - Revenge of the Sith (La venganza de los Sith)'),
(4, 'Episode IV - A New Hope (Una nueva esperanza)'),
(5, 'Episode V - The Empire Strikes Back (El imperio contraataca)'),
(6, 'Episode VI - Return of the Jedi (El retorno del Jedi)'),
(7, 'Episode VII - The Force Awakens (El despertar de la Fuerza)'),
(8, 'Episode VIII - The Last Jedi (Los últimos Jedi)'),
(9, 'Episode IX - The Rise of Skywalker (El ascenso de Skywalker)'),
(10, 'Rogue One: A Star Wars Story');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nombre_sables`
--
ALTER TABLE `nombre_sables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peliculas` (`titulo_id`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_personajes` (`especie_id`);

--
-- Indices de la tabla `sables`
--
ALTER TABLE `sables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sables` (`nombre_sables_id`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `nombre_sables`
--
ALTER TABLE `nombre_sables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `sables`
--
ALTER TABLE `sables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_peliculas` FOREIGN KEY (`titulo_id`) REFERENCES `titulo` (`id`);

--
-- Filtros para la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `fk_personajes` FOREIGN KEY (`especie_id`) REFERENCES `especie` (`id`);

--
-- Filtros para la tabla `sables`
--
ALTER TABLE `sables`
  ADD CONSTRAINT `fk_sables` FOREIGN KEY (`nombre_sables_id`) REFERENCES `nombre_sables` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
