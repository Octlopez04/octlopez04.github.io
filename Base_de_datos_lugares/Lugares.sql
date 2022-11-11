-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-11-2022 a las 04:53:38
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19846289_jalism`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Lugares`
--

CREATE TABLE `Lugares` (
  `IDE` int(10) NOT NULL,
  `Lugar` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Descripcion` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IMG1` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IMG2` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IMG3` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Lugares`
--

INSERT INTO `Lugares` (`IDE`, `Lugar`, `Descripcion`, `IMG1`, `IMG2`, `IMG3`) VALUES
(1, 'Lagos de moreno', 'Lagos de Moreno es una ciudad ubicada en la región Altos Norte, en el estado mexicano de Jalisco. La ciudad, que es cabecera del municipio homónimo, fue declarada Patrimonio Cultural de la Nación - Zona de Monumentos Históricos, por el Instituto Nacional de Antropología e Historia en 1989.', 'lgdm_1.jpg', 'lgdm_2.jpg', 'lgdm_3.jpg'),
(2, 'Tequila', 'equila es una ciudad del estado de Jalisco, en el centro de México. Es conocida por la producción de tequila. La ciudad está cerca de los pies del volcán de Tequila y la rodean campos del ingrediente principal de este licor, la planta del agave azul. El proceso de producción se puede observar en varias destilerías y haciendas. El Museo Nacional del Tequila y el Museo Los Abuelos tienen exhibiciones sobre la historia de esta bebida.', 'tql_1.jpg', 'tql_2.jpg', 'tql_3.jpg'),
(3, 'Mazamitla', 'Enclavado en la montaña, Mazamitla es uno de los destinos más atractivos de la Cordillera, ofrece vistas privilegiadas de hermosos paisajes naturales y una gran cantidad de actividades de aventura y deporte como bicicleta de montaña, cuatrimotos, gotcha, rapel y tirolesa.', 'maz_1.jpg', 'maz_2.jpg', 'maz_3.jpg'),
(4, 'San sebastian del oeste', 'Es un pueblo de origen minero que vivió su auge durante la Colonia, visitarlo es como volver al pasado, sus iglesias, sus haciendas y sus antiguas minas permanecen como testigos del paso del tiempo y al entrar en ellos nos cuentan sus historias de grandeza.', 'ssbo_1.jpg', 'ssbo_2.jpg', 'ssbo_3'),
(5, 'Tapalpa', 'Tapalpa conserva un ambiente provinciano que fascina a los visitantes, ofrece tradiciones, sabores y un clima fresco (con una temperatura media anual de 16°C) para disfrutar de hermosos paisajes naturales que lo rodean. Atractivos: Las Pilas. ', 'tplp_1.jpg', 'tplp_2.jpg', 'tplp_3.jpg'),
(6, 'Talpa de allende', 'Talpa de Allende, combina naturaleza y cultura en un espléndido destino turístico, con variadas opciones culinarias, notables creaciones arquitectónicas, cómodos hoteles y muchos atractivos más. Es una joya turística del Estado de Jalisco, que ostenta con todo merecimiento su declaratoria de Pueblo Mágico.', 'tlpa_1.jpg', 'tlpa_2.jpg', 'tlpa_2.jpg'),
(7, 'Ajijic', 'Ajijic es un lugar para descansar y relajarse. El pueblo en sí mismo es un atractivo, gran parte de sus casas son de adobe y teja, hay también muchas casas de campo. Sus calles empedradas están llenas de árboles, la plaza principal es muy colorida y es un agradable oasis de sombra.', 'aji_1.jpg', 'aji_2.jpg', 'aji_3.jpg'),
(8, 'mascota', 'Características: Se incorporó al Programa Pueblos mágicos en el año 2015. Mascota proviene de Amaxacotlán, Mazacotla, Amaxocotlán que significa: lugar de venados y culebras. Tiene una diversidad cultural tan pintoresca y única que el visitante se irá pensando cuándo regresar a consumir los productos típicos del pueblo.', 'mas_1.jpg', 'mas_2.jpg', 'mas_3.jpg'),
(9, 'Tlaquepaque ', 'Es un destino turístico al arte en alfarería, vidrio soplado y textiles. Una ciudad colonial para caminar y admirar el arte en cada esquina. Sus principales atractivos son el Museo Regional de la Cerámica y para las compras El Parian.', 'tlqp_1.jpg', 'tlqp_2.jpg', 'tlqp_3.jpg'),
(10, 'Arandas', 'Durante el recorrido por la ciudad de Arandas es de resaltar el admirable Templo del Señor San José Obrero, con su estilo neogótico y cuya construcción comenzó en 1879. Mucho después, en 1989, este templo alcanzó la categoría de parroquia.', 'aran_1.jpg', 'aran_2.jpg', 'aran_3.jpg'),
(11, 'Chapala', 'Esta laguna cercana a Guadalajara brinda al visitante todas las comodidades que pueden encontrarse en un lugar apacible, en medio de un paisaje en el que dominan los tabachines, las jacarandas, los sauces, el árbol del fuego y el laurel de la India.', 'chap_1.jpg', 'chap_2.jpg', 'chap_3.jpg'),
(12, 'Barra de Navidad', 'Caracterizada por una sucesión de bahías rodeadas de montañas que le dan una belleza única al lugar. Ofrece tranquilas y poco visitadas playas para relajarse, también tiene una laguna del mismo nombre donde se puede bucear y pescar.', 'barra_1.jpg', 'barra_2.jpg', 'barra_3.jpg'),
(13, 'San Migel el alto', 'ciudad puramente colonial, sus edificios y fachadas han venido conservando un estilo propio y original en el ámbito de la arquitectura. También fue bendecido con hermosos paisajes naturales.', 'sanm_1.jpg', 'sanm_2.jpg', 'sanm_3.jpg'),
(14, 'Guachimontones ', 'Sitio arqueológico que se caracteriza por su impresionante traza urbana. Muestra magníficas construcciones piramidales en forma circular, juegos de pelota y zona de habitación popular. La cultura desarrollada en este lugar alcanzó grandes proporciones.', 'guachi_1.jpg', 'guachi_2.jpg', 'guachi_3.jpg'),
(15, 'Costalegre', 'Este corredor turístico comprende más de 250 kilómetros de playas hermosas, acantilados, selvas, bocas de ríos, esteros y manglares, además de varios hoteles (casi todos pequeños y algunos sumamente lujosos). Atravesar de punta a punta todo este corredor turístico toma alrededor de 4 horas por carretera.', 'costa_1.jpg', 'costa_2.jpg', 'costa_3.jpg'),
(16, 'Mismaloya', ' es una hermosa playa de 350 metros de largo, resultado de la combinación de las colinas verdes de la Sierra Madre Occidental y de las aguas del Océano Pacífico. Aquí se encuentran rústicos restaurantes, principalmente pequeñas palapas a la orilla del mar.', 'misma_1.jpg', 'misma_2.jpg', 'misma_3.jpg'),
(17, 'Careyes', ' es una costa que se encuentra en la zona sur de Jalisco en el Océano Pacífico, este lugar es un conjunto de playas, islas y lagunas, es un lugar paradisiaco, de temperatura agradable durante todo el año, Careyes es un destino muy interesante para visitar.', 'careyes_1.jpg', 'careyes_2.jpg', 'careyes_3.jpg'),
(18, 'Puerto Vallarta', 'una zona muy reconocida a nivel mundial por sus playas, paradisíacas franjas de arenas doradas y aguas cristalinas bañan la costa de la Bahía de Banderas. Aquí podrás disfrutar de las concurridas playas ubicadas en la ciudad o de aquellas más tranquilas.', 'vallarta_1.jpg', 'vallarta_2.jpg', 'vallarta_3.jpg'),
(19, 'Bolaños', 'Parroquia de San José, Templo de la Virgen de Guadalupe, Iglesia de La Playa, antigua parroquia, El Curato, la Casa de la Condesa, Casa de la Moneda y la Presidencia Municipal.', 'bolaños_1.jpg', 'bolaños.jpg', 'bolaños_3.jpg'),
(20, 'Jamay', 'Si te gusta explorar no dejes de visitar los miradores del Cerro de la Santa Cruz y Su Cristo. Si te gustan las aventuras más fuertes puedes visitar Xamay Xtremo, un ecoparque que ofrece diversas actividades al aire libre como senderismo, tiro con arco, gotcha o una tirolesa que alcanza una velocidad de 90 a 120 km/h.', 'jamay_1.jpg', 'jamay_2.jpg', 'jamay_3.jpg'),
(21, 'Zapotlán el Grande', 'Sin duda que una de las particularidades de Zapotlán el Grande, es la de ser cuna de personalidades ilustres y valiosas. Por ejemplo, allí nacieron el muralista José Clemente Orozco y el gran escritor Juan José Arreola. El centro histórico de este pueblo, se distingue por estar aportalado y contar con un bello quiosco.', 'zapo_1.jpg', 'zapo_2.jpg', 'zapo_3.jpg'),
(22, 'La Huerta', 'Conocida por sus encantadores atardeceres, cálidas playas y por estar apartada del ruido de la ciudad, por lo que se convierte en el sitio ideal de aquellos que quieren visitar la playa sin preocuparse de grandes grupos de bañistas. Sus más de 90 kilómetros de playas con distintos tipos de arena y oleaje brindan a sus turistas una amplia gama de opciones para disfrutar del municipio', 'huerta_1.jpg', 'huerta_2.jpg', 'huerta_3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Lugares`
--
ALTER TABLE `Lugares`
  ADD PRIMARY KEY (`IDE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
