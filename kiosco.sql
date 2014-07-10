-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2012 a las 09:05:25
-- Versión del servidor: 5.5.25
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kiosco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_Administrador` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Persona` int(10) NOT NULL,
  PRIMARY KEY (`ID_Administrador`),
  KEY `ID_Persona` (`ID_Persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_Administrador`, `ID_Persona`) VALUES
(8, 48),
(9, 52),
(10, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthAssignment`
--

CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('administrador', '48', NULL, 'N;'),
('administrador', '52', NULL, 'N;'),
('administrador', '53', NULL, 'N;'),
('proveedor', '44', NULL, 'N;'),
('proveedor', '46', NULL, 'N;'),
('proveedor', '55', NULL, 'N;'),
('proveedor', '57', NULL, 'N;'),
('proveedor', '58', NULL, 'N;'),
('usuario', '47', NULL, 'N;'),
('usuario', '49', NULL, 'N;'),
('usuario', '50', NULL, 'N;'),
('usuario', '51', NULL, 'N;'),
('usuario', '54', NULL, 'N;'),
('usuario', '56', NULL, 'N;'),
('usuario', '57', NULL, 'N;'),
('usuario', '59', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItem`
--

CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('administrador', 2, '', NULL, 'N;'),
('proveedor', 2, '', '', 'N;'),
('usuario', 2, '', '', 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItemChild`
--

CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Carrito` int(10) NOT NULL AUTO_INCREMENT,
  `Costo_Total` float DEFAULT '0',
  `ID_Usuario` int(11) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'a',
  `fecha_expiracion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Carrito`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`ID_Carrito`, `Costo_Total`, `ID_Usuario`, `estado`, `fecha_expiracion`) VALUES
(39, 0, 17, 'a', '2012-12-04 01:14:29'),
(48, 0, 19, 'a', NULL),
(49, 19000, 13, 'd', NULL),
(50, 0, 13, 'a', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_producto_recibo_pago`
--

CREATE TABLE `contenido_producto_recibo_pago` (
  `ID_Producto` int(10) NOT NULL,
  `ID_recibo` int(10) NOT NULL,
  PRIMARY KEY (`ID_Producto`,`ID_recibo`),
  KEY `ID_recibo` (`ID_recibo`),
  KEY `ID_Producto` (`ID_Producto`),
  KEY `ID_recibo_2` (`ID_recibo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `ID_Contrato` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Proveedor` int(10) NOT NULL,
  `Cantidad_Producto` int(10) NOT NULL,
  `Vigente` varchar(20) NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_Contrato` date NOT NULL,
  `Fecha_Revisado` date NOT NULL,
  `monto_total` float NOT NULL,
  `estado` varchar(1) NOT NULL,
  PRIMARY KEY (`ID_Contrato`),
  KEY `ID_Proveedor` (`ID_Proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`ID_Contrato`, `ID_Proveedor`, `Cantidad_Producto`, `Vigente`, `Descripcion`, `Fecha_Contrato`, `Fecha_Revisado`, `monto_total`, `estado`) VALUES
(6, 23, 50, '', '50 cocodrilos para defensa personal, son una buena compañía.', '2012-12-06', '0000-00-00', 25800, 'P'),
(7, 23, 20, '', '20 televisores de 119 pulgadas.', '2012-12-06', '2012-12-06', 100000, 'A'),
(8, 21, 123, '', 'Maalox Antiacido para el alivio estomacal', '2012-12-06', '0000-00-00', 1000, 'P');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deposito`
--

CREATE TABLE `deposito` (
  `Numero_Deposito` int(30) NOT NULL,
  `ID_Pago` int(10) NOT NULL,
  `monto_depositado` float NOT NULL,
  PRIMARY KEY (`ID_Pago`),
  KEY `ID_Pago` (`ID_Pago`),
  KEY `ID_Pago_2` (`ID_Pago`),
  KEY `ID_Pago_3` (`ID_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deposito`
--

INSERT INTO `deposito` (`Numero_Deposito`, `ID_Pago`, `monto_depositado`) VALUES
(123, 37, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `Pais` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Codigo_Postal` int(10) NOT NULL,
  `ID_Persona` int(10) NOT NULL,
  PRIMARY KEY (`ID_Persona`),
  KEY `ID_Persona` (`ID_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`Pais`, `Estado`, `Ciudad`, `Direccion`, `Codigo_Postal`, `ID_Persona`) VALUES
('', '', '', '', 0, 44),
('', '', '', '', 0, 46),
('Venezuela', 'Merida', 'Ejido', 'La Comarca', 5111, 47),
('', '', '', '', 0, 54),
('', '', '', '', 0, 55),
('', '', '', '', 0, 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuye`
--

CREATE TABLE `distribuye` (
  `RIF` varchar(30) NOT NULL,
  `ID_Producto` int(30) NOT NULL,
  PRIMARY KEY (`RIF`,`ID_Producto`),
  KEY `ID_Producto` (`ID_Producto`),
  KEY `RIF` (`RIF`),
  KEY `ID_Producto_2` (`ID_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `ID_Envio` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre_Empresa` varchar(30) NOT NULL,
  `Costo_Envio` float NOT NULL,
  `Detalles` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Envio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Factura` int(10) NOT NULL AUTO_INCREMENT,
  `Monto` float NOT NULL,
  `Impuesto` float NOT NULL,
  `Fecha_Factura` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_Pago` int(10) NOT NULL,
  `ID_Carrito` int(10) NOT NULL,
  `ID_Usuario` int(10) NOT NULL,
  PRIMARY KEY (`ID_Factura`),
  KEY `ID_Pago` (`ID_Pago`),
  KEY `ID_Carrito` (`ID_Carrito`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Factura`, `Monto`, `Impuesto`, `Fecha_Factura`, `ID_Pago`, `ID_Carrito`, `ID_Usuario`) VALUES
(13, 19000, 0, '2012-12-06 13:18:41', 37, 49, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_proveedor`
--

CREATE TABLE `historial_proveedor` (
  `ID_Historial_Proveedor` int(10) NOT NULL,
  `ID_Proveedor` int(10) NOT NULL,
  PRIMARY KEY (`ID_Historial_Proveedor`,`ID_Proveedor`),
  KEY `ID_Historial_Proveedor` (`ID_Historial_Proveedor`),
  KEY `ID_Historial_Proveedor_2` (`ID_Historial_Proveedor`),
  KEY `ID_Historial_Proveedor_3` (`ID_Historial_Proveedor`),
  KEY `ID_Proveedor` (`ID_Proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_usuario`
--

CREATE TABLE `historial_usuario` (
  `ID_Historial` int(10) NOT NULL,
  `ID_Usuario` int(10) NOT NULL,
  PRIMARY KEY (`ID_Historial`,`ID_Usuario`),
  KEY `ID_Historial` (`ID_Historial`),
  KEY `ID_Historial_2` (`ID_Historial`,`ID_Usuario`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `ID_Pago` int(10) NOT NULL AUTO_INCREMENT,
  `Monto` float NOT NULL,
  `ID_Carrito` int(10) NOT NULL,
  PRIMARY KEY (`ID_Pago`),
  KEY `ID_Carrito` (`ID_Carrito`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`ID_Pago`, `Monto`, `ID_Carrito`) VALUES
(37, 19000, 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_Persona` int(10) NOT NULL AUTO_INCREMENT,
  `User` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  PRIMARY KEY (`ID_Persona`),
  UNIQUE KEY `User` (`User`,`Correo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_Persona`, `User`, `Clave`, `Correo`, `Nombre`, `Telefono`, `tipo`) VALUES
(44, 'alberto', '4297f44b13955235245b2497399d7a93', 'spantons_proveedor@gmail.com', 'Freddy Rondon', '123123123123', 'p'),
(46, 'alberto2', '4297f44b13955235245b2497399d7a93', 'spantons_proveedor_2@gmail.com', 'Freddy Rondon', '123123123123', 'p'),
(47, 'freddy', '4297f44b13955235245b2497399d7a93', 'spantons_user@gmail.com', 'Freddy Rondon Zambrano', '123123123123', 'u'),
(48, 'spantons', '4297f44b13955235245b2497399d7a93', 'spantons@gmail.com', 'Freddy Rondon', '123123123123', 'a'),
(52, 'guillermo', 'f742a33542cd68085f4963c877d8e49f', 'alien@gmail.com', 'guillermo', '04140802198', 'a'),
(53, 'joenco', 'd6ea057fd9407dd5d8d92f19316f2887', 'joenco@esdebian.org', 'Jorge ortega', '04120769025', 'a'),
(54, 'jacobo', '2478fc025ad74bbded1feba92ded62c0', 'jacobo@gmail.com', 'Jorge Ortega', '04120769025', 'u'),
(55, 'enrique', '8b9127934238e9a03691225c734a0a71', 'enrique@gmail.com', 'Jorge Ortega', '04120769025', 'p'),
(59, 'freddy3', '4297f44b13955235245b2497399d7a93', 'spantons_user_3@gmail.com', 'Freddy Rondon', '123123123123', 'u');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_soporte_tecnico`
--

CREATE TABLE `persona_soporte_tecnico` (
  `ID_Pregunta` int(10) NOT NULL,
  `User` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Pregunta`,`User`),
  KEY `ID_Pregunta` (`ID_Pregunta`),
  KEY `ID_Pregunta_2` (`ID_Pregunta`),
  KEY `User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(30) NOT NULL,
  `Cantidad_Inicial` int(30) NOT NULL,
  `Cantidad_Restante` int(30) NOT NULL,
  `Peso` double NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` double NOT NULL,
  `Tamano` double NOT NULL,
  PRIMARY KEY (`ID_Producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre_Producto`, `Cantidad_Inicial`, `Cantidad_Restante`, `Peso`, `Descripcion`, `Precio`, `Tamano`) VALUES
(30, 'GALAXY SIII', 20, 20, 2, 'El Samsung Galaxy S III es el nuevo smartphone Android insignia del fabricante. Posee una pantalla Super AMOLED HD 720p de 4.8 pulgadas, procesador Exynos 4 Quad de cuatro núcleos a 1.4GHz, 1GB de RAM, 16GB o 32GB de memoria interna, ranura microSD y corre Android 4.0 Ice Cream Sandwich con la interfaz TouchWiz', 9500, 1),
(31, 'iPhone 5', 20, 20, 1, 'El iPhone 5 es el nuevo teléfono móvil de Apple. Estrena pantalla de 4 pulgadas, conexión principal y detalles que podemos considerar suficientes para hablar de un cambio de diseño. Y es que el nuevo iPhone estrena el uso de aluminio para la parte trasera.\r\nTambién hay novedad en el procesador del nuevo iPhone 5. El llamado A6 es un nuevo procesador que promete doblar la velocidad y trabajo con gráficos del modelo anterior, y al que acompaña 1 GB de memoria RAM. El tamaño del procesador se ha reducido un 22%.\r\nEn el aspecto físico, además de un cuerpo más alargado, Apple le ha dado a su nuevo teléfono un grosor de tan solo 7.6 mm y un peso récord de 112 gramos. Es un 18% más delgado que el anterior iPhone.', 15000, 1),
(32, 'MacBook Pro con Retina displa', 20, 20, 2, 'Apple ha presentado en WWDC 2012 el nuevo MacBook Pro con pantalla Retina. Se trata de un dispositivo que se encuentra entre los productos MacBook Pro tradicional y el popular MacBook Air. Queda, por tanto, como un dispositivo potente con un diseño ligero y un grosor mucho más pequeño que los portátiles de la competencia con estas características.\r\nSin duda alguna extraña ver un MacBook Pro sin unidad óptica, o bien sin conectividad ethernet de serie, algo que sin duda ha sido eliminado para poder reducir el grosor hasta este punto. Como extra, nos encontramos con conectividad HDMI de serie y USB 3.0, algo fuera de lugar en los modelos anteriores.\r\nSe trata de un equipo que monta lo último en procesadores Intel, Core  i7 Ivy Bridge y un sistema de gráfica híbrida, Intel HD 4000 y la nueva GeForce GT 650M con arquitectura Kepler.\r\nOtro de los puntos a tener en cuenta es el almacenamiento, habiendo apostado de lleno por SSD que va en configuración desde 256 Gbytes hasta 768 Gbytes en la configuración más elevada.\r\nSobre la pantalla sólo podemos decir maravillas, ya que Apple ha conseguido integrar una pantalla de 15,4 pulgadas con una densidad de pixeles de 220 DPI. Ello hace una resolución de 2.880 x 1.800 pixeles, algo que permitirá a los usuarios sacar un gran partido frente a la tradicional resolución 1.440 x 900 pixeles en estos modelos.', 35000, 2),
(33, 'iPad Wifi 16gb 4ta Generacion', 10, 10, 2, 'El iPad 4 mejora algunos aspectos del nuevo iPad pero mantiene el precio de la tableta de alta gama de Apple. De este modo, nos volvemos a encontrar con un equipo con pantalla de 9,7 pulgadas con la tecnología Retina y una resolución de 2048 x 1536 píxeles que ofrece una calidad de imagen sin igual en el mercado de las tabletas. Por tanto, en lo que se refiere a sus dimensiones, estamos ante un equipo similar.\r\n\r\nDos veces más potente que el nuevo iPad\r\n\r\nLa gran novedad del iPad 4 llega de la mano de su procesador A6X, una nueva generación del chip de Apple que según la compañía "ofrece hasta el doble de potencia, tanto a nivel de CPU como de GPU" respecto al procesador A5X. Si el A6 que integra el recién salido iPhone 5 ya había dejado unos excelentes resultados en las pruebas de rendimiento y el A5X del nuevo iPad era un auténtico referente en el mercado de las tabletas por su potencia, comprobamos cómo la compañía ha dado un fuerte golpe sobre la mesa al buscar convertir el iPad 4 en el equipo más potente del mercado de los tablets. Si la fluidez con la que trabajaba el iPad de tercera generación era sobresaliente, en este caso la veremos incluso mejorada y dará pie a que los desarrolladores lancen aplicaciones y videojuegos muy avanzados para este dispositivo.\r\n', 10000, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_Proveedor` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Persona` int(10) NOT NULL,
  `RIF` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Proveedor`),
  UNIQUE KEY `RIF` (`RIF`),
  KEY `ID_Persona` (`ID_Persona`),
  KEY `ID_Persona_2` (`ID_Persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_Proveedor`, `ID_Persona`, `RIF`) VALUES
(21, 44, 'V123'),
(22, 46, 'v'),
(23, 55, '14401831-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_pago`
--

CREATE TABLE `recibo_pago` (
  `ID_Recibo` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `Monto` float NOT NULL,
  `Fecha_Recibo_Pago` date NOT NULL,
  PRIMARY KEY (`ID_Recibo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `selecciona`
--

CREATE TABLE `selecciona` (
  `ID_Producto` int(10) NOT NULL,
  `ID_Carrito` int(10) NOT NULL,
  `Cantidad_Individual` int(10) NOT NULL,
  KEY `ID_Usuario` (`ID_Producto`),
  KEY `ID_Producto` (`ID_Producto`),
  KEY `ID_Carrito` (`ID_Carrito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `selecciona`
--

INSERT INTO `selecciona` (`ID_Producto`, `ID_Carrito`, `Cantidad_Individual`) VALUES
(30, 49, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte_tecnico`
--

CREATE TABLE `soporte_tecnico` (
  `ID_Pregunta` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Persona` int(10) NOT NULL,
  `Fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Pregunta` text NOT NULL,
  `Respuesta` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_Pregunta`),
  KEY `ID_Persona` (`ID_Persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `soporte_tecnico`
--

INSERT INTO `soporte_tecnico` (`ID_Pregunta`, `ID_Persona`, `Fecha`, `Pregunta`, `Respuesta`) VALUES
(2, 44, '2012-12-06 13:23:14', 'Buenas tardes me gustaria saber cual es el porcentaje que ustedes cobran por cada articulo vendido?', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas_debito_credito`
--

CREATE TABLE `tarjetas_debito_credito` (
  `Numero_Tarjeta` int(10) NOT NULL,
  `ID_Pago` int(10) NOT NULL,
  `monto_tarjeta` float NOT NULL,
  PRIMARY KEY (`ID_Pago`),
  KEY `ID_Pagos` (`ID_Pago`),
  KEY `ID_Pagos_2` (`ID_Pago`),
  KEY `ID_Pagos_3` (`ID_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `Numero_Transferencia` int(30) NOT NULL,
  `ID_Pago` int(10) NOT NULL,
  `monto_transferido` float NOT NULL,
  PRIMARY KEY (`ID_Pago`),
  KEY `ID_Pagos` (`ID_Pago`),
  KEY `ID_Pagos_2` (`ID_Pago`),
  KEY `ID_Pagos_3` (`ID_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_registrado_factura`
--

CREATE TABLE `user_registrado_factura` (
  `User` varchar(30) NOT NULL,
  `ID_Factura` int(10) NOT NULL,
  PRIMARY KEY (`User`,`ID_Factura`),
  KEY `ID_Factura` (`ID_Factura`),
  KEY `User` (`User`),
  KEY `ID_Factura_2` (`ID_Factura`),
  KEY `ID_Factura_3` (`ID_Factura`),
  KEY `User_2` (`User`,`ID_Factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(10) NOT NULL AUTO_INCREMENT,
  `ID_Persona` int(10) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  KEY `ID_Persona` (`ID_Persona`),
  KEY `ID_Persona_2` (`ID_Persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `ID_Persona`) VALUES
(13, 47),
(17, 54),
(19, 59);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contenido_producto_recibo_pago`
--
ALTER TABLE `contenido_producto_recibo_pago`
  ADD CONSTRAINT `contenido_producto_recibo_pago_ibfk_1` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contenido_producto_recibo_pago_ibfk_2` FOREIGN KEY (`ID_recibo`) REFERENCES `recibo_pago` (`ID_Recibo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedor` (`ID_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `deposito`
--
ALTER TABLE `deposito`
  ADD CONSTRAINT `deposito_ibfk_1` FOREIGN KEY (`ID_Pago`) REFERENCES `pagos` (`ID_Pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `distribuye`
--
ALTER TABLE `distribuye`
  ADD CONSTRAINT `distribuye_ibfk_1` FOREIGN KEY (`RIF`) REFERENCES `proveedor` (`RIF`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distribuye_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_Pago`) REFERENCES `pagos` (`ID_Pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`ID_Carrito`) REFERENCES `carrito` (`ID_Carrito`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial_proveedor`
--
ALTER TABLE `historial_proveedor`
  ADD CONSTRAINT `historial_proveedor_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedor` (`ID_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial_usuario`
--
ALTER TABLE `historial_usuario`
  ADD CONSTRAINT `historial_usuario_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`ID_Carrito`) REFERENCES `carrito` (`ID_Carrito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_soporte_tecnico`
--
ALTER TABLE `persona_soporte_tecnico`
  ADD CONSTRAINT `persona_soporte_tecnico_ibfk_1` FOREIGN KEY (`User`) REFERENCES `persona` (`User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `selecciona`
--
ALTER TABLE `selecciona`
  ADD CONSTRAINT `selecciona_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selecciona_ibfk_3` FOREIGN KEY (`ID_Carrito`) REFERENCES `carrito` (`ID_Carrito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `soporte_tecnico`
--
ALTER TABLE `soporte_tecnico`
  ADD CONSTRAINT `soporte_tecnico_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarjetas_debito_credito`
--
ALTER TABLE `tarjetas_debito_credito`
  ADD CONSTRAINT `tarjetas_debito_credito_ibfk_1` FOREIGN KEY (`ID_Pago`) REFERENCES `pagos` (`ID_Pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD CONSTRAINT `transferencia_ibfk_1` FOREIGN KEY (`ID_Pago`) REFERENCES `pagos` (`ID_Pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_registrado_factura`
--
ALTER TABLE `user_registrado_factura`
  ADD CONSTRAINT `user_registrado_factura_ibfk_1` FOREIGN KEY (`User`) REFERENCES `persona` (`User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_registrado_factura_ibfk_2` FOREIGN KEY (`ID_Factura`) REFERENCES `factura` (`ID_Factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`ID_Persona`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
