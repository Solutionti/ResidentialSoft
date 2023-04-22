-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2021 a las 04:26:06
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asamblea_conjuntos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `tp_documento` int(11) DEFAULT NULL,
  `documento` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `rol_administrador` int(11) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `tp_documento`, `documento`, `nombre`, `apellido`, `correo`, `direccion`, `telefono`, `ciudad`, `departamento`, `usuario`, `password`, `rol_administrador`, `estado`, `fecha_creacion`, `id_conjunto`, `id_padre`) VALUES
(1, 2, 1110542802, 'Conjunto residencial', 'Altagracia', 'jerson_galvez@hotmail.com', 'cr 26 # 67 - 30', '3203304157', 'Ibague', 'Tolima', 'admin', '$2y$10$L5tDlpY2CitxitdQIImdsOsQBO2GyNdfEXlghJfm5To7AHK1O2XIC', 1, '101001', '2021-04-07', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `codigo_apartamento` int(11) NOT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `parqueadero` int(11) NOT NULL,
  `consecutivo` varchar(100) DEFAULT NULL,
  `coeficiente` float DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`codigo_apartamento`, `apartamento`, `bloque`, `parqueadero`, `consecutivo`, `coeficiente`, `id_conjunto`, `id_padre`) VALUES
(1, 201, 1, 0, NULL, NULL, 0, 1110542802),
(2, 203, 1, 0, NULL, NULL, 0, 1110542802),
(3, 545, 1, 0, NULL, NULL, 0, 1110542802),
(4, 546, 1, 0, NULL, NULL, 0, 1110542802),
(5, 328, 1, 0, NULL, NULL, 0, 1110542802),
(6, 656, 1, 0, NULL, NULL, 0, 1110542802),
(7, 5456, 1, 0, NULL, NULL, 0, 1110542802),
(8, 7656, 1, 0, NULL, NULL, 0, 1110542802),
(9, 656, 1, 0, NULL, NULL, 0, 1110542802),
(10, 5425, 1, 0, NULL, NULL, 0, 1110542802),
(11, 201, 1, 0, NULL, NULL, 0, 1110542802),
(12, 90878, 1, 0, NULL, NULL, 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendatarios`
--

CREATE TABLE `arrendatarios` (
  `codigo_arrendatario` int(11) NOT NULL,
  `documento_propietario` int(11) DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `tpdocumento` int(11) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `tpusuario` varchar(20) DEFAULT NULL,
  `ce_nombre` varchar(100) DEFAULT NULL,
  `ce_celular` varchar(100) DEFAULT NULL,
  `ce_parentesco` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrendatarios`
--

INSERT INTO `arrendatarios` (`codigo_arrendatario`, `documento_propietario`, `bloque`, `apartamento`, `tpdocumento`, `documento`, `fecha_nacimiento`, `nombre`, `apellido`, `correo`, `celular`, `tpusuario`, `ce_nombre`, `ce_celular`, `ce_parentesco`, `id_conjunto`, `id_padre`) VALUES
(5, 1110542802, 1, 201, 2, '434334', '2021-07-30', 'efefef', 'trgrgrg', 'admin@admin.com', '434343', 'arrendador', 'rrgrrg', '4355', 'fefefe', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asambleas`
--

CREATE TABLE `asambleas` (
  `codigo_asamblea` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_cita` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `asistentes` int(11) DEFAULT NULL,
  `porcentaje` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `link_reunion` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloques`
--

CREATE TABLE `bloques` (
  `codigo_bloque` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(20) NOT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bloques`
--

INSERT INTO `bloques` (`codigo_bloque`, `nombre`, `descripcion`, `id_conjunto`, `id_padre`) VALUES
(1, 'Bloque 1', '1', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificados`
--

CREATE TABLE `clasificados` (
  `codigo_clasificado` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `tp_clasificado` varchar(20) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificados`
--

INSERT INTO `clasificados` (`codigo_clasificado`, `bloque`, `apartamento`, `celular`, `descripcion`, `tp_clasificado`, `id_conjunto`, `id_padre`) VALUES
(1, 1, 205, '3203304157', 'apartamento 3 piezas,baño privado agua luz y telefono', 'arriendo', 0, 0),
(2, 1, 205, '3203304157', 'apartamento 3 piezas,baño privado agua luz y telefono', 'vendo', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conjuntos`
--

CREATE TABLE `conjuntos` (
  `codigo_conjunto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_asambleas`
--

CREATE TABLE `detalle_asambleas` (
  `codigo_detasamblea` int(11) NOT NULL,
  `codigo_asamblea` int(11) DEFAULT NULL,
  `codigo_bloque` int(11) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `nombre_propietario` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo_empleado` int(11) NOT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `tp_servicio` varchar(300) DEFAULT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `dias` varchar(30) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `tp_documento` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `codigo_gasto` int(11) NOT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nitprov` varchar(300) DEFAULT NULL,
  `nombreprov` varchar(100) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `observacion` varchar(300) DEFAULT NULL,
  `novedad` varchar(50) NOT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`codigo_gasto`, `documento`, `fecha`, `nitprov`, `nombreprov`, `nombre`, `valor`, `observacion`, `novedad`, `id_conjunto`, `id_padre`) VALUES
(1, '32222', '2021-07-14', '4345545', 'grgrgrgr', 'rgrgr', 700000, '        fefeefe', 'piscinas', 0, 1110542802),
(2, '2323', '2021-07-14', '35545454', 'grrgrgr', 'grggr', 700000, '        effe', 'Electricos', 0, 1110542802),
(3, '23232', '2021-07-29', '32322', 'fffef', 'frggr', 34234, '        nada', 'Parqueaderos', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huellas`
--

CREATE TABLE `huellas` (
  `codigo_huella` int(11) NOT NULL,
  `cedula` varchar(100) DEFAULT NULL,
  `dedo` varchar(100) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `mascara` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes`
--

CREATE TABLE `integrantes` (
  `codigo_integrante` int(11) NOT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `parentesco` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `tp_documento` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `codigo_mascota` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `carnet` varchar(300) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `raza` varchar(300) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `codigo_multa` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `tp_multa` varchar(100) DEFAULT NULL,
  `valor` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(3000) DEFAULT NULL,
  `estado` varchar(59) DEFAULT NULL,
  `url_foto` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `multas`
--

INSERT INTO `multas` (`codigo_multa`, `bloque`, `apartamento`, `tp_multa`, `valor`, `fecha`, `descripcion`, `estado`, `url_foto`, `id_conjunto`, `id_padre`) VALUES
(1, 1, 201, 'Llamado de atencion', 256000, '2021-08-08', 'la persona presenta un alto volumen en su vivienda y incomoda a sus vecinos ', 'ACTIVA', NULL, 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `codigo_pago` int(11) NOT NULL,
  `year` varchar(100) DEFAULT NULL,
  `mes` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `codigo_pagos` int(11) DEFAULT NULL,
  `descripcion` varchar(300) NOT NULL,
  `bloque` int(11) NOT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `url_imagen` varchar(300) NOT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`codigo_pago`, `year`, `mes`, `fecha`, `valor`, `codigo_pagos`, `descripcion`, `bloque`, `apartamento`, `url_imagen`, `id_conjunto`, `id_padre`) VALUES
(1, '2021', 'julio', '2021-07-16', 65000, 1, 'pago de administracion', 1, 201, '', 0, 1110542802),
(2, '2021', 'agosto', '2021-08-25', 65000, 1, 'pago de administracion', 1, 201, '', 0, 1110542802),
(3, '2021', 'Septiembre', '2021-01-08', 75500, 1, 'pago de administracion', 1, 201, '', 0, 1110542802),
(5, '2021', 'Noviembre', '2021-11-02', 67890, 1, 'abono noviembre', 1, 201, '', 0, 1110542802),
(6, '2021', 'Agosto', '2021-07-31', 54545, 1, 'vaor', 1, 201, '', 0, 1110542802),
(7, '2021', 'Agosto', '2021-07-31', 4545, 1, 'feefef', 1, 201, '', 0, 1110542802),
(9, '2021', 'Diciembre', '2021-12-26', 65000, 1, 'pago de administracion', 1, 201, '', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `codigo_persona` int(11) NOT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `tp_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `tp_documento` int(11) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postventas`
--

CREATE TABLE `postventas` (
  `codigo_postventa` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `tp_usuario` varchar(30) DEFAULT NULL,
  `correo` varchar(300) DEFAULT NULL,
  `mensaje` varchar(3000) DEFAULT NULL,
  `url_imagen` varchar(300) DEFAULT NULL,
  `resfecha` date DEFAULT NULL,
  `respuesta` varchar(3000) DEFAULT NULL,
  `resurl_imagen` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `codigo_pqrs` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tp_solicitud` varchar(50) DEFAULT NULL,
  `tp_usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `mensaje` varchar(3000) DEFAULT NULL,
  `url_imagen` varchar(300) DEFAULT NULL,
  `resfecha` date DEFAULT NULL,
  `resestado` varchar(50) DEFAULT NULL,
  `resmensaje` varchar(3000) DEFAULT NULL,
  `resurl_imagen` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`codigo_pqrs`, `bloque`, `apartamento`, `fecha`, `tp_solicitud`, `tp_usuario`, `nombre`, `celular`, `correo`, `mensaje`, `url_imagen`, `resfecha`, `resestado`, `resmensaje`, `resurl_imagen`, `id_conjunto`, `id_padre`) VALUES
(1, 1, 201, '2021-07-22', 'Peticion', 'Todos', 'jerson galvez', '3227659534', 'jerson_galvez@hotmail.com', 'esto es un mensaje administrativo', NULL, '2021-07-29', 'Abierta', 'por que no juega con sus bolas', NULL, 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `codigo_propietario` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `tp_documento` int(11) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `tp_usuario` varchar(20) DEFAULT NULL,
  `ce_nombre` varchar(100) DEFAULT NULL,
  `ce_celular` varchar(20) DEFAULT NULL,
  `ce_parentesco` varchar(20) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`codigo_propietario`, `bloque`, `apartamento`, `tp_documento`, `documento`, `nombre`, `apellido`, `correo`, `fecha_nacimiento`, `celular`, `tp_usuario`, `ce_nombre`, `ce_celular`, `ce_parentesco`, `id_conjunto`, `id_padre`) VALUES
(1, 1, 201, 2, '1110542802', 'jerson ', 'galvez', 'jerson@hotmail.com', '2021-12-26', '3227659540', 'todos', 'sandra carolina', '3206584789', 'mama', 0, 0),
(2, 1, 203, 2, '46565656', 'hththt', 'hthththt', 'hebecon@hotmail.com', '2021-07-18', '5545454', 'propietario', 'jyjyjyj', '76767676', 'yjyjyj', 0, 1110542802),
(3, 1, 328, 2, '4343434', 'grgrgr', 'grgrgr', 'hebecon@hotmail.com', '2021-07-13', '54545454', 'propietario', 'grrgrgr', '343343', 'ttt', 0, 1110542802),
(4, 1, 5456, 2, 'fefee', 'feefef', 'fefefef', 'fefefefe', '2021-07-06', '54545454', 'propietario', 'fefefef', '545454', 'thththt', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_parametrica`
--

CREATE TABLE `tabla_parametrica` (
  `id_tabla_parametrica` int(11) NOT NULL,
  `nombre_tabla_parametrica` varchar(300) DEFAULT NULL,
  `descripcion_tabla_parametrica` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado_tabla_parametrica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_documentos`
--

CREATE TABLE `tp_documentos` (
  `codigo_tpdocumento` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tp_documentos`
--

INSERT INTO `tp_documentos` (`codigo_tpdocumento`, `descripcion`, `id_conjunto`, `id_padre`) VALUES
(2, 'Cedula de Ciudadania', 0, 0),
(4, 'Cedula de Extranjeria', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_mascotas`
--

CREATE TABLE `tp_mascotas` (
  `codigo_tpmascota` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_pagos`
--

CREATE TABLE `tp_pagos` (
  `codigo_tpago` int(11) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tp_pagos`
--

INSERT INTO `tp_pagos` (`codigo_tpago`, `descripcion`, `id_conjunto`, `id_padre`) VALUES
(1, 'Efectivo', 0, 0),
(2, 'Cheque', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_usuarios`
--

CREATE TABLE `tp_usuarios` (
  `codigo_tpusuario` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tp_usuarios`
--

INSERT INTO `tp_usuarios` (`codigo_tpusuario`, `descripcion`, `id_conjunto`, `id_padre`) VALUES
(1, 'administradores', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_vehiculos`
--

CREATE TABLE `tp_vehiculos` (
  `codigo_tpvehiculo` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trasteos`
--

CREATE TABLE `trasteos` (
  `codigo_trasteo` int(11) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tp_trasteo` varchar(20) DEFAULT NULL,
  `pazysalvo` varchar(10) DEFAULT NULL,
  `aprobado` varchar(10) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trasteos`
--

INSERT INTO `trasteos` (`codigo_trasteo`, `bloque`, `apartamento`, `documento`, `fecha`, `tp_trasteo`, `pazysalvo`, `aprobado`, `id_conjunto`, `id_padre`) VALUES
(5, 1, 545, '454245', '2021-07-30', 'Salida', 'Si', 'Si', 0, 1110542802),
(6, 0, 0, '', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(7, 0, 0, '', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(8, 0, 0, '', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(9, 0, 0, '1110542802', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(10, 0, 0, '1110542802', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(11, 0, 0, '1110542802', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(12, 0, 0, '1110542802', '0000-00-00', NULL, NULL, NULL, 0, 1110542802),
(13, 0, 0, '1110542802', '2021-07-31', NULL, NULL, NULL, 0, 1110542802),
(14, 1, 201, '1110542802', '2021-08-07', 'Salida', 'Si', 'Si', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `codigo_persona` int(11) DEFAULT NULL,
  `usuario` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `rol_parametrico` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores_tabla_parametrica`
--

CREATE TABLE `valores_tabla_parametrica` (
  `codigo` int(11) NOT NULL,
  `id_tabla_parametrica` int(11) DEFAULT NULL,
  `nombre_valor_parametrico` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado_valor_parametrico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `codigo_vehiculo` int(11) NOT NULL,
  `placa` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `codigo_apartamento` int(11) DEFAULT NULL,
  `tp_vehiculo` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE `visitantes` (
  `codigo_visitante` int(11) NOT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) NOT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamento` int(11) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `id_conjunto` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`codigo_visitante`, `documento`, `nombre`, `apellido`, `bloque`, `apartamento`, `descripcion`, `id_conjunto`, `id_padre`) VALUES
(1, '1110542802', 'jerson', 'galvez', 1, 201, 'vengo de visita', 0, 1110542802),
(2, '1110542802', 'jerson', 'galvez', 1, 201, '', 0, 1110542802),
(3, '1110542802', 'jerson', 'galvez', 1, 201, '', 0, 1110542802),
(4, '111054280256565', 'jerson', 'galvez', 1, 203, '', 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion1`
--

CREATE TABLE `votacion1` (
  `codigo_votacion` int(11) NOT NULL,
  `pregunta` varchar(30) DEFAULT NULL,
  `si` varchar(11) DEFAULT NULL,
  `no` varchar(11) DEFAULT NULL,
  `blanco` varchar(11) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `votantes` int(11) DEFAULT NULL,
  `quorum` int(11) DEFAULT NULL,
  `codigo_asamblea` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `votacion1`
--

INSERT INTO `votacion1` (`codigo_votacion`, `pregunta`, `si`, `no`, `blanco`, `estado`, `votantes`, `quorum`, `codigo_asamblea`, `id_conjunto`, `id_padre`) VALUES
(1, 'esta dispuesto a ser parte de ', 'SI', 'NO', 'BLANCO', 'ACTIVA', NULL, NULL, 1, 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion2`
--

CREATE TABLE `votacion2` (
  `codigo_votacion2` int(11) NOT NULL,
  `pregunta` varchar(30) DEFAULT NULL,
  `opcion1` varchar(100) DEFAULT NULL,
  `opcion2` varchar(100) DEFAULT NULL,
  `opcion3` varchar(100) DEFAULT NULL,
  `opcion4` varchar(100) DEFAULT NULL,
  `opcion5` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `votantes` int(11) DEFAULT NULL,
  `codigo_asamblea` int(11) DEFAULT NULL,
  `id_conjunto` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `votacion2`
--

INSERT INTO `votacion2` (`codigo_votacion2`, `pregunta`, `opcion1`, `opcion2`, `opcion3`, `opcion4`, `opcion5`, `estado`, `votantes`, `codigo_asamblea`, `id_conjunto`, `id_padre`) VALUES
(1, 'GEGGEEE', 'JERSON GALVEZ ', 'CARLOS FIERRO', 'MAURO COLAPO', 'PIEDAD CASTRO', 'PALOMA VALENCIA', 'ACTIVA', NULL, 1, 0, 1110542802);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto_multiple`
--

CREATE TABLE `voto_multiple` (
  `codigo_votomult` int(11) NOT NULL,
  `id_asamblea` int(11) DEFAULT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `codigo_pregunta` int(11) DEFAULT NULL,
  `respuesta` int(11) DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamentos` int(11) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voto_multiple`
--

INSERT INTO `voto_multiple` (`codigo_votomult`, `id_asamblea`, `documento`, `codigo_pregunta`, `respuesta`, `bloque`, `apartamentos`, `estado`) VALUES
(1, 1, '1110542802', 1, 5, 1, 201, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto_simple`
--

CREATE TABLE `voto_simple` (
  `codigo_votosim` int(11) NOT NULL,
  `id_asamblea` int(11) DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `codigo_pregunta` int(11) DEFAULT NULL,
  `respuesta` int(11) DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `apartamentos` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `voto_simple`
--

INSERT INTO `voto_simple` (`codigo_votosim`, `id_asamblea`, `documento`, `codigo_pregunta`, `respuesta`, `bloque`, `apartamentos`, `estado`) VALUES
(1, 1, '5657', NULL, 1, NULL, NULL, NULL),
(2, 1, '5657', NULL, 0, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `tp_documento` (`tp_documento`),
  ADD KEY `rol_administrador` (`rol_administrador`);

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`codigo_apartamento`),
  ADD KEY `bloque` (`bloque`);

--
-- Indices de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  ADD PRIMARY KEY (`codigo_arrendatario`),
  ADD KEY `tpdocumento` (`tpdocumento`);

--
-- Indices de la tabla `asambleas`
--
ALTER TABLE `asambleas`
  ADD PRIMARY KEY (`codigo_asamblea`);

--
-- Indices de la tabla `bloques`
--
ALTER TABLE `bloques`
  ADD PRIMARY KEY (`codigo_bloque`);

--
-- Indices de la tabla `clasificados`
--
ALTER TABLE `clasificados`
  ADD PRIMARY KEY (`codigo_clasificado`);

--
-- Indices de la tabla `conjuntos`
--
ALTER TABLE `conjuntos`
  ADD PRIMARY KEY (`codigo_conjunto`);

--
-- Indices de la tabla `detalle_asambleas`
--
ALTER TABLE `detalle_asambleas`
  ADD PRIMARY KEY (`codigo_detasamblea`),
  ADD KEY `codigo_asamblea` (`codigo_asamblea`),
  ADD KEY `codigo_bloque` (`codigo_bloque`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo_empleado`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`),
  ADD KEY `tp_documento` (`tp_documento`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`codigo_gasto`);

--
-- Indices de la tabla `huellas`
--
ALTER TABLE `huellas`
  ADD PRIMARY KEY (`codigo_huella`);

--
-- Indices de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD PRIMARY KEY (`codigo_integrante`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`),
  ADD KEY `tp_documento` (`tp_documento`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`codigo_mascota`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`codigo_multa`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`codigo_pago`),
  ADD KEY `codigo_pagos` (`codigo_pagos`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`codigo_persona`),
  ADD KEY `tp_documento` (`tp_documento`),
  ADD KEY `tp_usuario` (`tp_usuario`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`);

--
-- Indices de la tabla `postventas`
--
ALTER TABLE `postventas`
  ADD PRIMARY KEY (`codigo_postventa`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`codigo_pqrs`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`codigo_propietario`),
  ADD KEY `tp_documento` (`tp_documento`);

--
-- Indices de la tabla `tabla_parametrica`
--
ALTER TABLE `tabla_parametrica`
  ADD PRIMARY KEY (`id_tabla_parametrica`);

--
-- Indices de la tabla `tp_documentos`
--
ALTER TABLE `tp_documentos`
  ADD PRIMARY KEY (`codigo_tpdocumento`);

--
-- Indices de la tabla `tp_mascotas`
--
ALTER TABLE `tp_mascotas`
  ADD PRIMARY KEY (`codigo_tpmascota`);

--
-- Indices de la tabla `tp_pagos`
--
ALTER TABLE `tp_pagos`
  ADD PRIMARY KEY (`codigo_tpago`);

--
-- Indices de la tabla `tp_usuarios`
--
ALTER TABLE `tp_usuarios`
  ADD PRIMARY KEY (`codigo_tpusuario`);

--
-- Indices de la tabla `tp_vehiculos`
--
ALTER TABLE `tp_vehiculos`
  ADD PRIMARY KEY (`codigo_tpvehiculo`);

--
-- Indices de la tabla `trasteos`
--
ALTER TABLE `trasteos`
  ADD PRIMARY KEY (`codigo_trasteo`),
  ADD KEY `apartamento` (`apartamento`),
  ADD KEY `bloque` (`bloque`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD KEY `rol_parametrico` (`rol_parametrico`);

--
-- Indices de la tabla `valores_tabla_parametrica`
--
ALTER TABLE `valores_tabla_parametrica`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_tabla_parametrica` (`id_tabla_parametrica`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`codigo_vehiculo`),
  ADD KEY `codigo_apartamento` (`codigo_apartamento`),
  ADD KEY `tp_vehiculo` (`tp_vehiculo`);

--
-- Indices de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`codigo_visitante`);

--
-- Indices de la tabla `votacion1`
--
ALTER TABLE `votacion1`
  ADD PRIMARY KEY (`codigo_votacion`);

--
-- Indices de la tabla `votacion2`
--
ALTER TABLE `votacion2`
  ADD PRIMARY KEY (`codigo_votacion2`);

--
-- Indices de la tabla `voto_multiple`
--
ALTER TABLE `voto_multiple`
  ADD PRIMARY KEY (`codigo_votomult`);

--
-- Indices de la tabla `voto_simple`
--
ALTER TABLE `voto_simple`
  ADD PRIMARY KEY (`codigo_votosim`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `codigo_apartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  MODIFY `codigo_arrendatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asambleas`
--
ALTER TABLE `asambleas`
  MODIFY `codigo_asamblea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bloques`
--
ALTER TABLE `bloques`
  MODIFY `codigo_bloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clasificados`
--
ALTER TABLE `clasificados`
  MODIFY `codigo_clasificado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `conjuntos`
--
ALTER TABLE `conjuntos`
  MODIFY `codigo_conjunto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_asambleas`
--
ALTER TABLE `detalle_asambleas`
  MODIFY `codigo_detasamblea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `codigo_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `huellas`
--
ALTER TABLE `huellas`
  MODIFY `codigo_huella` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `integrantes`
--
ALTER TABLE `integrantes`
  MODIFY `codigo_integrante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `codigo_mascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `multas`
--
ALTER TABLE `multas`
  MODIFY `codigo_multa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `codigo_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `codigo_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postventas`
--
ALTER TABLE `postventas`
  MODIFY `codigo_postventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `codigo_pqrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `codigo_propietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tabla_parametrica`
--
ALTER TABLE `tabla_parametrica`
  MODIFY `id_tabla_parametrica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tp_documentos`
--
ALTER TABLE `tp_documentos`
  MODIFY `codigo_tpdocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tp_mascotas`
--
ALTER TABLE `tp_mascotas`
  MODIFY `codigo_tpmascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tp_pagos`
--
ALTER TABLE `tp_pagos`
  MODIFY `codigo_tpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tp_usuarios`
--
ALTER TABLE `tp_usuarios`
  MODIFY `codigo_tpusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tp_vehiculos`
--
ALTER TABLE `tp_vehiculos`
  MODIFY `codigo_tpvehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trasteos`
--
ALTER TABLE `trasteos`
  MODIFY `codigo_trasteo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valores_tabla_parametrica`
--
ALTER TABLE `valores_tabla_parametrica`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `codigo_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `codigo_visitante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `votacion1`
--
ALTER TABLE `votacion1`
  MODIFY `codigo_votacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `votacion2`
--
ALTER TABLE `votacion2`
  MODIFY `codigo_votacion2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `voto_multiple`
--
ALTER TABLE `voto_multiple`
  MODIFY `codigo_votomult` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `voto_simple`
--
ALTER TABLE `voto_simple`
  MODIFY `codigo_votosim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`tp_documento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`),
  ADD CONSTRAINT `administradores_ibfk_2` FOREIGN KEY (`rol_administrador`) REFERENCES `tp_usuarios` (`codigo_tpusuario`);

--
-- Filtros para la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD CONSTRAINT `apartamentos_ibfk_1` FOREIGN KEY (`bloque`) REFERENCES `bloques` (`codigo_bloque`);

--
-- Filtros para la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  ADD CONSTRAINT `arrendatarios_ibfk_3` FOREIGN KEY (`tpdocumento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`);

--
-- Filtros para la tabla `detalle_asambleas`
--
ALTER TABLE `detalle_asambleas`
  ADD CONSTRAINT `detalle_asambleas_ibfk_1` FOREIGN KEY (`codigo_asamblea`) REFERENCES `asambleas` (`codigo_asamblea`),
  ADD CONSTRAINT `detalle_asambleas_ibfk_2` FOREIGN KEY (`codigo_bloque`) REFERENCES `bloques` (`codigo_bloque`),
  ADD CONSTRAINT `detalle_asambleas_ibfk_3` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`tp_documento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`);

--
-- Filtros para la tabla `integrantes`
--
ALTER TABLE `integrantes`
  ADD CONSTRAINT `integrantes_ibfk_1` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`),
  ADD CONSTRAINT `integrantes_ibfk_2` FOREIGN KEY (`tp_documento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`);

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`codigo_pagos`) REFERENCES `tp_pagos` (`codigo_tpago`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`tp_documento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`tp_usuario`) REFERENCES `tp_usuarios` (`codigo_tpusuario`),
  ADD CONSTRAINT `personas_ibfk_3` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`);

--
-- Filtros para la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD CONSTRAINT `propietarios_ibfk_3` FOREIGN KEY (`tp_documento`) REFERENCES `tp_documentos` (`codigo_tpdocumento`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_parametrico`) REFERENCES `tp_usuarios` (`codigo_tpusuario`);

--
-- Filtros para la tabla `valores_tabla_parametrica`
--
ALTER TABLE `valores_tabla_parametrica`
  ADD CONSTRAINT `valores_tabla_parametrica_ibfk_1` FOREIGN KEY (`id_tabla_parametrica`) REFERENCES `tabla_parametrica` (`id_tabla_parametrica`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`codigo_apartamento`) REFERENCES `apartamentos` (`codigo_apartamento`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`tp_vehiculo`) REFERENCES `tp_vehiculos` (`codigo_tpvehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
