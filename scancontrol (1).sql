-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2020 a las 19:41:08
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
  `tipo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automatico`
--

INSERT INTO `automatico` (`id_automatico`, `amperaje`, `marca`, `tipo`) VALUES
(1, 'amm', 'marc', 'tip'),
(2, 'nuevo', 'marc', 'tipo22');

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
(20, '', 'Caleta Bay', 'Grader Recepcion 6 Brazos', '', '2020-02-24 14:57:51', 'online'),
(21, '192.168.4.65', 'Caleta bay ', 'Grader recepción 2P - Planta Chinquio', '', '2020-02-28 15:20:44', 'online'),
(22, '192.168.4.66', 'Caleta bay', 'Grader calibrado 18P - Planta Chinquio', '', '2020-02-28 15:20:45', 'online'),
(23, '', 'Abick', 'Grader Recepcion 4 Brazos ', '', '2020-02-24 15:01:15', 'online'),
(24, '', 'Abick', 'Grader Recepcion 4 Brazos', '', '2020-02-24 15:01:15', 'online'),
(25, '', 'Abick', 'Grader Calibrado 6 Brazos', '', '2020-02-24 15:04:24', 'online'),
(26, '', 'Abick', 'Grader Calibrado 6 Brazos', '', '2020-02-24 15:04:24', 'online'),
(27, '', 'Salmones Aysen', 'Grader Calibrado 16 Brazos', '', '2020-02-24 15:05:43', 'online'),
(28, '', 'Salmones de Chile', 'Balanza Dinamica', '', '2020-02-24 15:06:32', 'online'),
(29, '', 'Mares de Chiloe', 'Grader Calibrado 8 Brazos', '', '2020-02-24 15:06:32', 'online'),
(30, '0', 'Integra', 'Grader Calibrado 8 Brazos', '', '2020-02-24 15:07:42', 'online'),
(31, '192.168.1.6', 'Francisco', 'datos', '', '2020-02-24 14:57:51', 'online'),
(32, '192.168.1.100', 'impresora_oficina', 'impresora', '', '2020-02-28 10:18:24', 'online'),
(33, '192.168.1.5', 'Fabian', 'Fabian', '', '2020-02-28 10:18:23', 'offline'),
(35, '192.168.1.4', 'SCANTECH', 'PANCHO CELU', '', '2020-02-28 10:18:11', 'offline'),
(36, '192.168.1.9', 'Felipe', 'PC', '', '2020-02-28 10:18:25', 'online'),
(37, '', 'fdsfds', '', '', '0000-00-00 00:00:00', '2020-02-28'),
(38, '', 'fdsfds', '', '', '0000-00-00 00:00:00', '2020-02-28'),
(39, '192.122.12.1', 'Caleta Bay', 'asdasdsasda', '', '2020-02-28 00:00:00', 'Online'),
(40, '1212121212', 'calte', 'wqeewq', '', '2020-02-28 00:00:00', 'Offline'),
(41, '1212121212', 'calte', 'wqeewq', '', '2020-02-28 00:00:00', 'Offline'),
(42, '000000', 'client', 'descripcion', '', '2020-02-06 00:00:00', 'Offline'),
(43, '', 'clientesss', '', '', '2020-02-07 00:00:00', 'Offline'),
(44, '66666', 'calte', '121212', '', '2020-02-28 00:00:00', 'Offline'),
(45, '1291212', 'calte', '12e21e', '', '2020-02-28 00:00:00', 'Online'),
(46, '222222', 'Abick', 'Abr', '', '2020-03-02 00:00:00', 'Online'),
(47, '22222222', 'Caleta Bay', 'eeeee', '', '2020-03-02 00:00:00', 'Online'),
(49, '192912123', '4', 'Grader', 'Chiloe', '2020-03-03 00:00:00', 'Online'),
(50, '23423', '1', 'Balanza grader', 'El Teniente', '2020-03-03 00:00:00', 'Online'),
(51, '123123', '3', '132312', 'Chiloe', '2020-03-04 00:00:00', 'Online'),
(53, '1222121', '3', '1222', 'chiloe', '2020-03-04 00:00:00', 'Offline'),
(54, '213123321', '4', '12312', 'Chiloe', '2020-03-05 00:00:00', 'Offline');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandas`
--

CREATE TABLE `bandas` (
  `id_banda` int(11) NOT NULL,
  `numero_serie` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `ancho` varchar(300) NOT NULL,
  `material` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bandas`
--

INSERT INTO `bandas` (`id_banda`, `numero_serie`, `descripcion`, `ancho`, `material`) VALUES
(1, '2334532252', 'color blanco', '300', 'plastico');

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
(3, 'Salmones de Chile'),
(4, 'Abick'),
(5, 'Mares de Chiloe'),
(6, 'Salmones Aysen'),
(7, 'Integra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion_calidad`
--

CREATE TABLE `estacion_calidad` (
  `id_calidad` int(11) NOT NULL,
  `numero_puestos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estacion_calidad`
--

INSERT INTO `estacion_calidad` (`id_calidad`, `numero_puestos`) VALUES
(1, '1111111'),
(2, '112'),
(4, '34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paletas`
--

CREATE TABLE `paletas` (
  `id_paletas` int(11) NOT NULL,
  `tipo_paleta` varchar(300) NOT NULL,
  `medida_paleta` varchar(300) NOT NULL,
  `medida_bujes_paleta` varchar(300) NOT NULL,
  `medidas_housing` varchar(300) NOT NULL,
  `medidas_eje_paleta` varchar(300) NOT NULL,
  `medidas_brazo_leva` varchar(300) NOT NULL,
  `cilindrado` varchar(300) NOT NULL,
  `racors` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paletas`
--

INSERT INTO `paletas` (`id_paletas`, `tipo_paleta`, `medida_paleta`, `medida_bujes_paleta`, `medidas_housing`, `medidas_eje_paleta`, `medidas_brazo_leva`, `cilindrado`, `racors`) VALUES
(2, 'tipopaletasss', '12', 'Bujes', 'Housing', 'EjeMedida', 'Brazo', 'Cilindrado', 'Racors'),
(3, 'Tipo2', '12', '24', '23', '2323', '2323', '2000', '1212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sprockets`
--

CREATE TABLE `sprockets` (
  `id_sprockets` int(11) NOT NULL,
  `serie` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sprockets`
--

INSERT INTO `sprockets` (`id_sprockets`, `serie`, `modelo`, `descripcion`) VALUES
(7, '1', 'alf', 'desc\r\n'),
(8, '2', 'bef', 'wwww');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_balanza`
--

CREATE TABLE `unidades_balanza` (
  `id_unidad_balanza` int(11) NOT NULL,
  `id_balanza` int(11) NOT NULL,
  `id_unidad_alim` int(11) NOT NULL,
  `id_unidad_acel` int(11) NOT NULL,
  `id_unidad_desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades_balanza`
--

INSERT INTO `unidades_balanza` (`id_unidad_balanza`, `id_balanza`, `id_unidad_alim`, `id_unidad_acel`, `id_unidad_desc`) VALUES
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0),
(3, 0, 0, 0, 0);

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
  `motor_capacidad` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_acel`
--

INSERT INTO `unidad_acel` (`id_unidad_acel`, `tipo_sprockets`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `motor_usillo`, `motor_capacidad`) VALUES
(2, '8', '3', '1', '12', 'doble', 'motor 200 w', '10000'),
(4, '7', '10', '1', '21', '23333', '2222', '2112');

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
  `motor_rpm` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_alim`
--

INSERT INTO `unidad_alim` (`id_unidad_alim`, `tipo_sprockets`, `cantidad_sprockets`, `banda_modular_tipo`, `banda_medidas`, `eje`, `motor_usillo`, `motor_capacidad`, `motor_rpm`) VALUES
(1, 8, '2', 1, '213213', 'fewefw', 'wefrwe', 'fewfew', 'fewewf'),
(2, 7, '100', 1, '233', 'ejess', 'usillosss', 'capacidadddd', 'fewewf'),
(4, 7, '7', 1, '12', '2', '2222', '12', '1212');

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
  `cantidad_paletas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_descarga`
--

INSERT INTO `unidad_descarga` (`id_unidad_descarga`, `tipo_sprocket`, `cantidad_sprocket`, `tipo_banda`, `medida_banda`, `eje`, `motor_usillo`, `motor_capacidad`, `id_tipo_paletas`, `cantidad_paletas`) VALUES
(1, 7, '2121', 1, '12', '21', 'wefrwe', '10000', 3, '3'),
(3, 8, '23', 1, '1212', '2112', '12', '212121', 2, '12112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variador_frecuencia`
--

CREATE TABLE `variador_frecuencia` (
  `id_vdf` int(11) NOT NULL,
  `potencia` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `variador_frecuencia`
--

INSERT INTO `variador_frecuencia` (`id_vdf`, `potencia`, `marca`) VALUES
(1, '12', 'MArcasss'),
(2, '12342', 'marca');

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
  ADD PRIMARY KEY (`id_calidad`);

--
-- Indices de la tabla `paletas`
--
ALTER TABLE `paletas`
  ADD PRIMARY KEY (`id_paletas`);

--
-- Indices de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  ADD PRIMARY KEY (`id_sprockets`);

--
-- Indices de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  ADD PRIMARY KEY (`id_unidad_balanza`);

--
-- Indices de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  ADD PRIMARY KEY (`id_unidad_acel`);

--
-- Indices de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  ADD PRIMARY KEY (`id_unidad_alim`);

--
-- Indices de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  ADD PRIMARY KEY (`id_unidad_descarga`);

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
  MODIFY `id_automatico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `balanzas`
--
ALTER TABLE `balanzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `estacion_calidad`
--
ALTER TABLE `estacion_calidad`
  MODIFY `id_calidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `paletas`
--
ALTER TABLE `paletas`
  MODIFY `id_paletas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sprockets`
--
ALTER TABLE `sprockets`
  MODIFY `id_sprockets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `unidades_balanza`
--
ALTER TABLE `unidades_balanza`
  MODIFY `id_unidad_balanza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `unidad_acel`
--
ALTER TABLE `unidad_acel`
  MODIFY `id_unidad_acel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `unidad_alim`
--
ALTER TABLE `unidad_alim`
  MODIFY `id_unidad_alim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `unidad_descarga`
--
ALTER TABLE `unidad_descarga`
  MODIFY `id_unidad_descarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `variador_frecuencia`
--
ALTER TABLE `variador_frecuencia`
  MODIFY `id_vdf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
