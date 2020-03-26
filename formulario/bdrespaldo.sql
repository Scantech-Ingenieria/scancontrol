-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2020 a las 16:36:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scancontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `clave` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `clave`) VALUES
(1, 'sc', 'sc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automatico`
--

CREATE TABLE `automatico` (
  `id_automatico` int(11) NOT NULL,
  `amperaje` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `tipo` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balanzas`
--

CREATE TABLE `balanzas` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `info` datetime NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `balanzas`
--

INSERT INTO `balanzas` (`id`, `address`, `cliente`, `descripcion`, `ubicacion`, `info`, `estado`) VALUES
(20, '192.168.2.31', '1', 'Grader Recepcion 6 Brazos', 'El Teniente', '2020-02-24 14:57:51', 'online'),
(21, '192.168.4.65', '1', '	\nGrader recepción 2P - ', 'Planta Chinquio', '2020-02-28 15:20:44', 'online'),
(22, '192.168.4.66', '1', 'Grader calibrado 18P -', ' Planta Chinquio', '2020-02-28 15:20:45', 'online'),
(23, '192.168.1.172', '2', 'Grader recepción 4P (172) - Mesa 4 ', 'Ilque', '2020-02-24 15:01:15', 'online'),
(24, '192.168.1.173', '2', 'Grader recepción 4P (173) - Mesa 4 ', 'Ilque', '2020-02-24 15:01:15', 'online'),
(25, '192.168.1.174', '2', 'Grader calibrado 6P (174) - Mesa 4 ', 'Ilque', '2020-02-24 15:04:24', 'online'),
(26, '192.168.1.175', '2', 'Grader calibrado 6P (175) - Mesa 4 ', 'Ilque', '2020-02-24 15:04:24', 'online'),
(27, '', '4', 'Grader Calibrado 16 Brazos Planta ', 'Puerto Montt', '2020-02-24 15:05:43', 'online'),
(28, '192.168.0.238', '5', 'Balanza Dinamica  - \n', 'Planta Chonchi', '2020-02-24 15:06:32', 'online'),
(39, '1.1.1.1', '4', 'Balanza recepción - ', 'Planta Sea flavor', '2020-03-09 00:00:00', 'online');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `id_banda` int(11) NOT NULL,
  `superficie` varchar(300) NOT NULL,
  `paso` varchar(300) NOT NULL,
  `numero_serie` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL,
  `rutaImg` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`id_banda`, `superficie`, `paso`, `numero_serie`, `descripcion`, `ancho`, `material`, `rutaImg`) VALUES
(8, 'Cerrada', '12,7', '127 SF', '• Banda modular robusta con menor peso y paso.\r\n• Puede ser usada con transferencia “nose bar”. ', '85', 'PLASTICO', '../views/dist/img/bandas/e90b971eb29f7d8f60af7294e17460fd.png'),
(10, 'Cerrada', '15,2', '150 SF', '• Banda modular leve y de fácil manipulación.\r\n• Bloqueo de la varilla por resalto en su extremidad', '58', 'PLASTICO', '../views/dist/img/bandas/46971dad2792ff1b1a247c8354064b7f.png'),
(11, 'Engomada', '15,2', '150 SF EMB', '• Bloqueo de la varilla por resalto en su extremidad.\r\n• Superficie adherente engomada sobre inyectadas en el color gris,\r\ncon resalto de 6,6 mm x 6 mm y 3 mm de altura.', '58', 'PLASTICO', '../views/dist/img/bandas/1867a4d6a91401ee1abbce1149a03744.png'),
(12, '123', '12312', '123123', '212121', '1212', 'PLASTICO', '../views/dist/img/bandas/af4970583f18aa00095e85bd344aa775.jpeg'),
(13, '123', '12', '12', '211212', '12', '12', '../views/dist/img/bandas/4ffde152ba061a33a57df003c596e699.jpeg'),
(14, '12', '123123', '123321', '123321', '132132', '123213', '../views/dist/img/bandas/e9fb406f2e6528055605f15d46c40743.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`) VALUES
(1, 'Caleta Bay'),
(2, 'Abick'),
(3, 'Mares de Chiloe'),
(4, 'Salmones Aysen'),
(5, 'Salmones de Chile'),
(6, 'Fabian'),
(7, 'Felipe'),
(8, 'Impresora'),
(9, 'Integra'),
(10, 'Francisco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion_calidad`
--

CREATE TABLE `estacion_calidad` (
  `id_calidad` int(11) NOT NULL,
  `numero_puestos` varchar(300) NOT NULL,
  `tipo_sprockets` int(11) NOT NULL,
  `cantidad_sprockets` varchar(300) NOT NULL,
  `tipo_banda` int(11) NOT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `cilindros` varchar(300) NOT NULL,
  `tipo_botoneras` int(11) NOT NULL,
  `cantidad_botoneras` varchar(300) NOT NULL,
  `tipo_sensores` int(11) NOT NULL,
  `cantidad_sensores` varchar(300) NOT NULL,
  `racors` varchar(300) NOT NULL,
  `motor_usillos` varchar(300) NOT NULL,
  `motor_capacidad` varchar(300) NOT NULL,
  `rpm` varchar(300) NOT NULL,
  `tipo_rodamientos` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estacion_calidad`
--

INSERT INTO `estacion_calidad` (`id_calidad`, `numero_puestos`, `tipo_sprockets`, `cantidad_sprockets`, `tipo_banda`, `medida_banda`, `eje`, `cilindros`, `tipo_botoneras`, `cantidad_botoneras`, `tipo_sensores`, `cantidad_sensores`, `racors`, `motor_usillos`, `motor_capacidad`, `rpm`, `tipo_rodamientos`, `id_unidad`) VALUES
(5, '2', 8, '21', 3, '123123', '1221', '231312', 2112, '123123', 5, '12', '123123', '1221', '1221', '2121', 6, 59),
(7, '6', 7, '21', 1, '123123', 'doble', '231312', 2112, '123123', 2, '21', '1212', '1221', '212121', '20000', 5, 56),
(8, '12', 7, '3', 3, '4', '21', '231312', 2112, '123123', 2, '12', '321321', '1221', 'capacidadddd', '20000', 1, NULL),
(9, '12123', 7, '21', 2, '123123', 'doble', '231312', 2112, '123123', 2, '21', 'Racors', '1221', '1221', '121212', 2, NULL),
(10, '3', 7, '3', 8, '12', '12', '12', 2112, '123123', 2, '12', '1212', '1221', '1221', 'rettre', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuentepoder`
--

CREATE TABLE `fuentepoder` (
  `id_fuentepoder` int(11) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `amperaje` varchar(300) NOT NULL,
  `corriente` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fuentepoder`
--

INSERT INTO `fuentepoder` (`id_fuentepoder`, `marca`, `amperaje`, `corriente`, `rutaImg`) VALUES
(1, 'marcafuente', '23432d', '12312', '../views/dist/img/fuentepoder/9c70b5505eb92d564a448439d9d97d6f.png'),
(2, 'trgtr', '23432d', '12312', '../views/dist/img/fuentepoder/42a8d121a5cfb1fc547b090f75c2c0bf.jpeg'),
(4, 'rtrtr', '', '', '../views/dist/img/fuentepoder/ffd2e91320fb9dd49e74927b99a12c24.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manifold`
--

CREATE TABLE `manifold` (
  `id_manifold` int(11) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `medidas` varchar(300) NOT NULL,
  `sockets` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `manifold`
--

INSERT INTO `manifold` (`id_manifold`, `marca`, `medidas`, `sockets`, `rutaImg`) VALUES
(1, '121221122112', '2w1', '21ww2', '../views/dist/img/manifold/a8e8663d699c0324b4a9f009978a4177.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paletas`
--

CREATE TABLE `paletas` (
  `id_paletas` int(11) NOT NULL,
  `tipo_paleta` varchar(300) NOT NULL,
  `medida_paleta` varchar(300) NOT NULL,
  `decs` varchar(300) NOT NULL,
  `dics` varchar(300) NOT NULL,
  `acs` varchar(300) NOT NULL,
  `aci` varchar(300) NOT NULL,
  `dici` varchar(300) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `fondo` varchar(300) NOT NULL,
  `perforacion` varchar(300) NOT NULL,
  `anclaje` varchar(300) NOT NULL,
  `alturaeje` varchar(300) NOT NULL,
  `diametroeje` varchar(300) NOT NULL,
  `medidas_brazo_leva` varchar(300) NOT NULL,
  `cilindrado` varchar(300) NOT NULL,
  `racors` varchar(300) NOT NULL,
  `orientacion` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paletas`
--

INSERT INTO `paletas` (`id_paletas`, `tipo_paleta`, `medida_paleta`, `decs`, `dics`, `acs`, `aci`, `dici`, `altura`, `ancho`, `fondo`, `perforacion`, `anclaje`, `alturaeje`, `diametroeje`, `medidas_brazo_leva`, `cilindrado`, `racors`, `orientacion`, `rutaImg`) VALUES
(2, 'tipopaletasss', '12', 'bujssss', '', '', '', 'Housing', 'EjeMedida', '', '', '', '', '', '', 'Brazo', 'Cilindrado', 'Racors', '', '../views/dist/img/paletas/b804722434b61ce1fd527aadea86639b.jpeg'),
(3, 'Tipo2', '12', '24', '', '', '', '23', '2323', '', '', '', '', '', '', '2323', '2000', '1212', '', ''),
(4, 'tipo23', '213123', '123123', '', '', '', '123132', '213312', '', '', '', '', '', '', '213312', '312312', '321321', '', ''),
(9, 'tipo', '123', '', '', '', '', '', '', '', '', '', '', '', '', 'Brazo', 'Cilindrado', '123123', '', '../views/dist/img/paletas/f2049e96abfcbfb8d3c1a0f490368902.jpeg'),
(10, 'tipo', '12', '12', '32', '12', '23', '12', '12', '123', '12', '123', '123', '12', '12', '123', '123', '123', '', '../views/dist/img/paletas/e9fb406f2e6528055605f15d46c40743.png'),
(11, '3243', '12', '23', '23', '23', '32', '32', '2332', '23', '23', '32', '32', '32', '32', '32', '323232', '2323', '', '../views/dist/img/paletas/c49fc29a23e38595c5d7a41898bcfc24.jpeg'),
(12, '324', '2323', '23', '32', '2332', '32', '32', '3232', '', '2323', '32', '3232', '32', '3223', '23', '2323', '2323', '', '../views/dist/img/paletas/ffd2e91320fb9dd49e74927b99a12c24.png'),
(13, '123123', '213123', '123', '321', '132', '123', '321', '321', '123', '123', '312', '123', '213', '231', '132', '132213', '321132', '', '../views/dist/img/paletas/1fcbf0f5088b59626dce410516363b01.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plc`
--

CREATE TABLE `plc` (
  `id_plc` int(11) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plc`
--

INSERT INTO `plc` (`id_plc`, `modelo`, `rutaImg`) VALUES
(2, '32r232r', '../views/dist/img/plc/9388ab7c9720912016dad5e0396c17ce.jpeg'),
(3, '213123', '../views/dist/img/plc/ace8981aa8e46a23a82e2ced3b344f55.jpeg'),
(4, '34234', '../views/dist/img/plc/efd5d687ff96f94e1f77d451177d68d3.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rodamientos`
--

CREATE TABLE `rodamientos` (
  `id_rodamientos` int(11) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `rodamiento` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL,
  `fijaciones` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rodamientos`
--

INSERT INTO `rodamientos` (`id_rodamientos`, `modelo`, `rodamiento`, `material`, `fijaciones`, `rutaImg`) VALUES
(7, '234', 'rwr', 'ewrwer', '1', '../views/dist/img/descanso/a293e34187a102bee73758ce69d87ffe.png'),
(9, '112', '123', 'PLASTICO', '123', '../views/dist/img/descanso/cd05821d6293a60273b7b975fd7052bc.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `tipo_sensor` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `voltaje` varchar(300) NOT NULL,
  `distancia` varchar(300) NOT NULL,
  `contacto` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `tipo_sensor`, `marca`, `modelo`, `voltaje`, `distancia`, `contacto`, `rutaImg`) VALUES
(2, 'PNP', '', 'mooooo', '', '', '', ''),
(4, 'NPN', '', '21312', '', '', '', ''),
(5, 'werwerwer', '', 'sq', 'sq', 'ss', 'contacttt', '../views/dist/img/sensor/30e6942a51061a398cc506da483e6d68.png'),
(6, '234', '21213', 'alf', 'sq', '1111111111111', '2122121', '../views/dist/img/sensor/b6bc1edee551539bb02436fd71ec5cb0.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sprockets`
--

CREATE TABLE `sprockets` (
  `id_sprockets` int(11) NOT NULL,
  `serie` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `dientes` varchar(300) NOT NULL,
  `perforacion` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sprockets`
--

INSERT INTO `sprockets` (`id_sprockets`, `serie`, `modelo`, `dientes`, `perforacion`, `descripcion`, `rutaImg`) VALUES
(7, '1', 'alf', '', '', 'desc\r\n', ''),
(8, '2', 'bef', '', '', 'wwww', ''),
(10, '123213', '122121', '213231', '231321', '231321', '../views/dist/img/sprockets/60065500cee4c4160a394d932727bfd4.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tableroelectrico`
--

CREATE TABLE `tableroelectrico` (
  `id_tableroelectrico` int(11) NOT NULL,
  `altura` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `fondo` varchar(300) NOT NULL,
  `contactor` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_automatico`
--

CREATE TABLE `telectrico_automatico` (
  `id_telectrico_automatico` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_automatico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_fuente`
--

CREATE TABLE `telectrico_fuente` (
  `id_telectrico_fuente` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `tipo_fuente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telectrico_vdf`
--

CREATE TABLE `telectrico_vdf` (
  `id_telectrico_vdf` int(11) NOT NULL,
  `id_tablero_electrico` int(11) NOT NULL,
  `cantidad` varchar(300) NOT NULL,
  `tipo_vdf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_balanza`
--

CREATE TABLE `unidades_balanza` (
  `id_unidad_balanza` int(11) NOT NULL,
  `id_balanza` varchar(200) DEFAULT NULL,
  `id_unidad_al` int(11) DEFAULT NULL,
  `id_unidad_acel` int(11) DEFAULT NULL,
  `id_unidad_desc` int(11) DEFAULT NULL,
  `id_calidad` int(11) DEFAULT NULL,
  `id_pesaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades_balanza`
--

INSERT INTO `unidades_balanza` (`id_unidad_balanza`, `id_balanza`, `id_unidad_al`, `id_unidad_acel`, `id_unidad_desc`, `id_calidad`, `id_pesaje`) VALUES
(54, NULL, 14, 17, 5, 7, 2),
(55, NULL, 14, 17, 5, 7, 2),
(56, '21', 14, 17, 5, 7, 2),
(59, '21', 17, 20, 6, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_acel`
--

CREATE TABLE `unidad_acel` (
  `id_unidad_acel` int(11) NOT NULL,
  `tipo_sprockets` varchar(300) NOT NULL,
  `cantidad_sprocket` varchar(300) NOT NULL,
  `tipo_banda` varchar(300) NOT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `motor_usillo` varchar(300) NOT NULL,
  `motor_capacidad` varchar(300) NOT NULL,
  `rpm` varchar(300) NOT NULL,
  `tipo_rodamientos` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_acel`
--

INSERT INTO `unidad_acel` (`id_unidad_acel`, `tipo_sprockets`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `motor_usillo`, `motor_capacidad`, `rpm`, `tipo_rodamientos`, `id_unidad`) VALUES
(17, '8', '3', '2', '213213', 'doble', '2222', '10000', '123', 5, 56),
(20, '7', '3', '1', '12', 'doble', 'motor 200 w', 'fewfew', 'dfsdf', 2, 59),
(21, '7', '2', '2', '213213', '21', 'motor 200 w', 'fewfew', '123', 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_alim`
--

CREATE TABLE `unidad_alim` (
  `id_unidad_alim` int(11) NOT NULL,
  `tipo_sprockets` int(11) NOT NULL,
  `cantidad_sprockets` varchar(300) NOT NULL,
  `banda_modular_tipo` int(11) NOT NULL,
  `banda_medidas` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `motor_usillo` varchar(300) NOT NULL,
  `motor_capacidad` varchar(300) NOT NULL,
  `motor_rpm` varchar(300) NOT NULL,
  `rodamientos` varchar(300) NOT NULL,
  `id_unidad_al` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_alim`
--

INSERT INTO `unidad_alim` (`id_unidad_alim`, `tipo_sprockets`, `cantidad_sprockets`, `banda_modular_tipo`, `banda_medidas`, `eje`, `motor_usillo`, `motor_capacidad`, `motor_rpm`, `rodamientos`, `id_unidad_al`) VALUES
(14, 8, '2', 2, '12', 'doble', 'motor 200 w', '10000', 'fewewf', '2', 56),
(17, 7, '12', 3, '213213', '21', 'motor 200 w', 'fewfew', '1212', '5', 59),
(18, 7, '2', 3, '213213', '21', 'wefrwe', 'fewfew', '213321', '5', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_descarga`
--

CREATE TABLE `unidad_descarga` (
  `id_unidad_descarga` int(11) NOT NULL,
  `tipo_sprocket` int(11) NOT NULL,
  `cantidad_sprocket` varchar(300) NOT NULL,
  `tipo_banda` int(11) NOT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `motor_usillo` varchar(300) NOT NULL,
  `motor_capacidad` varchar(300) NOT NULL,
  `id_tipo_paletas` int(11) NOT NULL,
  `cantidad_paletas` varchar(300) NOT NULL,
  `rpm` varchar(300) NOT NULL,
  `tipo_rodamientos` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_descarga`
--

INSERT INTO `unidad_descarga` (`id_unidad_descarga`, `tipo_sprocket`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `motor_usillo`, `motor_capacidad`, `id_tipo_paletas`, `cantidad_paletas`, `rpm`, `tipo_rodamientos`, `id_unidad`) VALUES
(5, 7, '2', 1, '12', '21', 'wefrwe', 'fewfew', 2, '3', '2121', 2, 56),
(6, 7, '3', 1, '12', '21', 'wefrwe', '10000', 3, '3', '2121', 2, 59),
(9, 8, '3', 2, '12', 'doble', 'wefrwe', 'fewfew', 2, '3', '2121', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_pesaje`
--

CREATE TABLE `unidad_pesaje` (
  `id_unidad_pesaje` int(11) NOT NULL,
  `tipo_sensores` int(11) NOT NULL,
  `cantidad_sensores` varchar(300) NOT NULL,
  `tipo_sprocket` int(11) NOT NULL,
  `cantidad_sprocket` varchar(300) NOT NULL,
  `tipo_banda` int(11) NOT NULL,
  `medida_banda` varchar(300) NOT NULL,
  `eje` varchar(300) NOT NULL,
  `motor_usillo` varchar(300) NOT NULL,
  `motor_capacidad` varchar(300) NOT NULL,
  `rpm` varchar(300) NOT NULL,
  `tipo_rodamientos` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_pesaje`
--

INSERT INTO `unidad_pesaje` (`id_unidad_pesaje`, `tipo_sensores`, `cantidad_sensores`, `tipo_sprocket`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `motor_usillo`, `motor_capacidad`, `rpm`, `tipo_rodamientos`, `id_unidad`) VALUES
(2, 2, '12', 8, '24', 4, '233', '21', '12', '10000', 'dfsdf', 1, 56),
(4, 5, 'ertr', 7, 'tert', 2, 'reter', 'tre', 'rteret', 'rte', 'rettre', 1, 59),
(5, 2, '2', 7, '3', 1, '12', '21', 'wefrwe', '10000', '123', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variador_frecuencia`
--

CREATE TABLE `variador_frecuencia` (
  `id_vdf` int(11) NOT NULL,
  `potencia` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `rutaImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `automatico`
--
ALTER TABLE `automatico`
  ADD PRIMARY KEY (`id_automatico`);

--
-- Indices de la tabla `balanzas`
--
ALTER TABLE `balanzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`id_banda`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  ADD PRIMARY KEY (`id_calidad`),
  ADD KEY `estacion_calidad_ibfk_1` (`id_unidad`);

--
-- Indices de la tabla `fuentepoder`
--
ALTER TABLE `fuentepoder`
  ADD PRIMARY KEY (`id_fuentepoder`);

--
-- Indices de la tabla `manifold`
--
ALTER TABLE `manifold`
  ADD PRIMARY KEY (`id_manifold`);

--
-- Indices de la tabla `paletas`
--
ALTER TABLE `paletas`
  ADD PRIMARY KEY (`id_paletas`);

--
-- Indices de la tabla `plc`
--
ALTER TABLE `plc`
  ADD PRIMARY KEY (`id_plc`);

--
-- Indices de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  ADD PRIMARY KEY (`id_rodamientos`);

--
-- Indices de la tabla `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indices de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  ADD PRIMARY KEY (`id_sprockets`);

--
-- Indices de la tabla `tableroelectrico`
--
ALTER TABLE `tableroelectrico`
  ADD PRIMARY KEY (`id_tableroelectrico`);

--
-- Indices de la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  ADD PRIMARY KEY (`id_telectrico_automatico`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_automatico_ibfk_2` (`tipo_automatico`);

--
-- Indices de la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  ADD PRIMARY KEY (`id_telectrico_fuente`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_fuente_ibfk_2` (`tipo_fuente`);

--
-- Indices de la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  ADD PRIMARY KEY (`id_telectrico_vdf`),
  ADD KEY `id_tablero_electrico` (`id_tablero_electrico`),
  ADD KEY `telectrico_vdf_ibfk_2` (`tipo_vdf`);

--
-- Indices de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  ADD PRIMARY KEY (`id_unidad_balanza`),
  ADD KEY `id_unidad_desc` (`id_unidad_desc`),
  ADD KEY `unidades_balanza_ibfk_1` (`id_unidad_al`),
  ADD KEY `unidades_balanza_ibfk_3` (`id_unidad_acel`),
  ADD KEY `unidades_balanza_ibfk_4` (`id_calidad`),
  ADD KEY `unidades_balanza_ibfk_5` (`id_pesaje`);

--
-- Indices de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  ADD PRIMARY KEY (`id_unidad_acel`),
  ADD KEY `unidad_acel_ibfk_1` (`id_unidad`);

--
-- Indices de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  ADD PRIMARY KEY (`id_unidad_alim`),
  ADD KEY `unidad_alim_ibfk_1` (`id_unidad_al`);

--
-- Indices de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  ADD PRIMARY KEY (`id_unidad_descarga`),
  ADD KEY `unidad_descarga_ibfk_1` (`id_unidad`);

--
-- Indices de la tabla `unidad_pesaje`
--
ALTER TABLE `unidad_pesaje`
  ADD PRIMARY KEY (`id_unidad_pesaje`),
  ADD KEY `unidad_pesaje_ibfk_1` (`id_unidad`);

--
-- Indices de la tabla `variador_frecuencia`
--
ALTER TABLE `variador_frecuencia`
  ADD PRIMARY KEY (`id_vdf`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `automatico`
--
ALTER TABLE `automatico`
  MODIFY `id_automatico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `balanzas`
--
ALTER TABLE `balanzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  MODIFY `id_calidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `fuentepoder`
--
ALTER TABLE `fuentepoder`
  MODIFY `id_fuentepoder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `manifold`
--
ALTER TABLE `manifold`
  MODIFY `id_manifold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `paletas`
--
ALTER TABLE `paletas`
  MODIFY `id_paletas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `plc`
--
ALTER TABLE `plc`
  MODIFY `id_plc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  MODIFY `id_rodamientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  MODIFY `id_sprockets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tableroelectrico`
--
ALTER TABLE `tableroelectrico`
  MODIFY `id_tableroelectrico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  MODIFY `id_telectrico_automatico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  MODIFY `id_telectrico_fuente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  MODIFY `id_telectrico_vdf` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  MODIFY `id_unidad_balanza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  MODIFY `id_unidad_acel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  MODIFY `id_unidad_alim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  MODIFY `id_unidad_descarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `unidad_pesaje`
--
ALTER TABLE `unidad_pesaje`
  MODIFY `id_unidad_pesaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `variador_frecuencia`
--
ALTER TABLE `variador_frecuencia`
  MODIFY `id_vdf` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  ADD CONSTRAINT `estacion_calidad_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidades_balanza` (`id_unidad_balanza`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `telectrico_automatico`
--
ALTER TABLE `telectrico_automatico`
  ADD CONSTRAINT `telectrico_automatico_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_automatico_ibfk_2` FOREIGN KEY (`tipo_automatico`) REFERENCES `automatico` (`id_automatico`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telectrico_fuente`
--
ALTER TABLE `telectrico_fuente`
  ADD CONSTRAINT `telectrico_fuente_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_fuente_ibfk_2` FOREIGN KEY (`tipo_fuente`) REFERENCES `fuentepoder` (`id_fuentepoder`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `telectrico_vdf`
--
ALTER TABLE `telectrico_vdf`
  ADD CONSTRAINT `telectrico_vdf_ibfk_1` FOREIGN KEY (`id_tablero_electrico`) REFERENCES `tableroelectrico` (`id_tableroelectrico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telectrico_vdf_ibfk_2` FOREIGN KEY (`tipo_vdf`) REFERENCES `variador_frecuencia` (`id_vdf`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  ADD CONSTRAINT `unidades_balanza_ibfk_1` FOREIGN KEY (`id_unidad_al`) REFERENCES `unidad_alim` (`id_unidad_alim`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_2` FOREIGN KEY (`id_unidad_desc`) REFERENCES `unidad_descarga` (`id_unidad_descarga`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_3` FOREIGN KEY (`id_unidad_acel`) REFERENCES `unidad_acel` (`id_unidad_acel`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_4` FOREIGN KEY (`id_calidad`) REFERENCES `estacion_calidad` (`id_calidad`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `unidades_balanza_ibfk_5` FOREIGN KEY (`id_pesaje`) REFERENCES `unidad_pesaje` (`id_unidad_pesaje`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  ADD CONSTRAINT `unidad_acel_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidades_balanza` (`id_unidad_balanza`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  ADD CONSTRAINT `unidad_alim_ibfk_1` FOREIGN KEY (`id_unidad_al`) REFERENCES `unidades_balanza` (`id_unidad_balanza`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  ADD CONSTRAINT `unidad_descarga_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidades_balanza` (`id_unidad_balanza`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad_pesaje`
--
ALTER TABLE `unidad_pesaje`
  ADD CONSTRAINT `unidad_pesaje_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidades_balanza` (`id_unidad_balanza`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
